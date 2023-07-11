<?php

namespace App;

class Calculator
{
    private float $result = 0;

    public function __construct(float $start = 0)
    {
        $this->result += $start;
    }

    public function add(float $value): self
    {
        $this->result += $value;

        return $this;
    }

    public function substract(float $value): self
    {
        $this->result -= $value;

        return $this;
    }

    public function multiply(float $value): self
    {
        $this->result *= $value;

        return $this;
    }

    public function divide(float $value): self
    {
        $this->result /= $value;

        return $this;
    }

    public function result(): float
    {
        return round($this->result, 2);
    }
}