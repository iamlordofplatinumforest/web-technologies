<?php

declare(strict_types=1);

namespace wt\Model;

class Book {
    private string $title;
    private string $author;
    private string $image;

    public function __construct(string $title, string $author, string $image) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setImage($image);
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function setAuthor(string $author): void {
        $this->author = $author;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function setImage(string $image): void {
        $this->image = $image;
    }
}

