<?php


    class Aluno {

        private $pdo;
    
        public function __construct() {
            include './Services/config/config.php';

            $config = new Config();

            $this->pdo = $config->config();
        }
        
        public function novoAluno (
            $usuarioNome,
            $usuarioEmail,
            $usuarioSenha,
            $usuarioTipo
            ) { // insert
            $this->sql = $this->pdo->prepare('INSERT INTO Usuarios VALUES (null,?,?,?,?)');
        }
        
    }
?>    
