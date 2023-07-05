<?php
$title = 'Contact';
require 'partials/header.php';

// Récupération des données du formulaire
$email = $_POST['email'] ?? null;
$skills = $_POST['skills'] ?? [];
$errors = []; // Stocker les erreurs du formulaire

$validSkills = [
    'html' => 'HTML / CSS',
    'js' => 'JavaScript',
    'java' => 'Java',
    'php' => 'PHP',
];

// Vérifier si le formulaire est envoyé
if (!empty($_POST)) {
    if (empty($email)) {
        $errors[] = "L'email est obligatoire.";
    } else if (!validEmail($email)) {
        $errors[] = "L'email est invalide.";
    }

    if (count($skills) < 1) {
        $errors[] = "Vous devez choisir au moins une compétence.";
    } else if (!validArray($skills, array_keys($validSkills))) {
        $errors[] = "Une compétence choisie n'est pas correcte.";
    }

    if (empty($errors)) {
        $finalSkills = [];

        // Permet d'afficher les valeurs "propres" et pas les clés
        foreach (array_unique($skills) as $skill) {
            $finalSkills[] = $validSkills[$skill]; // $validSkills['html']
        }

        $success = "Bonjour $email, voici vos skills : ".implode(', ', $finalSkills);
    }
}

?>

    <div class="container py-5">
        <h1>Contact</h1>

        <?php if (isset($success)) { ?>
        <div class="alert alert-success">
            <?= $success; ?>
        </div>
        <?php } ?>

        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger">
            <?php foreach ($errors as $error) { ?>
                <p class="m-0"><?= $error; ?></p>
            <?php } ?>
            </div>
        <?php } ?>

        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $email; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Compétences</label>
                <div class="form-check">
                    <input type="checkbox" id="html" name="skills[]" value="html" <?= checked('html', $skills); ?> class="form-check-input">
                    <label for="html" class="form-check-label">HTML / CSS</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="js" name="skills[]" value="js" <?= checked('js', $skills); ?> class="form-check-input">
                    <label for="js" class="form-check-label">JavaScript</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="java" name="skills[]" value="java" <?= checked('java', $skills); ?> class="form-check-input">
                    <label for="java" class="form-check-label">Java</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="php" name="skills[]" value="php" <?= checked('php', $skills); ?> class="form-check-input">
                    <label for="php" class="form-check-label">PHP</label>
                </div>
            </div>

            <button class="btn btn-dark">Valider</button>
        </form>
    </div>

<?php require 'partials/footer.php'; ?>