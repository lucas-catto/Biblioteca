<?php

    class LogarController {

        private $email;
        private $password;
        
        public static function logar () {
            
            $email    = isset($_POST["email"])    ? $_POST["email"]    : '';
            $password = isset($_POST["password"]) ? $_POST["password"] : '';

            if ($email != '' || $password != '') {
                echo 'all';
            }
        }
    }
?>
