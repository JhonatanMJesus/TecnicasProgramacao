<?php
    class Pessoa{
        public function __construct(
            protected string $nome = ""
        ){}

        //Gets
        public function getNome() {
            return $this->nome;
        }

        //Sets
        public function setNome($nome) {
            $this->nome = $nome;
        }
    }
?>