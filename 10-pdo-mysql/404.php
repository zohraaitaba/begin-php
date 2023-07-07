<?php require 'partials/header.php';
$limit = rand(1, 4);

$movies = db()->query('SELECT * FROM movie ORDER BY RAND() LIMIT '.$limit)->fetchAll();
?>

<div class="container">
    <nav class="my-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page">404</li>
        </ol>
    </nav>

    <div class="my-5 text-center">
        <h1>404 - Oups</h1>
        <p>Pour nous faire pardonner, on vous offre <strong><?= $limit; ?></strong> film(s) au hasard</p>
    </div>

    <div class="container">
        <div class="row row-gap-4 my-5">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="uploads/<?= $movie['cover']; ?>" class="card-img-top" alt="<?= $movie['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie['title']; ?></h5>
                            <p><?= formatDate($movie['released_at']); ?></p>
                            <a href="film.php?id=<?= $movie['id']; ?>" class="btn btn-primary">Voir le film</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>