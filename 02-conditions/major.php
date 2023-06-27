<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Majeur</title>
</head>
<body>
    <?php
        $age=17;
        if ($age>=18){
            echo "Vous pouvez entrer ";
        }else{
            echo "Interdit ";
        }
    ?>

  <?php
  if ($age> 16 && $age<18){
    echo 'vous êtes presque majeur';
  }elseif($age>14 && $age <16){
    echo 'Vous êtes jeune';
  }elseif ($age<=14) {
    echo 'vous êtes trop jeune';
  }
  
  ?>
</body>
</html>