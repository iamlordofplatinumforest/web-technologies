<?php

declare(strict_types=1);

namespace wt\Model;

use PDO;

class Book {
    public string $title;
    public string $author;
    public string $image;

    public function __construct(string $title, string $author, string $image) {
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
    }

    public static function getAllBooks(): array {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->query("SELECT title, author, image FROM books");
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return array_map(fn(array $b): Book => new Book($b['title'], $b['author'], $b['image']), $books);
    }
}
