<?php

    include './Controllers/HomeController.php';
    include './Controllers/AdminController.php';

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

        /* Admin
            1 => Novo Empréstimo
            2 => Novo Aluno
            3 => Novo Livro
        */
        case '/admin/1':
            var_dump($_POST);
            break;
        
        case '/admin/2':
            AdminController::admin_2();
            break;
        
        case '/admin/3':
            AdminController::admin_3();
            break;

        /* -- Admin -- */
        
        case '/logout':
            HomeController::logout();
            break;


        default:
            HomeController::notFound();
            break;
    }
?>
