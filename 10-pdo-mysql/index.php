<?php require 'partials/header.php';


//chercher tous les films en BDD
$movies= db()-> query('SELECT * FROM movie')-> fetchAll();


?>

<div class="container">
    <h2><?= $_SESSION['success'] ?? ''; ?></h2>
    <?php unset($_SESSION['success']); ?>

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
<?php require 'partials/footer.php'; ?>