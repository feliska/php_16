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

<?php
    if (isset ($_GET['testName'])) {
        $testName = ($_GET['testName']);
        $testName = mb_convert_encoding($testName, "utf-8", "windows-1251");
        if (file_exists(__DIR__ . '/Tests/' . $testName . '.json')) {
            $testFile = file_get_contents(__DIR__ . '/Tests/' . $testName . '.json');
            $testContent = json_decode($testFile, TRUE);
            // echo $testFile.'<br><br><br>';
            
            echo '<form action="test.php" method="POST"><p><b>Вопросы теста ' .$testName.':</b></p>';
            echo '<input hidden name="testName" value="'.$testName.'">';
            $i = -1;
            foreach ($testContent as $q) {
                $i++;
                echo '<fieldset> <legend>'.$q['question'].'</legend>';
                foreach ($q['options'] as $opt) {        
                    echo '<label><input name="'.$i.'" type="radio" value="'.$opt.'">'.$opt.'</label><br/>';
                }
                echo '</fieldset><br>';
            }
            echo '<input type="submit" value="Отправить ответы"></form>';
            
        } else {
            header('HTTP/1.1 404 Not Found');
            include "./404/index.html";
            die();
        }
    }
    if (!empty($_POST)) {
        $testName = $_POST['testName'];
        $answers = $_POST;
        unset($answers['testName']);
        $test = file_get_contents(__DIR__ . '/Tests/' . $testName . '.json');
        $testContent = json_decode($test, TRUE);

        $i = -1;
        foreach ($testContent as $q) {
            $i++;
            if ($q['answer'] == $answers[$i]) {
                echo '<p>'.$q['question'].': <b>'.$answers[$i].'</b> - ответ <b style="color: green">правильный</b></p>';
            } else {
                echo '<p>'.$q['question'].': <b>'.$answers[$i].'</b> - ответ <b style="color: red">неправильный</b></p>';
            }
        }
    }
?>

