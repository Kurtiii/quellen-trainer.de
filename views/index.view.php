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
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>" class="nav-link active" aria-current="page">Startseite</a></li>
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>tutorial" class="nav-link">Tutorial</a></li>
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>quiz/pre-start" class="nav-link">Quiz</a></li>
            </ul>
        </header>


        <hr class="mb-5">


        <div class="row">
            <div class="col-12">
                <h1>Quellen Trainer</h1>
                <p>
                    Hier kannst du lernen, Quellen richtig anzugeben und das gelernte Wissen in einem Quiz testen.
                </p>
            </div>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fa-duotone fa-square-question fa-5x mb-4 text-primary"></i>
                        <h5 class="card-title">Tutorial</h5>
                        <p class="card-text">Hier findest du ein Tutorial, wie du Quellen richtig angibst.</p>
                        <a href="<?= $_CONFIG['base_url']; ?>tutorial" class="btn btn-primary">Zum Tutorial</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fa-duotone fa-cards-blank fa-5x mb-4 text-primary"></i>
                        <h5 class="card-title">Quiz</h5>
                        <p class="card-text">Teste dein Wissen in einem Quiz.</p>
                        <a href="<?= $_CONFIG['base_url']; ?>quiz/pre-start" class="btn btn-primary">Zum Quiz</a>
                    </div>
                </div>
            </div>
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