<?php

//spl_autoload- альтернатива для function __autoload($class_name) , которую уже не используют в версии php8
spl_autoload_register(function ($class_name) {
    # List all the class directories in the array.
    $array_paths = array(
        '/models/',
        '/components/'
    );

    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
});