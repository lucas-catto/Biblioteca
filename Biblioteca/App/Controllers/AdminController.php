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

                if ($aluno->alunoTipo == "Admin" || $aluno->alunoTipo == "Comum") {

                    
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
                else {
                    echo "<script>alert('Tipo: $aluno->alunoTipo é inválido!')</script>";
    
                    echo '<script>
                            window.location.href = "./../admin";
                        </script>';
                }
            }
        }

        public static function admin_3 () {

            // var_dump($_POST);
            
            include './Models/Livro/Livro.php';

            $livro = new Livro();

            $livro->livroTitulo     = isset($_POST['titulo'])     ? $_POST['titulo']     : false;
            $livro->livroAutor      = isset($_POST['autor'])      ? $_POST['autor']      : false;
            $livro->livroQuantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : false;
            $livro->livroCodigo     = isset($_POST['codigo'])     ? $_POST['codigo']     : false;

            if (
                $livro->livroTitulo     == true &&
                $livro->livroAutor      == true &&
                $livro->livroQuantidade == true &&
                $livro->livroCodigo     == true
            ) {

                include './Services/config/config.php';

                // verificando se existe um título de mesmo autor, sendo assim, altera apenas a quantidade.
                $sql = $pdo->prepare('SELECT * FROM Livros WHERE LivroTitulo = ? AND LivroAutor = ?');
                $sql->execute(array(
                    $livro->livroTitulo,
                    $livro->livroAutor
                ));
                
                if ($sql->rowCount() == 0) {

                    $sql = $pdo->prepare('INSERT INTO Livros VALUES (null,?,?,?,?)');
                    $sql->execute(array(
                        $livro->livroTitulo,
                        $livro->livroAutor,
                        $livro->livroQuantidade,
                        $livro->livroCodigo
                    ));

                    echo "<script>alert('O Livro $livro->livroTitulo foi cadastrado!')</script>";
    
                    echo '<script>
                            window.location.href = "./../admin";
                        </script>';
                }
                else {
                    echo "<script>alert('Livro \"$livro->livroTitulo\" existe! - Update')</script>";

                    echo '<script>
                            window.location.href = "./../admin";
                        </script>';
                }
            }
        }
    }
?>
