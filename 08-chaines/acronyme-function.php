<?php 
$words ='World of Warcraft';

function letterToUpper(string $words ):string {

    $word= explode(' ', $words);
   
$acronyme='';
foreach($word as $fistLetter){
    $fistLetter= strtoupper(substr($fistLetter, 0,1));

      $acronyme.=$fistLetter;
}
return $acronyme;
}