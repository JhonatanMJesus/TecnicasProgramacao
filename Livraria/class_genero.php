<?php
    class Genero {
        public function __construct(
            private string $descritivo = "",
            private array $livro = array()
        ){}

        //Gets
        public function getDescritivo(){
            return $this->descritivo;
        }

        public function getLivro($livro){
            return $this->livro;
        }

        //Sets
        public function setDescritivo($descritivo){
            $this->descritivo = $descritivo;
        }

        public function setLivro($livro){
            $this->livro[] = $livro;
        }
    }
?>