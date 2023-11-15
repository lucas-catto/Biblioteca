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
            
        case '/tentar_login':
            HomeController::tentar_login();
            break;

        /* Admin */
        case '/admin/novo_aluno':
            HomeController::novo_aluno();
            break;

        /* -- Admin -- */
        
        default:
            HomeController::notFound();
            break;
    }
?>
