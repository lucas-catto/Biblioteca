
<style>
    @import url('./Views/CSS/Admin/Pages/2.css');
</style>

<?php
    function passwordGenerate($size=6){
        $numbers     = '123456789';
        $newPassword = '';

        for ($i=0; $i < $size; $i++) { 
            $newPassword .= $numbers[random_int(0, strlen($numbers) -1)];
        }
        return $newPassword;
    }
?>

<main>

    <h1>Cadastrar Aluno</h1>
    
    <form action="/novo_aluno" method="post">
        <input  type="text"   name="name"  placeholder="Nome Completo"        required autocomplete="off">
        <input  type="text"   name="email" placeholder="E-mail Institucional" required autocomplete="off">
        <!-- <input  type="number" name="rm"    placeholder="RM"                            autocomplete="off"> -->
        

        <div class="tipoDeUsuario">

            <label  for="tipoDeUsuario">Tipo de Usuário:</label>

            <select id="tipoDeUsuario" name="tipoDeUsuario">
                <option value="user" selected> Leitor (a)    </option>
                <option value="admin">         Administrador </option>
            </select>
        </div>
            
        <?php
            $currentPassword = passwordGenerate();
            echo "<p>Senha: <strong>" . $currentPassword . "</strong></p>"; //  - Trocar senha ao logar.
        ?>
        
        <button type="submit">Cadastrar Aluno (a)</button>
    </form>
</main>
