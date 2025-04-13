<?php
namespace wt\Controller;

use wt\Repository\BookRepository;
use wt\Model\Book;
use wt\TemplateEngine;

class BookController
{
    private BookRepository $bookRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
    }

    public function showBooks(): void
    {
        $books = $this->bookRepository->getAllBooks();
        $booksArray = array_map(fn(Book $book) => [
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'image' => $book->getImage()
        ], $books);

        $template = new TemplateEngine(__DIR__ . '/../View/templates');
        echo $template->render('BookList.php', [
            'title' => 'Список книг',
            'books' => $booksArray
        ]);
    }
}

