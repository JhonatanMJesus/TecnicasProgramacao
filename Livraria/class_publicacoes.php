<?php
    class Publicacoes {
        public function __construct(
            protected string $data_publicacao = "",
            protected string $titulo = "",
            private $editora = null
        ){}

        //Gets
        public function getData() {
            return $this->data_publicacao;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getEditora() {
            return $this->editora;
        }

        //Sets
        public function setData($data_publicacao){
            $this->data_publicacao = $data_publicacao;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function setEditora($editora) {
            $this->editora = $editora;
        }
    }
?>