<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Shelf
{
    private $id;

    private $shelfIdentifier;

    private $floor;

    private $books;

    /**
     * @return mixed
     */
    public function getBooks()
    {
        return $this->books;
    }

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
    public function getShelfIdentifier()
    {
        return $this->shelfIdentifier;
    }

    /**
     * @param mixed $shelfIdentifier
     */
    public function setShelfIdentifier($shelfIdentifier): void
    {
        $this->shelfIdentifier = $shelfIdentifier;
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor): void
    {
        $this->floor = $floor;
    }
}
