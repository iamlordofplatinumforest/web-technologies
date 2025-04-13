<?php $this->extend('layout.php') ?>
<?php $this->block('content') ?>

<div id="books-list" class="books-container" data-books='<?= json_encode($books, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>'></div>

<?php $this->endblock() ?>

