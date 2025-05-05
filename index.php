<?php

require_once 'config.php';
require_once 'util/Auth.php';
// require 'vendor/autoload.php'; 


// Also spl_autoload_register (Take a look at it if you like)
spl_autoload_register(function ($class) {
    require_once('libs/' . $class . '.php');
});

// function __autoload($class)
// {
//     require_once LIBS.$class.'.php';
// }

// Load the Bootstrap!
$bootstrap = new Bootstrap();

$bootstrap->init();
