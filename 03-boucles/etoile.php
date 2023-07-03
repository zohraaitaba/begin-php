<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice étoile</title>
</head>
<body>
    //Afficher 10 étoiles
   <div>
   <?php $i=0; 
    for($i=0 ; $i<10; $i++){
        echo ' * ';
    }?>
   </div>

   //Afficher 10 lignes de 10 étoiles
    <div>
    <?php 
    for($i=0 ; $i<10; $i++){
        for ($j=0; $j < 10; $j++) { 
            echo ' * '; 
            
        }
       echo  '<br>';
    } ?>
    </div>

    
</body>
</html>