<?php
require 'config/functions.php';
// Pour le select
$categories = db()->query('SELECT * FROM category')->fetchAll();
// Récupérer les valeurs du formulaire
$titleMovie = sanitize($_POST['title'] ?? null);
$released_at = $_POST['released_at'] ?? null;
$description = sanitize($_POST['description'] ?? null);
$duration = $_POST['duration'] ?? null;
// $cover = $_FILES['cover'] ?? null;
$cover = $_FILES['cover'] ?? null;
$category = $_POST['category'] ?? null;

$errors = [];
if (submitted()) {
    // Vérification des erreurs
    if (strlen($titleMovie) === 0) {
        $errors['title'] = 'Le titre est obligatoire.';
    }
    // Vérification de la date
    $date = date_create($released_at); // new DateTime($released_at);
    if (!$date || $date && $date->format('Y-m-d') !== $released_at) {
        $errors['released_at'] = 'La date est invalide.';
    }
    // strlen('é') => 2
    // mb_strlen('é') => 1
    if (mb_strlen($description) <= 5) {
        $errors['description'] = 'La description doit faire 5 caractères minimum.';
    }
    if (!($duration > 1 && $duration < 999)) {
        $errors['duration'] = 'La durée doit être entre 1 et 999 minutes.';
    }

    // @todo upload vérif
    if ($cover['error'] !== 0) {
        $errors['cover'] = "L'image est obligatoire";
    } else {
        // Type du fichier
        $mime = mime_content_type($cover['tmp_name']); // image/jpeg image/png image/gif
        $validMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (!in_array($mime, $validMimeTypes)) {
            $errors['cover'] = 'Vous devez uploader une image.';
        }

        // 35674 = 35ko = 35674 / 1024
        // 3 * 1024 * 1024 => on limite à 3Mo
        if ($cover['size'] > 3 * 1024 ** 2) {
            $errors['cover'] = "L'image doit faire 3Mo maximum.";
        }
    }

    $exists = db()->query('SELECT COUNT(id) FROM category WHERE id = '.intval($category))->fetchColumn();
    if (!$exists) {
        $errors['category'] = 'La catégorie est invalide.';
    }

    if (empty($errors)) {
        // @todo upload
        // $titleMovie = 'Le Parrain'; // le-parrain-1234
        $extension = strrchr($cover['name'], '.'); // cat.jpg => .jpg
        $filename = strtolower(str_replace(' ', '-', $titleMovie)).'-'.uniqid().$extension; // le-parrain-1234.jpg
        move_uploaded_file($cover['tmp_name'], __DIR__.'/uploads/'.$filename);

        $cover = 'le-parrain.jpg'; // Juste pour tester...
        $cover = $filename; // Juste pour tester...

        // On fait la requête SQL pour insérer le film
        $query = db()->prepare('INSERT INTO movie (title, released_at, description, duration, cover, id_category)
            VALUES (:title, :released_at, :description, :duration, :cover, :category)');
        $query->execute([
            'title' => $titleMovie,
            'released_at' => $released_at,
            'description' => $description,
            'duration' => $duration,
            'cover' => $cover,
            'category' => $category,
        ]);
        $_SESSION['success'] = 'Votre film a été ajouté';
        header('Location: index.php'); // Redirection vers une page
    }
}
require 'partials/header.php'; ?>
<div class="container my-5">
    <nav class="my-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajout</li>
        </ol>
    </nav>
    <div class="row">
        <div class="offset-lg-3 col-lg-6">
            <h1>Ajouter un film</h1>
            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                <?php foreach ($errors as $error) { ?>
                    <p class="m-0"><?= $error; ?></p>
                <?php } ?>
                </div>
            <?php } ?>

            <form method="post">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= $titleMovie; ?>">
                </div>
                <div class="mb-3">
                    <label for="released_at">Date de sortie</label>
                    <input type="date" name="released_at" id="released_at" class="form-control" value="<?= $released_at; ?>">
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"><?= $description; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="duration">Durée</label>
                    <input type="number" name="duration" id="duration" class="form-control" value="<?= $duration; ?>">
                </div>

                <div class="mb-3">
                    <label for="cover">Cover</label>
                    <input type="text" name="cover" id="cover" class="form-control">
                    <input type="file" name="cover" id="cover" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="category" >Catégorie</label>
                    <select class="form-select" name="category" id="category">
                        <option selected disabled>Choisir une catégorie...</option>
                        <?php foreach ($categories as $cat) { ?>
                            <option <?= $cat['id'] === $category ? 'selected' : '' ?> value="<?= $cat['id']; ?>">
                                <?= $cat['name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <button class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
<?php require 'partials/footer.php'; ?>