<?php
    session_start();

    date_default_timezone_set('America/Sao_Paulo');
    $dateI = date("d/m/Y");
?>

<style>
    @import url('./Views/CSS/Admin/Pages/1.css');
</style>

<main>

    <h1>Registrar Empréstimo</h1>
    
    <form action="#" method="post">
        <input type="text"   name="UserName"    placeholder="Nome Aluno (a)" required autocomplete="off">
        <input type="text"   name="BookName"    placeholder="Nome Livro"     required autocomplete="off">
        
        <div class="date">
            <?php
                echo "<p class='date-item'>Data Inicial: $dateI</p>";
                $_SESSION['DataInicial'] = $dateI;
            ?>

            <input type="date" name="dateFinal" class='date-item' min="<?php $dateI; ?>">
        </div>
        
        <button type="submit">Registrar</button>
    </form>
</main>

<!-- // verificar se o usuário existe
// verificar se o livro existe
// verificar a qunatidade do Livro
// ok -->