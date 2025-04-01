<?php

declare(strict_types=1);

namespace wt\Controller;

use wt\Repository\BookRepository;
use wt\Model\Book;

class BookController 
{
    private BookRepository $bookRepository;

    public function __construct() {
        $this->bookRepository = new BookRepository();
    }

    public function showBooks(): void 
{
    $books = $this->bookRepository->getAllBooks();
    $booksArray = array_map(function(Book $book) {
        return [
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'image' => $book->getImage()
        ];
    }, $books);
    
    include __DIR__ . '/../View/BookList.php'; 
}
}

