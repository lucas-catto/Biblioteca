<?php
    try {

        $host     = "localhost";
        $dbname   = "Biblioteca";
        $username = "root";
        $password = "";

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }
    catch (PDOException $error) {
        echo "ERRO ao conectar no Banco de Dados: ". $error->getMessage();
    }
?>
