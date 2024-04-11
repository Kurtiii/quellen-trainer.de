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
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>tutorial" class="nav-link active" aria-current="page">Tutorial</a></li>
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>quiz/pre-start" class="nav-link">Quiz</a></li>
                <li class="nav-item"><a href="<?= $_CONFIG['base_url']; ?>about" class="nav-link">Über</a></li>
            </ul>
        </header>


        <hr class="mb-5">


        <div class="row">
            <div class="col-12">
                <h1>Tutorial</h1>
                <p>
                    Hier zeigen wir dir, wie du eine korrekten Quellenangabe erstellst.
                </p>
            </div>
        </div>

        <hr class="my-4">
        <p>
            <a href="#allgemeines">
                <i class="fa-regular fa-circle-info me-1"></i>
                Allgemeines zur Quellenangabe
            </a>
            <br><br>
            <a href="#buecher">
                <i class="fa-regular fa-book me-1"></i>
                Bücher
            </a>
            <br>
            <a href="#internet">
                <i class="fa-regular fa-globe me-1"></i>
                Internetseiten
            </a>
            <br>
            <a href="#gesetze">
                <i class="fa-regular fa-gavel me-1"></i>
                Gesetze
            </a>
            <br>
            <a href="#filme">
                <i class="fa-regular fa-film me-1"></i>
                Filme
            </a>
            <br>
            <a href="#youtube">
                <i class="fa-brands fa-youtube me-1"></i>
                YouTube-Videos
            </a>
        </p>
        <hr class="my-4">
        <h3 id="allgemeines">
            <i class="fa-regular fa-circle-info me-1"></i>
            Allgemeines zur Quellenangabe
        </h3>
        <p>
            Eine Quellenangabe besteht aus verschiedenen Teilen, die in einer bestimmten Reihenfolge angegeben werden müssen.
            Sie wird in wissenschaftlichen Arbeiten verwendet, um die Herkunft von Informationen und fremden Gedanken aufzuzeigen.
            Eine korrekte Quellenangabe besteht aus folgenden Teilen:
        <ol>
            <li>einem Verweis im Text</li>
            <li>einem Eintrag ins Literaturverzeichnis, das am Ende der Arbeit angefügt wird</li>
        </ol>
        Auf dieser Seite zeigen wir dir, wie du Quellenangaben für verschiedene Medien erstellst.
        Wir verwenden dabei den APA-7 Standard, der in vielen wissenschaftlichen Arbeiten verwendet wird.
        </p>

        <hr class="my-4">

        <h3 id="buecher">
            <i class="fa-regular fa-book me-1"></i>
            Bücher
        </h3>
        <p>
            <b>So geht's:</b><br>
            <span class="bg-primary bg-opacity-25">primäre Beiträger</span>
            (<span class="bg-danger bg-opacity-25">Veröffentlichungsdatum</span>).
            <span class="bg-warning bg-opacity-25">Titel</span>
            (<span class="bg-success bg-opacity-25">Auflage</span>).
            <span class="bg-dark bg-opacity-25">Herausgeber</span>.
            <span class="bg-info bg-opacity-25">Verlag</span>.
        </p>
        <p>
            <b>Beispiel:</b><br>
            <span class="bg-primary bg-opacity-25">Müller, M.</span>
            (<span class="bg-danger bg-opacity-25">2021</span>).
            <span class="bg-warning bg-opacity-25">Ein total unbekanntes Buch</span>
            (<span class="bg-success bg-opacity-25">2. Auflage</span>).
            <span class="bg-dark bg-opacity-25">Hans Müller</span>.
            <span class="bg-info bg-opacity-25">Verlag Müller</span>.
        </p>

        <h3 id="internet" class="mt-5">
            <i class="fa-regular fa-globe me-1"></i>
            Internetseiten
        </h3>
        <p>
            <b>So geht's:</b><br>
            <span class="bg-primary bg-opacity-25">primäre Beiträger</span>
            (<span class="bg-danger bg-opacity-25">Veröffentlichungsdatum</span>).
            <span class="bg-warning bg-opacity-25">Titel</span>
            (<span class="bg-success bg-opacity-25">Titel des Sammelwerks</span>).
            <span class="bg-dark bg-opacity-25">URL</span>
        </p>
        <p>
            <b>Beispiel:</b><br>
            <span class="bg-primary bg-opacity-25">Müller, M.</span>
            (<span class="bg-danger bg-opacity-25">2021</span>).
            <span class="bg-warning bg-opacity-25">Warum Gänse besser sind als Enten</span>
            (<span class="bg-success bg-opacity-25">Tierwelt</span>).
            <span class="bg-dark bg-opacity-25">https://www.tierwelt.de/gaense-vs-enten</span>
        </p>

        <h3 id=" gesetze" class="mt-5">
            <i class="fa-regular fa-gavel me-1"></i>
            Gesetze
        </h3>
        <p>
            <b>So geht's:</b><br>
            <span class="bg-primary bg-opacity-25">Paragraph</span>
            <span class="bg-danger bg-opacity-25">Absatz</span>
            <span class="bg-warning bg-opacity-25">Satz</span>
            <span class="bg-success bg-opacity-25">Buchstaben</span>
            <span class="bg-dark bg-opacity-25">Kurztitel des Gesetzes</span>
        </p>
        <p>
            <b>Beispiel:</b><br>
            <span class="bg-primary bg-opacity-25">§ 81</span>
            <span class="bg-danger bg-opacity-25">Absatz 1</span>
            <span class="bg-warning bg-opacity-25">Satz 3</span>
            <span class="bg-success bg-opacity-25">BGB</span>
            <span class="bg-dark bg-opacity-25">Stiftungsgesetz</span>
        </p>

        <h3 id="filme" class="mt-5">
            <i class="fa-regular fa-film me-1"></i>
            Filme
        </h3>
        <p>
            <b>So geht's:</b><br>
            <span class="bg-primary bg-opacity-25">Produzent</span> (Produzent) &
            (<span class="bg-danger bg-opacity-25">Regisseur</span>) (Regisseur).
            <span class="bg-warning bg-opacity-25">Jahr</span>.
            <span class="bg-success bg-opacity-25">Titel</span>.
            <span class="bg-dark bg-opacity-25">Produktionsort</span>:
            <span class="bg-info bg-opacity-25">Produktionsfirma</span>.
        </p>
        <p>
            <b>Beispiel:</b><br>
            <span class="bg-primary bg-opacity-25">Müller, M.</span> (Produzent) &
            (<span class="bg-danger bg-opacity-25">Schmidt, S.</span>) (Regisseur).
            <span class="bg-warning bg-opacity-25">2021</span>.
            <span class="bg-success bg-opacity-25">Der Kampf der Riesenente 🦆</span>.
            <span class="bg-dark bg-opacity-25">Gartenteich</span>:
            <span class="bg-info bg-opacity-25">QuackProductions GmbH</span>.
        </p>

        <h3 id="youtube" class="mt-5">
            <i class="fa-brands fa-youtube me-1"></i>
            YouTube-Videos
        </h3>
        <p>
            <b>So geht's:</b><br>
            <span class="bg-primary bg-opacity-25">primäre Beiträger</span>
            (<span class="bg-danger bg-opacity-25">Veröffentlichungsdatum</span>).
            <span class="bg-warning bg-opacity-25">Titel</span>
            (<span class="bg-success bg-opacity-25">[Genre]</span>).
            <span class="bg-dark bg-opacity-25">Titel des Sammelwerks</span>.
            <span class="bg-info bg-opacity-25">URL</span>
        </p>

        <p>
            <b>Beispiel:</b><br>
            <span class="bg-primary bg-opacity-25">Rick Astley</span>
            (<span class="bg-danger bg-opacity-25">2009</span>).
            <span class="bg-warning bg-opacity-25">Never Gonna Give You Up (Official Music Video)</span>
            (<span class="bg-success bg-opacity-25">[Musikvideo]</span>).
            <span class="bg-dark bg-opacity-25">YouTube</span>.
            <span class="bg-info bg-opacity-25">https://youtu.be/dQw4w9WgXcQ</span>
        </p>

        <hr class="my-4">

        <p>
            Du möchtest dein Wissen überprüfen? <a href="<?= $_CONFIG['base_url']; ?>quiz/pre-start">Hier geht's zum Quiz</a>
        </p>

        <script src="<?= $_CONFIG['base_url']; ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>