document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById("books-list");
    if (!container) return;

    const booksData = container.dataset.books;
    if (!booksData) return;

    const books = JSON.parse(booksData);

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

        container.appendChild(bookCard);
    });
});

