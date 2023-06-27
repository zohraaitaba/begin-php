<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Opérations</title>
</head>
<body>
    <?php
    $a= 15;
    $b= 5;
    $c=8;
    $sum=$a+$b+$c;
    $result=$a *( $b - $c);
    $division = round((($c +$b) / $a),2);
    ?>
    <p><?= "$a + $b + $c = $sum"; ?></p>
    <br>
    <p><?= "$a *( $b - $c) = $result" ; ?></p>
    <br>
    <p><?= "($c +$b) / $a = $division" ; ?></p>
    

    
    
   
    
</body>
</html>