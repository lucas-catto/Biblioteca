<?php

    class Livro {
        
        private $livroNome;
        private $livroQuantidade;
        private $livroAutor;
        private $livroCodigo;

        // SET
        
        public function setLivroNome ($livroNome) {
            $this->livroNome       = $livroNome;
        }
        public function setLivroQuantidade ($livroQuantidade) {
            $this->livroQuantidade = $livroQuantidade;
        }
        public function setLivroAutor ($livroAutor) {
            $this->livroAutor      = $livroAutor;
        }
        public function setLivroCodigo ($livroCodigo) {
            $this->livroCodigo     = $livroCodigo;
        }
        
        // GET
        
        public function getLivroNome       () { return $this->livroNome;       }
        public function getLivroQuantidade () { return $this->livroQuantidade; }
        public function getLivroAutor      () { return $this->livroAutor;      }
        public function getLivroCodigo     () { return $this->livroCodigo;     }
    }
?>
