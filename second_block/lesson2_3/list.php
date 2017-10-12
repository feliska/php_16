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
    $fileName = mb_substr(substr($file, strrpos($file, '/') + 1), 0, -5);
    $url =  './test.php?testName=' . $fileName;
    echo '<a href="'.$url.'">'.$fileName.' </a> <br>';
}
?>
