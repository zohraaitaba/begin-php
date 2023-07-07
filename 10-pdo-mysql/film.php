<?php
require 'config/functions.php';

$id = $_GET['id'] ?? null; // index.php?id=1
// Requête pour aller chercher le film dans la BDD
// On doit faire une requête préparée...
// $movie = db()->query('SELECT * FROM movie WHERE id = '.$id)->fetch();
$query = db()->prepare('SELECT * FROM movie WHERE id = ?');
$query->execute([$id]);
$movie = $query->fetch();

// Si le film n'existe pas
if (!$movie) {
    show404();
}

// Les acteurs SANS JOIN
$query = db()->prepare('SELECT * FROM joue_dans WHERE id = :id');
$query->execute(['id' => $id]);
$actors = $query->fetchAll();

$ids = implode(', ', array_column($actors, 'id_actor'));
if ($ids) {
    $actors = db()->query('SELECT * FROM actor WHERE id IN ('.$ids.')')->fetchAll();
}

// Les acteurs AVEC JOIN
$query = db()->prepare('SELECT name, firstname FROM actor
INNER JOIN joue_dans ON actor.id = joue_dans.id_actor
WHERE joue_dans.id = :id'); // joue_dans.id représente l'id du film
$query->execute(['id' => $id]);
$actors = $query->fetchAll();

$title = $movie['title'];
require 'partials/header.php'; ?>

<div class="container">
    <nav class="my-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $movie['title']; ?></li>
        </ol>
    </nav>

    <div class="row my-5">
        <div class="col-lg-6">
            <img class="rounded-5 img-fluid mb-5" src="uploads/<?= $movie['cover']; ?>" alt="<?= $movie['title']; ?>">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h1><?= $movie['title']; ?></h1>
                    <p>Durée: <?= formatDuration($movie['duration']); ?> (<?= $movie['duration']; ?> minutes)</p>
                    <p>Sortie en <strong><?= formatDate($movie['released_at'], 'Y'); ?></strong></p>

                    <blockquote class="blockquote">
                        <p><?= $movie['description']; ?></p>
                    </blockquote>

                    <p>Il y a <?= count($actors); ?> acteur(s) dans ce film.</p>
                    <ul class="list-group">
                        <?php foreach ($actors as $actor) { ?>
                            <li class="list-group-item"><?= $actor['firstname']; ?> <?= $actor['name']; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>