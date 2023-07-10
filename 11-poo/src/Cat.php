<?php

namespace App;

class Cat
{
    private string $name;
    private string $type = 'Chat de gouttière';
    private string $fur;

    //constructeur
    public function __construct(string $name, string $type = 'Chat de gouttière')
    {
        $this->name = $name;
        $this->type = $type;
    }



    /**
     * Set the value of fur
     *
     * @return  self
     */
    public function setFur(string $fur): self
    {
        $this->fur = $fur;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

//fonction chat miaule
    public function cry(): string
    {
        return $this->name.' miaule';
    }

 // fonction chat joue avec
    public function playWith(Cat $otherCat): string
    {
        return $this->name. ' joue avec '.$otherCat->name;
    }
}
