<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Bart</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $sentences = [
            'I will not skateboard in the halls.',
            'I will not encourage others to fly.',
            'I will not drive the principal\'s car.',
            'I am not a dentist.',
            'I will finish what I start.',
            'I will not bring sheep to class.',
        ];
        $lineNumber = $_GET['line'] ?? 10;
        // array_rand permet d'avoir un index aléatoire dans le tableau
        $sentence = $_GET['sentence'] ?? $sentences[array_rand($sentences)];
    ?>

    <div class="board">
        <div class="bart"></div>
        <?php for ($i = 0; $i < $lineNumber; $i++) { ?>
            <p><?= $sentence; ?></p>
        <?php } ?>
    </div>

    <?php
        $numbers = [1900, 1910, 1920, 2090, 2100];
        $numbers = range(1900, 2100, 10);

        /**
         * Renvoie le mot "selected" si le booléen en paramètre est true.
         */
        function selected(bool $condition): string {
            return $condition ? 'selected': '';
        }
    ?>

    <form action="">
        <input type="text" name="sentence" value="<?= $sentence; ?>">

        <select name="line">
            <?php foreach (range(10, 100) as $repeat) { ?>
                <option <?= selected($repeat == $lineNumber); ?> value="<?= $repeat; ?>"><?= $repeat; ?></option>
            <?php } ?>
        </select>

        <button>Générer</button>
    </form>
</body>
</html>