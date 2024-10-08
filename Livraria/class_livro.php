<?php
    class Livro extends Publicacoes {
        public function __construct(
            private string $sinopse = "",
            private string $isbn = "",
            private array $genero = array(),
            private array $autor = array(),
            protected string $data_publicacao = "",
            protected string $titulo = "",
            private $editora = ""
        ){
            parent::__construct($data_publicacao, $titulo);
            $this->publicacao = new Publicacoes($data_publicacao, $titulo, $editora);
        }

        //Gets
        public function getSinopse(){
            return $this->sinopse;
        }

        public function getIsbn(){
            return $this->isbn;
        }

        public function getGenero(){
            return $this->genero;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getEditora(){
            return $this->editora;
        }

        //Sets
        public function setSinopse($sinopse){
            $this->sinopse = $sinopse;
        }

        public function setIsbn($isbn){
            $this->isbn = $isbn;
        }

        public function setGenero($genero){
            $this->genero[] = $genero;
        }

        public function setAutor($autor){
            $this->autor[] = $autor;
        }

        public function setEditora($editora){
            $this->editora = $editora;
        }
    }
?>