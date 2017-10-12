<div>
    <a href="./admin.php">admin.php</a>
    <a href="./list.php">list.php</a>
    <a href="./test.php">test.php</a>
</div>
<br>

<?php
$list = glob("./Tests/*.json");
foreach($list as $file) {
    $file = mb_convert_encoding($file, "utf-8", "windows-1251");
    $fileName = substr($file, strrpos($file, '/') + 1);
    echo "<div>$fileName</div>";
}
?>