<?php

    $host    = "localhost";
    $dbname  = "Biblioteca";
    $usuario = "root";
    $senha   = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
    }
    catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }
?>
