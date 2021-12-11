<?php
require_once "AbstractLibrary.php";

class Library extends AbstractLibrary
{
    public function getAuthors(): array {
        return parent::getAuthors();
    }

    public function setAuthors(string $authors): void {
        parent::setAuthors($authors);
    }

    public function addAuthor(string $authorName): Author {
        $a1 = new Author($authorName);
        $this->setAuthors($authorName);
        return $a1;
    }
    public function addBookForAuthor($authorName, Book $book) {

        foreach ($this->getAuthors() as $auth) {
            if ($authorName == $auth) {
                $auth->setBooks($book->getTitle(), $book->getPrice());
            }
        }
    }

    public function getBooksForAuthor($authorName) {
        foreach ($this->getAuthors() as $value) {
            if($value==$authorName){
                return $value->getBooks();
            }
        }
        return "Nem létező író";
    }
    public function search(string $bookName): Book {
        foreach ($this->getAuthors()->getBooks() as $value){
            if($value==$bookName){
                return $value;
            }
        }
        return "Nincs létező" ;
    }
    public function print()
    {
        foreach ($this->getAuthors() as $value) {
            print "$value <br>-<br>";
            foreach ($value->getBooks() as $book) {
                print $book->getTitle() . " - " . $book->getPrice() . "<br>";
            }
        }
    }
}