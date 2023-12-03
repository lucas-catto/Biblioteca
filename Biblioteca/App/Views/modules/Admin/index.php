<?php
    if ($_SESSION['UsuarioTipo'] != 'Admin') {
        header('Location: ./');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="./Views/CSS/global.css">
        <link rel="stylesheet" href="./Views/CSS/Admin/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <header>
            <section class="section-1">
                <img src="./Views/img/logo.png" alt="logo CosmusX">

                <button id="">Log Out</button>
            </section>

            <div class="line"></div>
            
            <section class="section-2">
                <button id="1">Novo Empréstimo</button>
                <button id="2">Novo Aluno(a)</button>
                <button id="3">Novo Livro</button>
                <button id="4">Livros Emprestados</button>
                <button id="5">Empréstimos em Atraso</button>
            </section>

        </header>

        <main id="main">
            <?php

                date_default_timezone_set('America/Sao_Paulo');
                $hora = date('H');

                if ($hora >= 00 and $hora <= 12) {
                    $periodo = 'Bom Dia';
                }
                else if ($hora <= 18) {
                    $periodo = 'Boa Tarde';
                }
                else {
                    $periodo = 'Boa Noite';
                }

                echo "<h1>Olá " . $_SESSION['UsuarioNome'] . ", $periodo!</h1>";
            ?>

            <div class="clock">
                <h3 id="time"></h3>
            </div>
        </main>

        <?php include './Views/footer/footer.php'; ?>
        <script src="./Views/JS/Admin/AJAX/script.js"></script>
        <script src="./Views/JS/Admin/Relogio/script.js"></script>
    </body>
</html>
