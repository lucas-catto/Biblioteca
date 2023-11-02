<?php

    class HomeController {
        
        public static function index () {
            include './Views/modules/Index/index.php';
        }

        public static function login () {
            include './Views/modules/Login/index.php';
        }

        public static function user () {
            include './Views/modules/User/index.php';
        }

        public static function admin () {
            include './Views/modules/Admin/index.php';
        }

        public static function tentar_login () {
            include './Models/Login/LoginModel.php';

            $login = new LoginModel();
            
            $login->email    = isset($_POST['email'])    ? $_POST['email']    : '';
            $login->password = isset($_POST['password']) ? $_POST['password'] : '';

            if ($login->email != '' && $login->password != '') {

                include './Services/Login/LoginService.php';

                $loginService = new LoginService();
                $loginService->login($login->email, $login->password);
            }
        }

        public static function notFound () {
            include './Views/modules/404/index.php';
        }
    }
?>
