<?php

    include './Controllers/HomeController.php';

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
        
        default:
            HomeController::notFound();
            break;
    }
?>
