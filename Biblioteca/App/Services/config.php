<?php

    try {

        $host     = 'localhost';
        $dbname   = 'Biblioteca';
        $username = 'root';
        $password = '';

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }
    catch (PDOException $error) {
        echo "ERROR: ". $error->getMessage();
    }
?>
