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

        public static function notFound () {
            include './Views/modules/404/index.php';
        }
    }
?>
