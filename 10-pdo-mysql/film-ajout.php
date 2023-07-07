<?php require 'partials/header.php'; ?>


<div class="container">
    <nav class="my-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajout</li>
        </ol>
    </nav>


    <div>
    <div class="mb-3 form-floating">
            <textarea class="form-control <?= isset($errors['message']) ? 'is-invalid' : ''; ?>" placeholder="Message" id="message" name="message" style="height: 100px"><?= $message; ?></textarea>
            <label for="message">Description</label>
            <?php if (isset($errors['message'])) { ?>
            <div class="invalid-feedback">
                <?= $errors['message']; ?>
            </div>
            <?php } ?>
        </div>
    </div>

</div>


<?php require 'partials/header.php'; ?>