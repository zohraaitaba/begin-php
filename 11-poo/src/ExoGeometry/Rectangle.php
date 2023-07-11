<?php

namespace App\ExoGeometry;

class Rectangle
{
    private int $width;
    private int $height;

    public function __construct(
        int $width,
        int $height
    ) {
        $this->width = $width;
        $this->height = $height;
    }

    public function perimeter(): int
    {
        return ($this->width + $this->height) * 2;
    }

    public function area(): int
    {
        return $this->width * $this->height;
    }

    public function isValid(): bool
    {
        return $this->width > 0 && $this->height > 0;
    }
}