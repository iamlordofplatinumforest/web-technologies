CREATE DATABASE IF NOT EXISTS book_catalog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE book_catalog;

CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    image VARCHAR(255) DEFAULT NULL
);

INSERT INTO books (title, author, image) VALUES 
('1984', 'Джордж Оруэлл', './img/1.jpg'),
('Мастер и Маргарита', 'Михаил Булгаков', '../Public/img/2.jpeg'),
('Преступление и наказание', 'Фёдор Достоевский', '../Public/img/3_.jpg'),
('Гарри Поттер и философский камень', 'Джоан Роулинг', '../Public/img/4.jpeg');

