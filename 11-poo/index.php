<?php

use App\Cat;

require 'vendor/autoload.php';

$bianca = new Cat('Bianca');
$bianca->setFur('blanc')->setFur('noir');
$mina = new Cat('Mina');
$mina->setFur('noir');

dump($bianca, $mina);

?>

<h1>Mon premier chat s'appelle <?= $bianca->getName(); ?></h1>
<p><?= $bianca->cry(); ?></p>
<p>
    l'autre chat  est <?= $mina->getName(); ?>
    Et <?= $mina->cry(); ?>
</p>

<p><?= $bianca->playWith($mina); ?></p>