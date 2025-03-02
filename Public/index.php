<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require __DIR__ . '/../' . $class . '.php';
});

use wt\Controllers\BookController;

$controller = new BookController();
$controller->showBooks();

