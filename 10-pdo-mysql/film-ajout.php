<?php require 'partials/header.php'; ?>


<div class="container">
    <nav class="my-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajout</li>
        </ol>
    </nav>


    <form method="post">
        <div class="mb-3 form-floating">
            <h2>Ajouter un film</h2>
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="released_at" class="form-label">Date de sortie</label>
                <input type="date" class="form-control" id="released_at">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Durée</label>
                <input type="time" class="form-control" id="duration">
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">Cover</label>
                <input type="text" class="form-control" id="cover">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">catégorie</label>
                <select class="form-select" aria-label="category">
                    <option selected>Choisir une catégorie</option>
                    <option value="1">Films de gangsters</option>
                    <option value="2">Action</option>
                    <option value="3">Horreur</option>
                    <option value="4">Sciences-fiction</option>
                    <option value="5">Thriller</option>
                </select>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
    </form>
</div>


<?php require 'partials/footer.php'; ?>