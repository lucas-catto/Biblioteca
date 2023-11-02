<?php
    class LoginService {
        
        public function login ($email, $password) {
            
            include './Services/config/config.php';

            $host     = "localhost";
            $dbname   = "Biblioteca";
            $username = "root";
            $password = "";
    
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            $sql = $pdo->prepare("SELECT UsuarioPassword FROM Usuarios WHERE UsuarioEmail = ?");
            $sql->execute(array($email));

            $emailExiste = $sql->fetch(PDO::FETCH_ASSOC);
            
            if ($emailExiste['UsuarioEmail']) {
                if ($emailExiste['UsuarioSenha'] == $password) {
                    header('Location: ./Views/modules/User/index.php');
                }
            }
        }

    }
    
?>
