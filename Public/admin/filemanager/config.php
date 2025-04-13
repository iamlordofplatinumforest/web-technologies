<?php
define('BASE_DIR', realpath(__DIR__ . '/../../../Public'));
define('ALLOWED_DIRS', ['css', 'js', 'images', 'templates']);

require_once __DIR__ . '/auth.php';

require_once __DIR__ . '/helpers.php';

$current_path = getRequestedPath();
$full_path = getFullPath($current_path);
validatePath($full_path);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    handlePostRequest($full_path);
}

displayFileManager($full_path, $current_path);
