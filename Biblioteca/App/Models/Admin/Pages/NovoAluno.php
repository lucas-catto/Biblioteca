
<?php

    class NovoAluno {
        public $nome;
        public $email;
        public $tipoDeUsuario;
        public $senha;

        public function novoAluno ($name, $email, $tipoDeUsuario, $senha) {
            include './Services/Admin/Pages/NovoAlunoService.php';

            $novoAluno = new NovoAlunoService();
            $novoAluno->novoAluno($name, $email, $tipoDeUsuario, $senha);
        }
    }
?>



