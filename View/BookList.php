<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список книг</title>
    <link rel="stylesheet" href="../Public/css/style.css">
</head>
<body>
    <h1>Мой список книг</h1>
    <div id="books-list" class="books-container"></div>
    
    <script>
        const books = <?php echo json_encode($books); ?>;
        
        const booksList = document.getElementById("books-list");

        books.forEach(book => {
            const bookCard = document.createElement("div");
            bookCard.className = "book-card";

            const image = document.createElement("img");
            image.src = book.image;
            image.alt = book.title;

            const title = document.createElement("h2");
            title.textContent = book.title;

            const author = document.createElement("p");
            author.textContent = "Автор: " + book.author;

            bookCard.appendChild(image);
            bookCard.appendChild(title);
            bookCard.appendChild(author);

            booksList.appendChild(bookCard);
        });
    </script>

    <script src="../Public/js/script.js"></script>
</body>
</html>

