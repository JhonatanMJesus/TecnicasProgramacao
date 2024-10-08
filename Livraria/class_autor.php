<?php
    class Autor extends Pessoa {
        public function __construct(
            private string $nacionalidade = "",
            protected string $nome = "",
            private array $livro = array()
        ){
            parent::__construct($nome);
        }
        //Gets
        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function getLivro(){
            return $this->livro;
        }

        //Sets
        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        public function setLivro($livro){
            $this->livro[] = $livro;
        }
    }
?>