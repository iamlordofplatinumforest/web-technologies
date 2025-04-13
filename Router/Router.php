<?php

declare(strict_types=1);

namespace wt\Router;

use wt\Controller\BookController;
use wt\Controller\AdminController;

class Router
{
    private array $routes;
    private string $basePath;

    public function __construct(string $basePath = '/wt')
    {
        $this->basePath = rtrim($basePath, '/');
        $this->routes = [
            '/' => [BookController::class, 'showBooks'],
            '/admin' => [AdminController::class, 'index'],
            '/admin/action' => [AdminController::class, 'handleAction'],
        ];
    }

    public function addRoute(string $path, string $controllerClass, string $method): void
    {
        $path = $this->normalizePath($path);
        $this->routes[$path] = [$controllerClass, $method];
    }

    public function handleRequest(): void
    {
        try {
            $uri = $this->getCurrentUri();
            
            if (isset($this->routes[$uri])) {
                [$controllerClass, $method] = $this->routes[$uri];
                
                if (!class_exists($controllerClass)) {
                    throw new \RuntimeException("Controller class {$controllerClass} not found");
                }
                
                if (!method_exists($controllerClass, $method)) {
                    throw new \RuntimeException("Method {$method} not found in controller {$controllerClass}");
                }
                
                $controller = new $controllerClass();
                $controller->$method();
            } else {
                $this->notFoundResponse($uri);
            }
        } catch (\Throwable $e) {
            $this->errorResponse($e);
        }
    }

    private function getCurrentUri(): string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = str_replace([$this->basePath, '/index.php'], '', $uri);
        $uri = $this->normalizePath($uri);
        error_log("Processed URI: " . $uri);
        return $uri;
    }

    private function normalizePath(string $path): string
    {
        $path = '/' . ltrim($path, '/');
        return rtrim($path, '/') ?: '/';
    }

    private function notFoundResponse(string $uri): void
    {
        header("HTTP/1.0 404 Not Found");
        echo "404 Page Not Found. URI: " . htmlspecialchars($uri, ENT_QUOTES, 'UTF-8');
        exit;
    }

    private function errorResponse(\Throwable $e): void
    {
        error_log('Router error: ' . $e->getMessage());
        header("HTTP/1.1 500 Internal Server Error");
        echo "500 Internal Server Error";
        exit;
    }
}
