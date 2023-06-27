<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Simple</title>
</head>
<body>
    <?php
    $prenom= 'Zohra';
    ?>
    <h1><?= "Bonjour $prenom" ; ?></h1>
    <h2>Bonjour <?= $prenom; ?></h2>
    <h3><?= "Bonjour ".$prenom ; ?></h3>
</body>
</html>