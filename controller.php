<?php

require_once 'vendor/autoload.php';
require_once 'assets/config.php';

$_ROUTER = new \Bramus\Router\Router();

$_ROUTER->get('/', function () {
    global $_CONFIG;
    require_once 'views/index.view.php';
});

$_ROUTER->get('/tutorial', function () {
    global $_CONFIG;
    require_once 'views/tutorial.view.php';
});

$_ROUTER->get('/quiz/pre-start', function () {
    global $_CONFIG;
    require_once 'views/quiz/pre-start.view.php';
});

$_ROUTER->get('/quiz', function () {
    global $_CONFIG;
    require_once 'views/quiz/quiz.view.php';
});

$_ROUTER->run();
