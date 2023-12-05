<?php

    session_start();

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
            
            require_once './Models/Login/Login.php';
            require_once './Services/config/config.php';

            $login = new Login();

            $login->email = isset($_POST['email'])    ? strip_tags($_POST['email'])    : false;
            $login->senha = isset($_POST['password']) ? strip_tags($_POST['password']) : false;

            if (
                $login->email == true
                &&
                $login->senha == true
            ) {
                $sql = $pdo->prepare("SELECT * FROM Usuarios WHERE UsuarioEmail = ? AND UsuarioSenha = ?");
                $sql->execute(array(
                    $login->email,
                    $login->senha
                ));

                if ($sql->rowCount() == 1) {

                    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

                    $_SESSION['UsuarioId']   = $usuario['UsuarioId'];
                    $_SESSION['UsuarioNome'] = $usuario['UsuarioNome'];
                    $_SESSION['UsuarioTipo'] = $usuario['UsuarioTipo'];
                    

                    if ($usuario['UsuarioTipo'] === "Comum") {
                        header('Location: ./user');
                    }
                    else {
                        header('Location: ./admin');
                    }
                }
                else {
                    echo '<script>
                        window.location.href = "./login";
                    </script>';
                }
            }
            else {
                echo '<script>
                    window.location.href = "./../";
                </script>';
            }
        }
        
        public static function logout () {
            include './Views/logout/logout.php';
        }
        
        public static function notFound () {
            include './Views/modules/404/index.php';
        }
    }
?>
