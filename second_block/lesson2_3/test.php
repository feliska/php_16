<!DOCTYPE html>
<html>
<div>
    <a href="./admin.php">admin.php</a>
    <a href="./list.php">list.php</a>
    <a href="./test.php">test.php</a>
</div>
<br>

<form action="test.php" method="GET">
    <fieldset>
        <legend>Название теста:</legend>
        <input type="text" name="testName" placeholder="Введите название теста">
    <input type="submit" value="Показать тест">
    </fieldset>
</form>
</html>

<?php
    if (isset ($_GET['testName'])) {
        $testName = ($_GET['testName']);
        $testName = mb_convert_encoding($testName, "utf-8", "windows-1251");
        if (file_exists(__DIR__ . '/Tests/' . $testName . '.json')) {
            $testFile = file_get_contents(__DIR__ . '/Tests/' . $testName . '.json');
            $testContent = json_decode($testFile, TRUE);
            // echo $testFile.'<br><br><br>';
            
            echo '<form action="test.php" method="POST">';
            echo '<label>Имя пользователя: <input name="userName" type="text"></label>';
            echo '<p><b>Вопросы теста ' .$testName.':</b></p>';
            echo '<input hidden name="testName" value="'.$testName.'">';
            $i = -1;
            foreach ($testContent as $q) {
                $i++;
                echo '<fieldset><legend>'.$q['question'].'</legend>';
                foreach ($q['options'] as $opt) {        
                    echo '<label><input name="'.$i.'" type="radio" value="'.$opt.'">'.$opt.'</label><br/>';
                }
                echo '</fieldset><br>';
            }
            echo '<input type="submit" value="Отправить ответы"></form>';
            
        } else {
            header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
            include "./404/index.html";
            exit;
        }
    }
    if (!empty($_POST)) {
        $testName = $_POST['testName'];
        $answers = $_POST;
        unset($answers['testName']);
        unset($answers['userName']);
        $test = file_get_contents(__DIR__ . '/Tests/' . $testName . '.json');
        $testContent = json_decode($test, TRUE);
        $quest_count = count($testContent);

        $i = -1;
        $valid = 0;
        foreach ($testContent as $q) {
            $i++;
            if (isset($answers[$i]) && !empty($answers[$i])) {
                if ($q['answer'] == $answers[$i]) $valid++;
            }
        }
        $userName = $_POST['userName'];
        $result = 'Результат теста: ' . ceil($valid/$quest_count * 100) . '%';

        if (isset($_POST['userName']) && !empty($_POST['userName']))  {
            $image = imagecreatefromjpeg(__DIR__ . '/cert.jpg');
            $textColor = imagecolorallocate($image, 0,71, 171);
            $fontFile = __DIR__ . '/10605.ttf';
            if (!file_exists($fontFile)) {
                echo 'Файл шрифта не найден!';
                exit;
            }
            imagettftext($image, 45, 0, 150, 450, $textColor, $fontFile, $userName);
            imagettftext($image, 20, 0, 150, 600, $textColor, $fontFile, $result);
            header('Content-Type: image/jpeg');
            header('Content-Disposition: attachment; filename="cert.jpeg"');
            imagejpeg($image);
            imagedestroy($image);
        } else {
            echo $result, '<br>';
            echo 'Для получения сертификата необходимо ввести имя пользователя';
        }
    }
?>

