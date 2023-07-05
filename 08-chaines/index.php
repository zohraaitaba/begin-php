<?php 
/* 
Fonctions sur les cchaines

 */
//On peut extraire des chaines
$email = 'fiorella@boxydev.com';
$domain = strstr($email, '@'); // @boxydev.com
$domain = substr($domain, 1);// boxydev.com
$username = strstr($email, '@', true); //fiorella

echo "Le domaine est $domain et l'utilisateur est $username. <br>";

//vérifier qu'une chaine contient un truc
if (str_contains($email, 'boxydev')){
    echo"L'email $email contient boxydev <br>";
}


//on peut remplacer des termes dans une chaine
echo str_replace('fiorella', '********', $email). '<br>';

//En php, une chaine est un tableau si on la transfome avec str_split
foreach(str_split($username) as $letter){
    echo "$letter - ";
}
echo '<br>';

echo $username[2]. '<br>'; //o

//substr (fiorella@boxydev.com)
echo substr($email, 0, 8). '<br>';//fiorella
echo substr($email,9,-4). '<br>'; //boxydev
echo substr($email,-3). '<br>'; //com
echo substr($email,-5,-3). '<br>'; //com


//transformer les chaines de caractères en tableau
$countries = 'Italie, France, Portugal';
$countries = explode(',', $countries);
var_dump($countries);
echo '<br>';
echo '<br>';

echo implode(';', $countries);
echo '<br>';

//Quleques fonctions pour les formulaires
$password = 'azerty123    ';
$password= trim($password); // pour supprimer les espaces affiche 'azerty123'
var_dump($password);
echo '<br>';

echo "Le mot de passe $password fait ".strlen($password).'caractères <br>' ;

//Exemples de failles XSS
$message= $_GET['message']?? null;

//on désactive l'interprétation de html
$message= htmlspecialchars($message?? '');
//strip_tags($message); //supprime les balises


echo $message;
