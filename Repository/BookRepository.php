<?php

declare(strict_types=1);

namespace wt\Repository;

use PDO;
use wt\Model\Book;
use wt\Model\Database;

class BookRepository {
    private PDO $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function getAllBooks(): array {
        $stmt = $this->pdo->query("SELECT title, author, image FROM books");
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return array_map(fn(array $b): Book => new Book($b['title'], $b['author'], $b['image']), $books);
    }
}

