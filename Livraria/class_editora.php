<?php
    class Editora extends Pessoa{
        public function __construct(
            private string $cnpj = "",
            protected string $nome = "",
            private array $livro = array()
        ){
            parent::__construct($nome);
        }
        //Gets
        public function getCnpj(){
            return $this->cnpj;
        }

        public function getLivro(){
            return $this->livro;
        }

        //Sets
        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function setLivro($livro){
            $this->livro[] = $livro;
        }
    }
?>