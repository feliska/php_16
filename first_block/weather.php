<?php

$data = array(
   // 'id' => '554234',
    'q' => 'Kaliningrad'.','.'ru',
    'lang' => 'ru',
    'units' => 'metric',
    'APPID' => '8815f7471078f4242933ab1c915a2174',
);

$params = http_build_query($data);
$url = 'http://api.openweathermap.org/data/2.5/weather?'. $params;

if ((file_exists('weather_hash.json')) && (time() - filemtime('weather_hash.json')) < 600) {
    //echo 'Файл существует и является акуальным', '<br>';
    $weather = file_get_contents('weather_hash.json');
    $all_weather = json_decode($weather, true);
} else {
    $json = (file_get_contents($url));
    file_put_contents('weather_hash.json', $json);
    $all_weather = json_decode($json, true);
    //echo 'Мы взяли новые данные для прогноза';
}

$conditions = $all_weather['weather'][0]['description'];
$temp = $all_weather['main']['temp'];
$pressure = $all_weather['main']['pressure'];
$humidity = $all_weather['main']['humidity'];
$city = $all_weather['name'];
$icon = $all_weather['weather'][0]['icon'];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Погода</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Courier, Arial, serif;
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
<h1>Погодные условия в городе<?=" " . $city ?>
    <img style="margin-bottom: -30px" src="https://openweathermap.org/img/w/<?=$icon ?>.png" width="75" height="75">
</h1>
<dl>
    <dt>Температура, °C</dt>
    <dd><?=$temp ?></dd>
</dl>
<dl>
    <dt>Погодные условия</dt>
    <dd><?=$conditions ?></dd>
</dl>
<dl>
    <dt>Влажность, %</dt>
    <dd><?=$humidity ?></dd>
</dl>
<dl>
    <dt>Давление</dt>
    <dd><?=$pressure ?></dd>
</dl>
</body>
</html>
