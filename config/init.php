<?php

// config file
require_once 'config.php';

// autoload the template in index when a class is initiated
spl_autoload_register(function ($class_name) {
    require_once 'lib/' . $class_name . '.php';
});
