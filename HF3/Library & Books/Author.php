<?php


class Author
{
    public string $name;
    public $books = array();

    function __construct(string $name) {
        $this->name = $name;
    }

    function getName(): string {
        return $this->name;
    }

    function getBooks() {
        return $this->books;
    }

    function setName(string $name): void {
        $this->name = $name;
    }

    function setBooks($books): void {
        array_push($this->books,$books);
    }


    /**
     * @param string $title
     * @param float  $price
     * @return \Book
     */
    public function addBook(string $title, float $price): Book
    {
        $book1=new Book($title,$price, $this->name);
        $this->books[] = $book1;
        return $this->$book1;
    }
}