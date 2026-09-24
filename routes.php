<?php

use App\Router;

Router::addRoute('/', function () {
    $title = 'World';

    $posts = [
        // postitused siia
    ];

    include __DIR__ . '/views/index.php';
});

Router::addRoute('/us', function () {
    $title = 'U.S';

    $posts = [
        // postitused siia
    ];

    include __DIR__ . '/views/us.php';
});