<?php

function hello(string $name, string $lang='fr'):string{
    $subjects=[
        'en' => 'Hello',
        'fr' => 'Bonjour',
        'it' => 'Buongiorno',
    ];

    $lang=strtolower($lang);
    $subject= $subjects[$lang]?? $subjects['fr'];
   
    return"$subject $name";
}


/* Ability to sum many numbers */
/*  ... c'est le rest operator */
function addition(int $n1, int $n2, ...$ns):int{
    return $n1 + $n2 + array_sum($ns);
}



