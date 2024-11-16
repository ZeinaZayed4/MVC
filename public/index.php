<?php

// Define ROOT directory path
define('ROOT_PATH', dirname(__FILE__));
define('ROOT_DIR', dirname('/MVC/public'));

/**
 * Run composer autoloader
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Run the framework
 */
(new illuminates\Application)->start();

//echo '<pre>';
//var_dump($router->routes());
//echo '</pre>';
