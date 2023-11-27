<?php

    class AdminController {
        
        public static function admin_2 () {

            include './Models/Aluno/Aluno.php';

            $aluno = new Aluno();

            $aluno->alunoNome  = isset($_POST['nome'])              ? $_POST['nome']              : false;
            $aluno->alunoEmail = isset($_POST['email'])             ? $_POST['email']             : false;
            $aluno->alunoTipo  = isset($_POST['tipoDeUsuario'])     ? $_POST['tipoDeUsuario']     : false;
            $aluno->alunoSenha = isset($_SESSION['NovoAlunoSenha']) ? $_SESSION['NovoAlunoSenha'] : false;

            // Verificar se os dados não estão faltando
            if (
                $aluno->alunoNome  == true && 
                $aluno->alunoEmail == true && 
                $aluno->alunoTipo  == true &&
                $aluno->alunoSenha == true
            ) {

                include './Services/config/config.php';
    
                // verificando se o email existe
                $sql = $pdo->prepare('SELECT COUNT(*) AS EmailExiste FROM Usuarios WHERE UsuarioEmail = ?');
                $sql->execute(array($aluno->alunoEmail));
    
                $emailExiste = $sql->fetch(PDO::FETCH_ASSOC);
    
                if ($emailExiste['EmailExiste'] == 0) {
    
                    $sql = $pdo->prepare('INSERT INTO Usuarios VALUES (null,?,?,?,?)');

                    $sql->execute(array(
                        $aluno->alunoNome,
                        $aluno->alunoEmail,
                        $aluno->alunoTipo,
                        $aluno->alunoSenha
                    ));
        
                    echo "<script>alert('$aluno->alunoNome registrado(a)!')</script>";
                    
                    echo '<script>
                            window.location.href = "./../admin";
                        </script>';
                }
                else {
                    echo "<script>alert('Email: $aluno->alunoEmail já está em uso!')</script>";

                    echo '<script>
                            window.location.href = "./../admin";
                        </script>';
                }
            }
        }
    }
?>
