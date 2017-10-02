<?php

$first = 1;
$second = 1;

if (isset($_GET['x'])) {
    $user_input = $_GET['x'];
    if (is_numeric($user_input)) {
        echo "Вы ввели число ", $user_input, '<br>';
        while ($first < $user_input) {
            $third = $first;
            $first += $second;
            $second = $third;
            echo $first, '<br>';
        }
        if ($first == $user_input) {
            echo "Задуманное число входит в числовой ряд";
        } else {
            echo "Задуманное число НЕ входит в числовой ряд";
        }
    }  else {
        echo  "<b>Для работы программы вам необходимо ввести число!<b/>";
    }
} else {
    echo "<b>Вы ничего не ввели :(( Попробуйте еще раз.<b/>";
}

