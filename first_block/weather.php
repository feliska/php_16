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
$json = (file_get_contents($url));
$all_weather = json_decode($json, True);
//print_r($all_weather);

$conditions = $all_weather['weather'][0]['description'];
$temp = $all_weather['main']['temp'];
$pressure = $all_weather['main']['pressure'];
$humidity = $all_weather['main']['humidity'];
$city = $all_weather['name'];
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
<h1>Погодные условия в городе<?=" " . $city ?></h1>
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
