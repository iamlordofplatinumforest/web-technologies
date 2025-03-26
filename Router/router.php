<?php

require_once '../Controller/BookController.php';

use Controller\BookController;

$routes = [
    '/' => [BookController::class, 'showBooks']
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = str_replace('/index.php', '', $uri);

if (isset($routes[$uri])) {
    [$controller, $method] = $routes[$uri];
    (new $controller())->$method();
} 
?>

