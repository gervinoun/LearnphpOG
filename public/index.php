<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}

function dump(...$values)
{
    echo '<pre>';
    var_dump(...$values);
    echo '</pre>';
}

spl_autoload_register(function ($class) {
    $class = str_replace('App\\', '', $class);
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/../src/$class.php";
});


use App\Controllers\PublicController as PC;
$router = new App\Router();
$db = new App\DB();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new App\Controllers\PublicController();

dump($router, $db, $controller);
// switch ($_SERVER['REQUEST_URI']) {
//     case '/':
//         include __DIR__ . '/../views/index.php';
//         break;

//     case '/us':
//         include __DIR__ . '/../views/us.php';
//         break;

//     case '/technology':
//         include __DIR__ . '/../views/technology.php';
//         break;

//     default:
//         echo '404';
// }>