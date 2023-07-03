<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($i=10; $i >=1; $i--) {   ?>
            <li>
                <?= $i ;?>
            </li>
            
       <?php } ?>
       
    </ul>
    
</body>
</html>