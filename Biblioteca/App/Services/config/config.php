<?php

    class Config {
        
        private $host    = 'localhost';
        private $dbname  = 'Biblioteca';
        private $usuario = 'root';
        private $senha   = '';

        private $conexao;

        public function config () {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->usuario, $this->senha);

            return $this->conexao;
        }
    }
?>
