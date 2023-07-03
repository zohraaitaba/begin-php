<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice tableau 1</title>
</head>
<body>
    <h2>Les capitales</h2>

    <?php
        $capitals = [
            'France' => 'Paris',
            'Espagne' => 'Madrid',
            'Italie' => 'Rome',
        ];

        foreach ($capitals as $country => $city) {
            echo "<p>La capitale de $country est $city.</p>";
        }
    ?>

    <h2>Population avec 20M</h2>

    <?php
        $population = [
            'France' => 67_595_000,
            'Suede' => 9_998_000,
            'Suisse' => 8_417_000,
            'Kosovo' => 1820631,
            'Malte' => 434_403,
            'Mexique' => 122_273_500,
            'Allemagne' => 82_800_000,
        ];

        $sum = 0;
    ?>

    <ul>
        <?php foreach ($population as $country => $pop) {
            if ($pop > 20_000_000) { ?>
                <li><?= $country; ?></li>
            <?php }

            if (!in_array($country, ['Mexique', 'USA', 'Congo', 'Japon'])) {
                $sum += $pop;
            }
        } ?>
    </ul>

    <p>Population Europe: <?= $sum; ?></p>
    <p>Population Europe: <?= array_sum($population) - $population['Mexique']; ?></p>
</body>
</html>