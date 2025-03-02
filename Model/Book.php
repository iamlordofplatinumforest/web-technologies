<?php

namespace Model;

class Book {
    public $title;
    public $author;
    public $image;

    public function __construct($title, $author, $image) {
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
    }
}

