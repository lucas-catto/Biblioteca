<?php

    class Aluno {
        
        public $usuarioNome;
        public $usuarioEmail;
        public $usuarioSenha;
        public $usuarioTipo;

        /*
        // GET
        public function getUsuarioNome () {
            return $this->usuarioNome;
        }
        public function getUsuarioEmail () {
            return $this->usuarioEmail;
        }
        public function getUsuarioSenha () {
            return $this->usuarioSenha;
        }
        public function getUsuarioTipo () {
            return $this->usuarioTipo;
        }


        // SET
        public function setUsuarioNome (string $usuarioNome) {
            $this->usuarioNome = $usuarioNome;
        }
        public function setUsuarioEmail (string $usuarioEmail) {
            $this->usuarioEmail = $usuarioEmail;
        }
        public function setUsuarioSenha (string $usuarioSenha) {
            $this->usuarioSenha = $usuarioSenha;
        }
        public function setUsuarioTipo (bool $usuarioTipo) {
            $this->usuarioSenha = $usuarioTipo;
        }
        */

        public function NovoAluno () {

            include './Services/Admin/Pages/Aluno/Aluno.php';

            $novoAlunoService = new Aluno();

            $novoAlunoService->novoAluno($usuarioNome, $usuarioEmail, $usuarioSenha, $usuarioTipo);
        }
    }
?>
