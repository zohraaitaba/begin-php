<?php

namespace App;

class Car
{
    private string $brand;
    private string $model;
    private string $color;
    private int $wheel = 4;
    private int $fuel = 50;

    public function __construct(
        string $brand,
        string $model,
        string $color = 'Blanc',
        int $wheel = 4
    ) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->wheel = $wheel;
    }

    public function name(): string
    {
        return $this->brand.' '.$this->model;
    }

    public function getColor(): string
    {
        return strtolower($this->color);
    }

    public function repaint(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function hasFuel(): bool
    {
        return $this->fuel > 0;
    }

    public function drive(): string
    {
        $this->fuel -= 2;
        
        if (!$this->hasFuel()) {
            $this->fuel = 0;
            return $this->name().' fait pied pied';
        }

        return $this->name().' fait vroom vroom';
    }

    public function klaxon(): string
    {
        return $this->name().' fait pouet pouet';
    }

    public function fill(int $fuel = null): self
    {
        $this->fuel += $fuel ?? 50;

        if ($this->fuel > 50) {
            $this->fuel = 50;
        }

        return $this;
    }

    public function fillUp(): self
    {
        return $this->fill(50);
    }
}