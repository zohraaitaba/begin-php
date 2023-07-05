<?php
require __DIR__.'/../config/functions.php';
$start = microtime(true); // Permet de benchmarker les perfs de la page
$title = isset($title) ? "$title - Shop" : 'Shop'; // Gérer le titre du document
?>
<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= pageName() === 'index' ? 'active' : ''; ?>" aria-current="page" href="index.php">Accueil</a>
                    <a class="nav-link <?= pageName() === 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                    <a class="nav-link <?= pageName() === 'exercice-form' ? 'active' : ''; ?>" href="exercice-form.php">Exercice formulaire</a>
                    <a class="nav-link <?= pageName() === 'a-propos' ? 'active' : ''; ?>" href="a-propos.php">A propos</a>
                </div>
            </div>
        </div>
    </nav>