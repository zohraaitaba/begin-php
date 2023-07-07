<?php

/**
 * Permet de se connecter à la BDD
 */
function db(): PDO {
    $db = new PDO('mysql:host=localhost;dbname=movies', 'root', '');

    return $db;
}

/**
 * Permet de transformer un CSV en tableau PHP
 */
function convertCsvToArray(string $file): array {
    $file = fopen($file, 'r');
    $data = [];

    $headers = fgetcsv($file, null, ';'); // ['title', 'released_at', 'description'];
    // On va parcourir le fichier ligne par ligne
    while ($line = fgetcsv($file, null, ';')) {
        $item = [];

        foreach ($line as $key => $value) {
            $item[$headers[$key]] = $value;
        }

        $data[] = $item;
    }

    return $data;
}

/**
 * Renvoie le nom de la page actuelle.
 */
function pageName() {
    $uri = $_SERVER['REQUEST_URI']; // /php/09-includes/contact.php
    $name = strrchr($uri, '/'); // /contact.php
    $name = substr($name, 1, -4); // contact

    return $name;
}



/* 
permet de formater une date US
 */
function formatDate(string $date, string $format='d/m/Y'){
    return date($format, strtotime($date));
}