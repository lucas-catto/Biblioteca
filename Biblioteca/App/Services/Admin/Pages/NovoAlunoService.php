<?php

    class NovoAlunoService {

        public $pdo;

        public function __construct () {
            try {

                $host     = "localhost";
                $dbname   = "Biblioteca";
                $username = "root";
                $password = "";
        
                $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            }
            catch (PDOException $error) {
                echo "ERRO ao conectar no Banco de Dados: ". $error->getMessage();
            }
        }

        public function novoAluno ($nome, $email, $tipoDeUsuario, $senha) {
            $sql = $this->pdo->prepare("INSERT INTO Usuarios VALUES (null,?,?,?,?)");
            $sql->execute(array($nome, $email, $tipoDeUsuario, $senha));
        }
    }
?>
