<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Superglobales</h2>
    <?php
        // $_GET est un tableau qui contient les paramètres de l'URL
        // index.php?name=fiorella&age=3
        var_dump($_GET);

        // L'opérateur Null coalesce permet de vérifier
        // qu'une valeur existe
        $name = $_GET['name'] ?? 'John';
        $age = $_GET['age'] ?? null;
        $age = (int) $age; // '40' devient 40 et toto devient 0 (caster)
        var_dump($age);
    ?>

    <a href="index.php">Sans rien</a>
    <a href="index.php?name=fiorella&age=3">Fiorella</a>
    <a href="index.php?name=toto">Toto</a>

    <h1>Bonjour <?= $name; ?></h1>

    <?php if ($age) { ?>
        <p>Tu as <?= $age; ?> ans.</p>
    <?php } ?>

    <h2>Formulaire en GET</h2>
    <form action="" method="get">
        <div class="section">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="<?= $name; ?>">
        </div>

        <div class="section">
            <label for="age">Âge</label>
            <select name="age" id="age">
                <?php for ($i = 18; $i <= 120; $i++) { ?>
                <option <?= $i == $age ? 'selected' : ''; ?> value="<?= $i; ?>">
                    <?= $i; ?> ans
                </option>
                <?php } ?>
            </select>
        </div>

        <button>Envoyer</button>
    </form>

    <?php
        // Avec $_POST, les données sont "cachées" dans la requête
        var_dump($_POST);
        $password = $_POST['password'] ?? null;
        if ($password) {
            echo "<p>Votre mot de passe: $password</p>";
        }
    ?>
    <h2>Formulaire en POST</h2>
    <form action="" method="post">
        <div class="section">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>

        <button>Envoyer</button>
    </form>
</body>
</html>