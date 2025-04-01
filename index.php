<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $file = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

require_once __DIR__ . '/Router/Router.php';

use wt\Router\Router;

$router = new Router();  
$router->handleRequest();
