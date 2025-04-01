<?php

spl_autoload_register(function ($class) {
    $file = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

require_once __DIR__ . '/Router/Router.php';

use wt\Router\Router;

$router = new Router();  
$router->handleRequest();


