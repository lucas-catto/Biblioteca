<?php

    include './Controllers/HomeController.php';
    include './Controllers/LogarController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // echo $url;

    switch ($url) {
        case '/':
            HomeController::index();
            break;
        
        case '/login':
            HomeController::login();
            break;
        
        case '/user':
            HomeController::user();
            break;
        
        case '/admin':
            HomeController::admin();
            break;

        case '/logar':
            LogarController::logar();
        
        default:
            HomeController::notFound();
            break;
    }
?>
