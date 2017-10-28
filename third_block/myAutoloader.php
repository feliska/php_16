<?php

namespace feliska;


spl_autoload_register(function($class) {
    include './' . (str_replace(__NAMESPACE__, "", str_replace('\\', '/', $class)))
        . '.class.php';
});


spl_autoload_register(function($class) {
    include './birds/' . (str_replace(__NAMESPACE__, "", str_replace('\\', '/', $class)))
        . '.class.php';
});


spl_autoload_register(function($class) {
    include './goods/' . (str_replace(__NAMESPACE__, "", str_replace('\\', '/', $class)))
        . '.class.php';
});


spl_autoload_register(function($class) {
    include './basket/' . (str_replace(__NAMESPACE__, "", str_replace('\\', '/', $class)))
        . '.class.php';
});