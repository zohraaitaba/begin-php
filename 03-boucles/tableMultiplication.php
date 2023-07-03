<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
    <link rel="stylesheet" href="tableMultiplication.css">
</head>
<body>

 <div>
 <span class="titre">Table de 5</span>
<?php for ($i=1; $i <=10 ; $i++) { 
    $result = 5 * $i; ?>
    <div class="div1">
        <?= " 5 * $i = $result "; ?>
    </div>
  
<?php }?>
 </div>
<br>
<?php for ($i=1; $i <=10 ; $i++) { ?>
    <div>
    <span class="titre">Table de <?=$i?></span>
    for ($j=1; $j <=10; $j++) { 
        
    $result = $i * $j; ?>
    <div class="div2">
        <?= " $i * $j = $result "; ?>
    </div>
  
<?php }?>
</div>
<?php }?>
    
</body>
</html>