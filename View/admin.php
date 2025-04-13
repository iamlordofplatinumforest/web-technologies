<?php
require_once __DIR__ . '/../Public/admin/filemanager/filemanager.php';
$manager = new \FileManager\FileManager();

header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="/wt/Public/admin/filemanager/assets/style.css">
</head>
<body>
    <div id="file-manager-container">
        <?php $manager->handleRequest(); ?>
    </div>
    <script src="/wt/Public/admin/filemanager/assets/script.js"></script>
</body>
</html>
