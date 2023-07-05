<footer class="bg-body-tertiary py-5 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    Tous droits réservés.
                    Page générée en <?= number_format(microtime(true) - $start, 6); ?> ms
                </div>
                <div class="col-md-6">
                    &copy; Shop <?= date('Y'); ?>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>