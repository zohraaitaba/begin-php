<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php for ($i=1; $i<=10; $i++){?>

        <li>
            <?= $i ;?>
        </li>
     <?php } ?>
    </ul>

    <div style="display: flex; gap:10px;">
    <?php $firstnames = ['Fiorella', 'Marina', 'Mathieu']; ?>
    <?php foreach ($firstnames as $firstname){ ?>
        <h3><?= $firstname; ?></h3>

    <?php } ?>

    </div>


</body>
</html>