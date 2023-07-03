<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boucles</title>
</head>
<body>
<ul>
    <?php for ($i=1; $i<=100; $i++){?>
        
        <li>
            <?php 
            if(($i%2)===0){
                echo $i;
            } 
            ?></li>
       
     <?php } ?>
    </ul>

        
</body>
</html>