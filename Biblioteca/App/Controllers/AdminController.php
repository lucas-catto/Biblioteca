<?php

    class AdminController {
        
        public static function admin_2 () {

            include './Models/Aluno/Aluno.php';

            $aluno = new Aluno();

            $aluno->alunoNome  = isset($_POST['nome'])              ? $_POST['nome']              : false;
            $aluno->alunoEmail = isset($_POST['email'])             ? $_POST['email']             : false;
            $aluno->alunoTipo  = isset($_POST['tipoDeUsuario'])     ? $_POST['tipoDeUsuario']     : false;
            $aluno->alunoSenha = isset($_SESSION['NovoAlunoSenha']) ? $_SESSION['NovoAlunoSenha'] : false;

            include './Services/config/config.php';

            $sql = $pdo->prepare('INSERT INTO Usuarios VALUES (null,?,?,?,?)');
            $sql->execute(array(
                $aluno->alunoNome,
                $aluno->alunoEmail,
                $aluno->alunoTipo,
                $aluno->alunoSenha
            ));

            header("Location: ./../admin");
        }
    }
?>
