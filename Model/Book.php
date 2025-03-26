<?php

namespace Model;

use PDO;

class Book {
    public $title;
    public $author;
    public $image;

    public function __construct($title, $author, $image) {
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
    }

    public static function getAllBooks() {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->query("SELECT title, author, image FROM books");
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return array_map(fn($b) => new Book($b['title'], $b['author'], $b['image']), $books);
    }
}
?>

