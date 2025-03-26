<?php

spl_autoload_register(function ($class) {
    $file = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

require dirname(__DIR__) . '/Router/router.php';

use Controller\BookController;

$controller = new BookController();
$controller->showBooks();
?>

