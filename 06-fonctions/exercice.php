<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices</title>
</head>
<body>
    <?php
        require 'exo-functions.php';
    ?>

    <p>Le carré de 5 est <?= square(5); ?></p>
    <p>Le carré de 15 est <?= square(15); ?></p>

    <form action="">
        <input type="text" name="number">
        <button>Carré</button>
    </form>
    <?php
        $number = $_GET['number'] ?? null;
        if ($number) {
            echo "<p>Le carré de $number est ".square($number)."</p>";
        }
    ?>

    <p>L'aire d'un rectangle 5 / 10 est <?= areaRectangle(5, 10); ?></p>
    <p>L'aire d'un cercle de rayon 5 est <?= areaCircle(5); ?></p>
    <p>10 ht vaut <?= price(10); ?> ttc</p>
    <p>12 ttc vaut <?= price(12, 20, false); ?> ht</p>
    <p>1785.46 ht vaut <?= price(1785.46); ?> ttc</p>
</body>
</html>