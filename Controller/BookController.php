<?php 

namespace Controller;

use Model\Book;

class BookController {
    public function showBooks() {
        $books = Book::getAllBooks();
        
        // Просто используем путь из базы данных без изменений
        $books = array_map(function($book) {
            $book->image = $book->image;  // Путь уже правильный в базе данных
            return $book;
        }, $books);
        
        include __DIR__ . '/../View/BookList.php';
    }
}
?>

?>
