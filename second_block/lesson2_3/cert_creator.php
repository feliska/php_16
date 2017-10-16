<?php

if ((isset($_GET['userName'])) && (isset($_GET['result']))) {
    $userName = $_GET['userName'];
    $result = $_GET['result'];
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
}
