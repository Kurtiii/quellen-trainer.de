<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quellen Trainer</title>
    <link rel="icon" type="image/png" href="<?= $_CONFIG['base_url']; ?>assets/img/favicon.png" />

    <link rel="stylesheet" href="<?= $_CONFIG['base_url']; ?>assets/lib/bootstrap/css/bootstrap.min.css">
    <script src="<?= $_CONFIG['base_url']; ?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?= $_CONFIG['base_url']; ?>assets/lib/fontawesome/fontawesome.min.js"></script>

    <link rel="stylesheet" href="<?= $_CONFIG['base_url']; ?>assets/styles/main.css">
</head>

<body>

    <div class="container">
        <header class="d-flex justify-content-center py-3 mb-0 pb-0">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>" class="nav-link">Startseite</a></li>
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>tutorial" class="nav-link">Tutorial</a></li>
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>quiz/pre-start" class="nav-link active" aria-current="page">Quiz</a></li>
            </ul>
        </header>


        <hr class="mb-5">


        <div class="row">
            <div class="col-3">
                <a href="<?= $_CONFIG['base_url']; ?>" class="btn btn-danger">
                    <i class="fa-regular fa-octagon-exclamation"></i>
                    <span class="d-none d-lg-inline">&nbsp;Quiz beenden</span>
                </a>
            </div>
            <div class="col-6 text-center">
                <h1>Quiz</h1>
                <span class="text-muted">Frage 0 von 5</span>
            </div>
            <div class="col-3 text-end">
                <span class="fs-3 fw-bold">
                    00:00
                </span>
            </div>
        </div>

        <hr class="my-4">

        <div class="text-center mt-5 pt-5">
            <h2>Willkommen zum Quiz!</h2>
            <p>
                Beantworte die folgenden Fragen, um dein Wissen über Quellenangaben zu testen.
            </p>
            <a href="<?= $_CONFIG['base_url']; ?>quiz" class="btn btn-primary btn-lg mt-4">
                <i class="fa-regular fa-play me-2"></i>
                Quiz starten
            </a>
        </div>

        <hr class="my-5">
        <div class="mb-5">
            <footer class="text-center">
                <p class="text-muted fs-5 mb-0 pb-0">
                    Made with 🪿 by <a href="https://kurt-krueger.com/" class="text-primary text-decoration-none">Kurt</a>
                </p>
                <p class="form-text">
                    <a href="https://github.com/Kurtiii/quellen-trainer.de" class="text-reset">Quellcode</a>
                    <span class="mx-1">·</span>
                    <a href="https://kurtiii.de/privacy/" class="text-reset">Datenschutz</a>
                    <span class="mx-1">·</span>
                    <a href="https://kurtiii.de/privacy/" class="text-reset">Impressum</a>
                </p>
            </footer>
        </div>
    </div>

    <script src="<?= $_CONFIG['base_url']; ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>