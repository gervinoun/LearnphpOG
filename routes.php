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

Router::addRoute('/test', function () {
    $servername = "localhost";
    $username = "root";
    $password = "example";
    $dbname = "learnphp";

    try {
        $conn = new PDO(
            "mysql:host=$servername;dbname=$dbname",
            $username,
            $password
        );

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
});