<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title ?? ''); ?></title>
    <?= $this->css('/wt/Public/css/style.css') ?>
</head>
<body>
    <header>
        <h1><?= $this->e($title ?? '') ?></h1>
    </header>

    <main>
        <?= $this->blocks['content'] ?? '' ?>
    </main>

    <?= $this->js('/wt/Public/js/books.js') ?>
</body>
</html>

