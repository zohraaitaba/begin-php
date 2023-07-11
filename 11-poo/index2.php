<?php

use App\Bibliotheque\Book;

require 'vendor/autoload.php';

$b = new Book('Harry Potter à l\'école des sorciers', 250);
echo $b->page(); // 1
$b->nextPage(); // tourne la page (ne fait rien si on est sur la dernière page)
echo $b->page(); // 2
$b->close(); // ferme le livre (reviens à la page 1)
echo $b->getName(); // Récupère le nom du livre
echo $b->countPages(); // Récupère le nombre de pages


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Bibliothèque</title>
</head>
<body>
    <h1>Book</h1>
    
</body>
</html>