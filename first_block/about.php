<?php
$myName = 'Яна';
$myAge = 30;
$myEmail = 'feliska@me.com';
$myCity = 'Калининград';
$aboutMe = 'Системный администратор высоконагруженных систем'
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Яна - Linux системный администратор</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Tahoma, Arial, serif;
        }
        dl {
            display: table-row;
        }
        dt, dd {
            display: table-cell;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<h1>Страница Яны</h1>
<dl>
    <dt>Имя</dt>
    <dd><?=$myName ?></dd>
</dl>
<dl>
    <dt>Возраст</dt>
    <dd><?=$myAge ?></dd>
</dl>
<dl>
    <dt>Email</dt>
    <dd>
        <a href="mailto:feliska@me.com" > <?=$myEmail ?> </a>
    </dd>
</dl>
<dl>
    <dt>Город</dt>
    <dd><?=$myCity ?></dd>
</dl>
<dl>
    <dt>О себе</dt>
    <dd><?=$aboutMe ?></dd>
</dl>
</body>
</html>
