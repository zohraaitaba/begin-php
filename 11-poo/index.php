<?php

use App\Car;
use App\Cat;

require 'vendor/autoload.php';

$bianca = new Cat('Bianca');
$mina = new Cat('Mina');
$bianca->setFur('blanc')->setFur('noir');
$mina->setFur('noir');

dump($bianca, $mina);


$citroen = new Car(4, 'rouge', 'marque1', 'citroen-2022', 50);
$wolkswagen = new Car(4, 'blanc', 'marque2', 'wollkswagen-2020', 30);
$citroen->setCouleur('rouge')->setCouleur('noir');
$wolkswagen->setCouleur('blanc')->setCouleur('gris');

dump($citroen, $wolkswagen);



?>

<h1>Mon premier chat s'appelle <?= $bianca->getName(); ?></h1>
<p><?= $bianca->cry(); ?></p>
<p>
    l'autre chat est <?= $mina->getName(); ?>
    Et <?= $mina->cry(); ?>
</p>

<p><?= $bianca->playWith($mina); ?></p>

<h2>Ma première voiture est <?= $citroen->getModele(); ?></h2>
<p><?= $citroen->rouler(); ?></p>
<p><?= $citroen->klaxonner(); ?></p>
<br>
<p>
    la deuxième voiture est <?= $wolkswagen->getModele(); ?>
    Et <?= $wolkswagen->rouler() ?>
<p><?= $wolkswagen->klaxonner(); ?></p>
</p>