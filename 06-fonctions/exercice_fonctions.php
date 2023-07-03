<?php

/**
 * Permet de calculer le carré d'un nombre.
 */
function square(int $number): int {
    return $number * $number;
}

/**
 * Permet de calculer l'aire d'un rectangle.
 */
function areaRectangle(int $width, int $height): int {
    return $width * $height;
}

/**
 * Permet de calculer l'aire d'un cercle.
 */
function areaCircle(int $radius): float|int {
    return round($radius * $radius * pi(), 2);
}

/**
 * Permet de calculer un prix avec taxes.
 * Et de formater un prix 12 => 12,00 €
 *                        1295.12 => 1 295,12 €
 */
function price(int|float $price, int $rate = 20, bool $withTaxes = true): int|float|string {
    $result = $price * (1 + $rate / 100);

    if (!$withTaxes) {
        $result = $price / (1 + $rate / 100);
    }

    return number_format($result, 2, ',', ' ');
}