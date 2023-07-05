<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice tableau 2</title>
</head>
<body>
    <?php
        $students = [
            0 => [
                'nom' => 'Matthieu',
                'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
            ],
            1 => [
                'nom' => 'Thomas',
                'notes' => [4, 18, 12, 15, 13, 7]
            ],
            2 => [
                'nom' => 'Jean',
                'notes' => [17, 14, 6, 2, 16, 18, 9]
            ],
            3 => [
                'nom' => 'Enzo',
                'notes' => [1, 20, 6, 2, 1, 8, 9]
            ]
        ];
    ?>

    <h2>Afficher la liste de tous les éléves avec leurs notes.</h2>
    <?php foreach ($students as $student) { ?>
    <p><?= $student['nom'] ?> a eu <?= implode(', ', $student['notes']); ?></p>
    <?php } ?>

    <h2>Calculer la moyenne de Jean. On part de $students[2]["notes"]</h2>
    <?php
        $average = array_sum($students[2]['notes']) / count($students[2]['notes']);
    ?>
    <h3>La moyenne de Jean est <?= round($average, 2); ?></h3>

    <h2>Combien d'élèves ont la moyenne ?</h2>
    <?php
        function average(array $numbers): float {
            $result = array_sum($numbers) / count($numbers);
            return round($result, 2);
        }

        $totalAverage = 0;

        foreach ($students as $student) {
            if (average($student['notes']) > 10) {
                $totalAverage++;
                echo $student['nom'].' a la moyenne <br>';
            } else {
                echo $student['nom'].' n\'a pas la moyenne <br>';
            }
        }
    ?>
    <p>Nombre d'élèves avec la moyenne: <?= $totalAverage; ?></p>

    <h2>Quel(s) éléve(s) a(ont) la meilleure note ?</h2>
    <?php
        // @todo: Trouver une solution
        // array_column renvoie toutes les notes de tout le monde
        $bestNote = max(array_merge(...array_column($students, 'notes')));

        /* $bestNote = 0;

        foreach ($students as $student) {
            foreach ($student['notes'] as $note) {
                if ($note > $bestNote) {
                    $bestNote = $note;
                }
            }
        } */

        foreach ($students as $student) {
            if (in_array($bestNote, $student['notes'])) {
                echo "<p>{$student['nom']} a la meilleure note: $bestNote</p>";
            }
        }
    ?>

    <h2>Qui a eu au moins un 20 ?</h2>
    <?php
        $hasTwenty = false;

        foreach ($students as $student) {
            foreach ($student['notes'] as $note) {
                if ($note === 20) {
                    $hasTwenty = true;
                    var_dump($note);
                    break 2; // Arrête les 2 foreach
                }
            }
            var_dump($student);
        }

        if ($hasTwenty) {
            echo "Quelqu'un a eu 20";
        } else {
            echo "Personne n'a eu 20";
        }
    ?>
</body>
</html>