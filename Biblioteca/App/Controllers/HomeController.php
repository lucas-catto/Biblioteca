<?php

    session_start();

    class HomeController {
        
        public static function index () {
            include './Views/modules/Index/index.php';
        }

        public static function login () {
            include './Views/modules/Login/index.php';
        }

        public static function user () {
            include './Views/modules/User/index.php';
        }

        public static function admin () {
            include './Views/modules/Admin/index.php';
        }

        public static function tentar_login () { }

        /* Admin - Novo */
        
        public static function novoEmprestimo () {
            include './Models/Emprestimo/Emprestimo.php';
        }
        public static function novoAluno () {
            
            include './Models/Aluno/Aluno.php';
            
            $usuarioNome  = isset($POST['nome'])               ? $_POST['nome']              : null;
            $usuarioEmail = isset($POST['email'])              ? $_POST['email']             : null;
            $usuarioSenha = isset($_SESSION['NovoAlunoSenha']) ? $_SESSION['NovoAlunoSenha'] : null; //
            $usuarioTipo  = isset($POST['tipoDeUsuario'])      ? $_POST['tipoDeUsuario']     : null;

            if (!$usuarioNome || !$usuarioEmail || !$usuarioSenha || !$usuarioTipo) {
                echo "<script>alert('Dados faltando!');</script>";
            }
            else {
                $novoAluno = new Aluno();
    
                $novoAluno->setUsuarioNome($usuarioNome);
                $novoAluno->setUsuarioEmail($usuarioEmail);
                $novoAluno->setUsuarioSenha($usuarioSenha);
                $novoAluno->setUsuarioTipo($usuarioTipo);
            }
        }
        public static function novoLivro () {
            include './Models/Livro/Livro.php';
        }
        
        /* -- Admin - Novo -- */

        public static function notFound () {
            include './Views/modules/404/index.php';
        }
    }
?>
