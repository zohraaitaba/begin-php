<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tp bart</title>
</head>

<body>
<?php
        require 'functions.php';
    ?>

    <div class="container">
        <img src="bart.png" alt="bart.png">

        <?php
        for ($i = 0; $i < $numberOfLines; $i++) {
            echo "<p>$repeatPhrase</p>";
        }
        ?>
    </div>
</body>

</html>