<?php

namespace Controllers;

use Model\Book;

class BookController {
    public function showBooks() {
        $books = [
            new Book("1984", "Джордж Оруэлл", "/img/1.jpg"),
            new Book("Мастер и Маргарита", "Михаил Булгаков", "/img/2.jpeg"),
            new Book("Преступление и наказание", "Фёдор Достоевский", "/img/3_.jpg"),
            new Book("Гарри Поттер и философский камень", "Джоан Роулинг", "/img/4.jpeg")
        ];
        
        include __DIR__ . '/../Views/book_list.php';
    }
}

