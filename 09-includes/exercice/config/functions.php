<?php

/**
 * Renvoie le nom de la page actuelle.
 */
function pageName() {
    $uri = $_SERVER['REQUEST_URI']; // /php/09-includes/contact.php
    $name = strrchr($uri, '/'); // /contact.php
    $name = substr($name, 1, -4); // contact

    if (empty($name)) {
        $name = 'index';
    }

    return $name;
}