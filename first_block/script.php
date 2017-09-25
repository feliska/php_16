<?php

$user_input = $_GET['x'];
$first = 1;
$second = 1;

echo "Вы ввели число ", $user_input, '<br>';

while ($user_input) {
    if ($first > $user_input) {
        echo "Задуманное число НЕ входит в числовой ряд";
        break;
    } elseif ($first == $user_input) {
        echo "Задуманное число входит в числовой ряд";
        break;
    } else {
        $third = $first;
        $first += $second;
        $second = $third;
        echo $first, '<br>';
    }
}
