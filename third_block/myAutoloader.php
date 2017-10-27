<?php

namespace feliska;

spl_autoload_register(function($class) {
    include './birds/' . (str_replace('feliska', "", str_replace('\\', '/', $class))) . '.class.php';
});


spl_autoload_register(function($class) {
    include './goods/' . (str_replace('feliska', "", str_replace('\\', '/', $class))) . '.class.php';
});

spl_autoload_register(function($class) {
    include './' . (str_replace('feliska', "", str_replace('\\', '/', $class))) . '.class.php';
});

