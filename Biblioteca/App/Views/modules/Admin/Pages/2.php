<?php
    session_start();
?>

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
    
    <form action="./2.php" method="post">
        <input  type="text"   name="nome"  placeholder="Nome Completo"        required autocomplete="off">
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

    <?php
    
        $host    = 'localhost';
        $dbname  = 'Biblioteca';
        $usuario = 'root';
        $senha   = '';

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nome          = isset($_POST["nome"])          ? $_POST["nome"]          : false;
            $email         = isset($_POST["email"])         ? $_POST["email"]         : false;
            $tipoDeUsuario = isset($_POST["tipoDeUsuario"]) ? $_POST["tipoDeUsuario"] : false;
            $senha         = isset($currentPassword)        ? $currentPassword        : false;
    
            if ($senha != false) {
                $senha = password_hash($senha, PASSWORD_DEFAULT);
            }
    
            // validar email
            if ($nome          != false &&
                $email         != false &&
                $tipoDeUsuario != false &&
                $senha         != false /* */
            ) {

                

                $sql = $pdo->prepare("INSERT INTO Usuarios VALUES (null,?,?,?)");
                
                if ($sql->execute(array($nome, $email, $senha))) {
                    echo "<script>alert('$nome');</script>";
                }

            }
        }
    ?>
</main>
