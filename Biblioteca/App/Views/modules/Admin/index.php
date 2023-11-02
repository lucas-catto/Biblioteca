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
            
        </main>

        <?php include './Views/footer/footer.php'; ?>
        <script src="./Views/JS/Admin/AJAX/script.js"></script>
    </body>
</html>
