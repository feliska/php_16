<div>
    <a href="./admin.php">admin.php</a>
    <a href="./list.php">list.php</a>
    <a href="./test.php">test.php</a>
</div>
<br>

<form enctype="multipart/form-data" action="admin.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000">
    Отправить: <input name="fname" type="file">
    <input type="submit" value="Загрузить">
</form>

<?php
if (isset($_FILES['fname'])) {
    $uploaddir = __DIR__ . '/Tests';
    if (move_uploaded_file($_FILES['fname']['tmp_name'], $uploaddir . "/" . $_FILES['fname']['name'])) {
        move_uploaded_file($_FILES['fname']['tmp_name'], $uploaddir . "/" . $_FILES['fname']['name']);
        header('Location:./list.php');
    } else {
        print "There some errors!";
    }
}
?>