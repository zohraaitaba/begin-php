<?php

namespace App;

class Cat
{
    private string $name;
    private string $type = 'Chat de gouttière';
    private string $fur;

    public function __construct(string $name, string $type = 'Chat de gouttière')
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setFur(string $fur): self
    {
        $this->fur = $fur;

        return $this;
    }

    public function cry(): string
    {
        return $this->name.' miaule';
    }

    public function playWith(Cat $otherCat): string
    {
        return $this->name.' joue avec '.$otherCat->name;
    }
}