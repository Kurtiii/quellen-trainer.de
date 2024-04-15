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
                <span class="text-muted">Frage <span id="questionCounter">0</span> von 5</span>
            </div>
            <div class="col-3 text-end">
                <span class="fs-3 fw-bold" id="time">
                    00:00
                </span>
            </div>
        </div>

        <hr class="my-4">

        <div id="loaderBox">
            <div class="d-flex justify-content-center mt-5 pt-5">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <div id="questionBox" style="display: none;" class="mb-5">
            <div id="progressBox" class="my-4" style="visibility: none;">
                <span class="form-text">
                    Nächste Frage in...
                </span>
                <div class="progress mt-2" role="progressbar" id="progressBar">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h1 id="questionTitle">Willkommen zum Quiz!</h1>
                            <p id="questionDescription">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim doloremque in porro facilis! Expedita aliquid consequatur ipsa ipsam. Adipisci dolore suscipit accusantium sed veritatis voluptates ad animi. Numquam, error.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <img src="https://placehold.co/400x300" class="img-fluid mt-4" alt="Bild zur Frage" id="questionImage">
                </div>
            </div>


            <div class="card mt-5" onclick="answer(1);" id="answer1">
                <div class="card-body">
                    Antwort A
                </div>
            </div>
            <div class="card mt-4" onclick="answer(2);" id="answer2">
                <div class="card-body">
                    Antwort B
                </div>
            </div>
            <div class="card mt-4" onclick="answer(3);" id="answer3">
                <div class="card-body">
                    Antwort C
                </div>
            </div>

            <button id="btnExplanation" class="btn btn-outline-primary mt-4" data-bs-toggle="modal" data-bs-target="#modalExplaination">
                <i class="fa-regular fa-info-circle me-2"></i>
                Erklärung anzeigen
            </button>
        </div>

        <div id="resultBox" style="display: none;">
            <div class="text-center mt-5 pt-5">
                <i class="fa-duotone fa-trophy-alt fa-5x text-primary"></i>
                <h2>Geschafft!</h2>
                <p>
                    Du hast das Quiz beendet. Hier ist dein Ergebnis:
                </p>
                <h3>
                    <i class="fa-regular fa-check-to-slot text-primary me-2"></i>
                    <span id="correctAnswers">0</span> von 5 Fragen richtig beantwortet
                </h3>
                <h3>
                    <i class="fa-regular fa-stopwatch-20 text-primary me-2"></i>
                    <span id="timeTaken">00:00</span> Sekunden gebraucht
                </h3>
                <a href="<?= $_CONFIG['base_url']; ?>quiz/pre-start" class="btn btn-primary btn-lg mt-4">
                    <i class="fa-regular fa-play me-2"></i>
                    Quiz wiederholen
                </a>
                <div class="form-text mt-4">
                    Lieber nochmal lernen?<br><a href="<?= $_CONFIG['base_url']; ?>tutorial">Hier geht's zum Tutorial</a>
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

    <!-- Modal -> Explaination -->
    <div class="modal fade" id="modalExplaination" tabindex="-1" aria-labelledby="modalExplaination" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalExplainationLabel">
                        <i class="fa-regular fa-info-circle me-2"></i>
                        Erklärung
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="explainationText">
                    <p>Einen Moment bitte...</p>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= $_CONFIG['base_url']; ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script>
        let questionCounter = 0;
        let time = 0;
        let timer = null;
        var questions = null;
        var shownQuestions = [];
        var alreadyAnswered = false;
        var currentQuestion = null;
        var correctAnswers = 0;

        $(document).ready(function() {
            // get questions from questions.json
            $.getJSON("<?= $_CONFIG['base_url']; ?>assets/data/questions.json", function(data) {
                questions = data;
                nextQuestion();
            });

            window.addEventListener("beforeunload", function(e) {
                var confirmationMessage = 'Wenn du die Seite verlässt, verlierst du deinen Fortschritt im Quiz. Bist du sicher?';

                (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
            });
        });

        function nextQuestion() {
            $("#questionBox").hide();
            $("#progressBox").hide();
            $("#loaderBox").show();
            $("#questionImage").hide();

            $("#answer1").removeClass("bg-success text-success bg-danger text-danger bg-opacity-25 fw-bold text-decoration-underline");
            $("#answer2").removeClass("bg-success text-success bg-danger text-danger bg-opacity-25 fw-bold text-decoration-underline");
            $("#answer3").removeClass("bg-success text-success bg-danger text-danger bg-opacity-25 fw-bold text-decoration-underline");

            $(".progress-bar").css("width", "100%");

            if (questionCounter >= 5) {
                // show result
                stopTimer();
                $("#questionBox").hide();
                $("#loaderBox").show();
                $("#progressBox").hide();

                $("#correctAnswers").text(correctAnswers);
                $("#timeTaken").text(("0" + Math.floor(time / 60)).slice(-2) + ":" + ("0" + (time % 60)).slice(-2));

                $("#loaderBox").hide();
                $("#resultBox").show();
                return;
            }

            questionCounter++;

            function getRandomQuestion() {
                var question = questions[Math.floor(Math.random() * Object.keys(questions).length + 1)];
                if (shownQuestions.includes(question)) {
                    return getRandomQuestion();
                }
                return question;
            }

            var question = getRandomQuestion();
            shownQuestions.push(question);
            currentQuestion = question;
            console.log(question);

            $("#questionCounter").text(questionCounter);
            $("#questionTitle").text(question.title);
            $("#questionDescription").text(question.question);
            $("#explainationText").html(question.explanation);
            $("#answer1 .card-body").text(question.answers[1].text);
            $("#answer2 .card-body").text(question.answers[2].text);
            $("#answer3 .card-body").text(question.answers[3].text);

            if (question.image !== false) {
                $("#questionImage").attr("src", question.image);
                $("#questionImage").show();
            } else {
                $("#questionImage").attr("src", "");
                $("#questionImage").hide();
            }

            startTimer();
            $("#questionBox").show();
            $("#loaderBox").hide();
        }

        function answer(answer) {
            if (alreadyAnswered) {
                return;
            }
            alreadyAnswered = true;

            $("#questionBox").hide();
            $("#loaderBox").show();

            stopTimer();

            if (currentQuestion.answers[answer].correct) {
                correctAnswers++;
            }

            $("#answer" + answer).addClass("fw-bold text-decoration-underline");

            for (let i = 1; i <= 3; i++) {
                if (currentQuestion.answers[i].correct) {
                    $("#answer" + i).addClass("bg-success bg-opacity-25 text-success");
                } else {
                    $("#answer" + i).addClass("bg-danger bg-opacity-25 text-danger");
                }
            }


            $("#questionBox").show();
            $("#loaderBox").hide();
            $("#progressBox").show();

            // animate progress bar (2s countdown)
            $(".progress-bar").animate({
                width: "0%"
            }, 1000);

            setTimeout(function() {
                alreadyAnswered = false;
                nextQuestion();
            }, 2000);
        }


        function startTimer() {
            timer = setInterval(function() {
                time++;
                $("#time").text(("0" + Math.floor(time / 60)).slice(-2) + ":" + ("0" + (time % 60)).slice(-2));
            }, 1000);
        }

        function stopTimer() {
            clearInterval(timer);
        }
    </script>
</body>

</html>