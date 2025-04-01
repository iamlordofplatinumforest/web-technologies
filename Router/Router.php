<?php

namespace wt\Router;

use wt\Controller\BookController;

class Router
{
    private array $routes;

    public function __construct()
    {
        $this->routes = [
            '/' => [BookController::class, 'showBooks'],
        ];
    }

    public function handleRequest(): void
{
    $basePath = '/wt';
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = str_replace([$basePath, '/index.php'], '', $uri);
    if ($uri === '') {
        $uri = '/';
    }
    if (isset($this->routes[$uri])) {
        [$controllerClass, $method] = $this->routes[$uri];
        $controller = new $controllerClass();
        $controller->$method();
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "404 Page Not Found. URI: " . htmlspecialchars($uri);
    }
}
}
