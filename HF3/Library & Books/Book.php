<?php


class Book
{
    public string $title;
    public float $price;
    public Author $author;

    public function __construct(string $title, float $price, string $author) {
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
    }
    function getTitle(): string {
        return $this->title;
    }

    function getPrice(): float {
        return $this->price;
    }

    function getAuthor(): String {
        return $this->author;
    }

    function setTitle(string $title): void {
        $this->title = $title;
    }

    function setPrice(float $price): void {
        $this->price = $price;
    }

    function setAuthor(String $author): void {
        $this->author = $author;
    }

}