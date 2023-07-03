<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>
    <h2>Tableau numérique</h2>
    <?php
        $drinks = ['Monster', 'Coca-cola', 'Orangina'];

        // Afficher Orangina
        echo $drinks[2];

        // Comment on peut ajouter une boisson dans le tableau
        $drinks[] = 'Ice Tea';
        array_push($drinks, 'Eau'); // Ancienne syntaxe

        // Comment remplacer une valeur ?
        $drinks[1] = 'Vittel';

        // Comment retirer une valeur
        unset($drinks[2]);

        var_dump($drinks);
    ?>

    <ul>
        <?php foreach ($drinks as $index => $drink) {
            echo "<li>$index : $drink</li>";
        } ?>
    </ul>

    <h2>Les tableaux associatifs</h2>
    <?php
        $fruits = [
            'rouge' => 'Fraise',
            'jaune' => 'Banane',
            'Cerise',
            'D' => 'Orange',
            'Pomme',
        ];

        $fruits['orange'] = 'Abricot';

        // Si on veut ajouter une valeur n'importe où dans le tableau
        // Pas forcément utile...
        array_splice($fruits, 2, 0, ['violet' => 'Framboise']);
        $fruits = $fruits + ['violet' => 'Framboise'];
        // $fruits['violet'] = 'Framboise';

        var_dump($fruits);
    ?>

    <ul>
        <?php foreach ($fruits as $index => $fruit) {
            echo "<li>$index : $fruit</li>";
        } ?>
    </ul>

    <h2>Les tableaux multidimensionnels</h2>
    <?php
        $users = [ // Dimension 1
            [ // Dimension 2
                'name' => 'Mota',
                'firstname' => 'Fiorella',
                'phone' => '0600000000',
                'addresses' => ['Hulluch', 'Lens', 'Lille'], // Dimension 3
            ],
            [
                'name' => 'Doe',
                'firstname' => 'John',
                'phone' => '0700000000',
                'addresses' => ['Château Thierry'],
            ],
        ];
    ?>
    <p><?= $users[0]['firstname'].' '.$users[0]['name']; ?> vit à <?= $users[0]['addresses'][0]; ?></p>

    <h3>Nous avons <?= count($users); ?> utilisateurs.</h3>
    <?php foreach ($users as $user) { ?>
        <div>
            <h2><?= $user['firstname'].' '.$user['name']; ?></h2>

            <ul>
                <?php foreach ($user['addresses'] as $address) { ?>
                    <li><?= $address; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</body>
</html>