<?php

namespace App\Bibliotheque;

class Book
{
    private string $name;
    private int $nbpage;
    private int $page = 1;
    private bool $isOpen;


    //constructeur
    public function __construct(
        string $name,
        int $nbpage,
        int $page = 1
    ) {
        $this->name = $name;
        $this->nbpage = $nbpage;
        $this->page = $page;
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of nbpage
     */
    public function getNbpage()
    {
        return $this->nbpage;
    }

    /**
     * Set the value of nbpage
     *
     * @return  self
     */
    public function setNbpage($nbpage)
    {
        $this->nbpage = $nbpage;

        return $this;
    }
    /**
     * Get the value of page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set the value of page
     *
     * @return  self
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    //fonction accés aux pages
    public function page()
    {
        $this->page += $page;
        return $this;
    }

    public function nextPage()
    {
        if ($this->page < $this->nbpage) {
            return $this->page++;
        }
    }

    public function close()
    {
        $this->page = $page;
        return $this;
    }
    public function close()
    {
        $this->Page = 1;
        $this->isOpen = false;
    }

    public function getName()
    {
        return $this->name;
    }

    public function countPages()
    {
        return $this->nbpage;
    }
}
