<?php
$title = 'Exercice Formulaire';
require 'partials/header.php';

// La liste des sujets. La valeur représente ce qu'on affiche et la clé est un identifiant du sujet
// qui pourrait être utile si on veut stocker la demande de contact dans la base de données.
$subjects = [
    'stage' => 'Proposition de stage',
    'job' => 'Proposition d\'emploi',
    'project' => 'Demande de projet',
];

$civilities = [
    'mrs' => 'Madame',
    'mr' => 'Monsieur',
    'other' => 'Autre',
];

// La valeur des champs
$email = request('email');
$subject = request('subject');
$message = request('message');
$civility = request('civility');

// Tableau d'erreurs
$errors = [];

if (submitted()) {
    // On vérifie les champs
    if (!validEmail($email)) {
        $errors['email'] = 'L\'email est invalide.';
    }

    if (!validValue($subject, array_keys($subjects))) {
        $errors['subject'] = 'Le sujet est invalide.';
    }

    if (strlen($message) < 15) {
        $errors['message'] = 'Le message doit faire 15 caractères.';
    }

    if (!validValue($civility, array_keys($civilities))) {
        $errors['civility'] = 'La civilité est invalide.';
    }

    if (empty($errors)) {
        $success = true;
    }
}

?>

<div class="container py-5">
    <h1>Exercice</h1>

    <?php if (isset($success)) { ?>
        <div class="alert alert-success">
            <p>Bonjour <?= $email; ?></p>
            <p>Sujet: <?= $subjects[$subject]; ?></p>
            <p>Message: <?= $message; ?></p>
            <p class="m-0">Civilité: <?= $civilities[$civility]; ?></p>
        </div>
    <?php } ?>

    <form method="post">
        <div class="mb-3 form-floating">
            <input type="text" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= $email; ?>" placeholder="Email">
            <label for="email" class="form-label">Email</label>
            <?php if (isset($errors['email'])) { ?>
            <div class="invalid-feedback">
                <?= $errors['email']; ?>
            </div>
            <?php } ?>
        </div>

        <div class="mb-3 form-floating">
            <select class="form-select <?= isset($errors['subject']) ? 'is-invalid' : ''; ?>" id="subject" name="subject">
                <option disabled selected>Choisir un sujet</option>
                <?php foreach ($subjects as $key => $sub) { ?>
                <option <?= selected($key === $subject); ?> value="<?= $key; ?>"><?= $sub; ?></option>
                <?php } ?>
            </select>
            <label for="subject" class="form-label">Sujet</label>
            <?php if (isset($errors['subject'])) { ?>
            <div class="invalid-feedback">
                <?= $errors['subject']; ?>
            </div>
            <?php } ?>
        </div>

        <div class="mb-3 form-floating">
            <textarea class="form-control <?= isset($errors['message']) ? 'is-invalid' : ''; ?>" placeholder="Message" id="message" name="message" style="height: 100px"><?= $message; ?></textarea>
            <label for="message">Message</label>
            <?php if (isset($errors['message'])) { ?>
            <div class="invalid-feedback">
                <?= $errors['message']; ?>
            </div>
            <?php } ?>
        </div>

        <div class="mb-3">
            <?php foreach ($civilities as $name => $value) { ?>
                <div class="form-check <?= isset($errors['civility']) ? 'is-invalid' : ''; ?>">
                    <input class="form-check-input" type="radio" name="civility" <?= checked($name, [$civility]); ?> value="<?= $name; ?>" id="<?= $name; ?>">
                    <label class="form-check-label" for="<?= $name; ?>">
                        <?= $value; ?>
                    </label>
                </div>
            <?php } ?>
            <?php if (isset($errors['civility'])) { ?>
            <div class="invalid-feedback">
                <?= $errors['civility']; ?>
            </div>
            <?php } ?>
        </div>

        <button class="btn btn-dark">Envoyer</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>