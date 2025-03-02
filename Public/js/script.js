const books = [
    {
        title: "1984",
        author: "Джордж Оруэлл",
        image: "../img/1.jpg"
    },
    {
        title: "Мастер и Маргарита",
        author: "Михаил Булгаков",
        image: "../img/2.jpeg"
    },
    {
        title: "Преступление и наказание",
        author: "Фёдор Достоевский",
        image: "../img/3_.jpg"
    },
    {
        title: "Гарри Поттер и философский камень",
        author: "Джоан Роулинг",
        image: "../img/4.jpeg"
    }
];

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