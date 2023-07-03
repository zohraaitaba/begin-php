<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice calculateur</title>
</head>
<body>
<h1>calculateur</h1>
    <form action="" method="POST">
        <div class="section">
            <label for="number1">Premier nombre</label>
            <input type="number" name="number1" id="number1" value="<?= $number1; ?>"> <br><br>
        </div>

        <div class="section">
            <label for="number2">Deuxième nombre</label>
            <input type="number" name="number2" id="number2" value="<?= $number2; ?>"><br><br>
        </div>

        <div>
        <label for="operation">Opération </label>
        <select name="operation" id="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>

        </select><br><br>
        </div>


        <div>
        <input type="submit" value="Calculer" name="calculer">
        </div> 
    </form>

    <?php   $number1 = $_POST['number1'] ?? null; 
            $number2 = $_POST['number2'] ?? null; 

            if (essets($_POST['calculer']) {
                $number1= $_POST['number1']
            }
        
            $sum = $number1 + $number2 ;

            echo "La somme de $number1 et $number2 est: $sum";
    ?>
    
    
</body>
</html>