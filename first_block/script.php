<?php

$first = 1;
$second = 1;

if (isset($_GET['x'])) {
    $user_input = $_GET['x'];
    switch (is_numeric($user_input)) {
        case 1:
            echo "Вы ввели число ", $user_input, '<br>';
            if ($first > $user_input) {
                echo "Задуманное число НЕ входит в числовой ряд";
                break;
            } elseif ($first == $user_input) {
                echo "Задуманное число входит в числовой ряд";
                break;
            } else {
                while ($first < $user_input) {
                    $third = $first;
                    $first += $second;
                    $second = $third;
                    echo $first, '<br>';
                }
            }
            echo '<br>', "Это числа Фибоначчи :))";
            break;
        case 0:
            echo  "<b>Для работы программы вам необходимо ввести число!<b/>";
            break;
    }
} else {
    echo "<b>Вы ничего не ввели :(( Попробуйте еще раз.<b/>";
}

