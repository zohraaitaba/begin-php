<?php

/**
 * Script qui permet d'importer un CSV dans une base de données
 */

// Ouvrir le fichier en lecture
$file = fopen('exports/categories.csv', 'r');

$categories = [];
$count = 0;

// On va parcourir le fichier ligne par ligne
while ($line = fgetcsv($file, null, ';')) {
    if ($count++ === 0) {
        continue; // On passe la première ligne du CSV
    }

    $categories[] = [
        'name' => $line[1],
    ];
}

// Connexion à la BDD pour importer les catégories
require 'config/functions.php';

// Clean de la table avant l'import
db()->query('
    SET FOREIGN_KEY_CHECKS = 0;
    TRUNCATE category;
    TRUNCATE movie;
    TRUNCATE actor;
    TRUNCATE joue_dans;
    SET FOREIGN_KEY_CHECKS = 1;
');

foreach ($categories as $category) {
    $query = db()->prepare('INSERT INTO category (name) VALUES (:name)');
    $query->execute($category); // ->execute(['name' => 'Action']);
}

// Refacto du code pour importer le CSV
$movies = convertCsvToArray('exports/movies.csv');

foreach ($movies as $movie) {
    unset($movie['id_movie']); // Cette colonne ne sert pas
    $query = db()->prepare('INSERT INTO
        movie (title, released_at, description, duration, cover, id_category)
        VALUES (:title, :released_at, :description, :duration, :cover, :id_category)');
    $query->execute($movie);
}

$actors = convertCsvToArray('exports/actors.csv');

foreach ($actors as $actor) {
    unset($actor['id_actor']);
    $query = db()->prepare('INSERT INTO actor (name, firstname, birthday) VALUES (:name, :firstname, :birthday)');
    $query->execute($actor);
}

$movieActors = convertCsvToArray('exports/movie_has_actor.csv');

foreach ($movieActors as $movieActor) {
    $query = db()->prepare('INSERT INTO joue_dans (id, id_actor) VALUES (:id_movie, :id_actor)');
    $query->execute($movieActor);
}