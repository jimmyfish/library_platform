<?php

namespace App\Entity;

class Publisher
{
    private $id;

    private $companyName;

    private $companyAddress;

    private $companyPhoneNumber;

    private $books;

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
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * @param mixed $companyAddress
     */
    public function setCompanyAddress($companyAddress): void
    {
        $this->companyAddress = $companyAddress;
    }

    /**
     * @return mixed
     */
    public function getCompanyPhoneNumber()
    {
        return $this->companyPhoneNumber;
    }

    /**
     * @param mixed $companyPhoneNumber
     */
    public function setCompanyPhoneNumber($companyPhoneNumber): void
    {
        $this->companyPhoneNumber = $companyPhoneNumber;
    }

    /**
     * @return mixed
     */
    public function getBooks()
    {
        return $this->books;
    }
}
