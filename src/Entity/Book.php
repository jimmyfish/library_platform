<?php

namespace App\Entity;

class Book
{
    private $id;

    private $bookName;

    private $publication;

    private $pageNumber;

    private $publisher;

    private $author;

    private $shelf;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * @param mixed $bookName
     */
    public function setBookName($bookName): void
    {
        $this->bookName = $bookName;
    }

    /**
     * @return mixed
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param mixed $publication
     */
    public function setPublication($publication): void
    {
        $this->publication = $publication;
    }

    /**
     * @return mixed
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param mixed $pageNumber
     */
    public function setPageNumber($pageNumber): void
    {
        $this->pageNumber = $pageNumber;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return Shelf
     */
    public function getShelf() : Shelf
    {
        return $this->shelf;
    }

    /**
     * @param Shelf $shelf
     */
    public function setShelf(Shelf $shelf): void
    {
        $this->shelf = $shelf;
    }
}
