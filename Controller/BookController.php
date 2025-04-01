<?php

declare(strict_types=1);

namespace wt\Controller;

use wt\Model\Book;

class BookController 
{
    public function showBooks(): void 
    {
        $books = Book::getAllBooks();
        
        $books = array_map(
            function(Book $book): Book {
                $book->image = $book->image;  
                return $book;
            },
            $books
        );
        
        include __DIR__ . '/../View/BookList.php';
    }
}
