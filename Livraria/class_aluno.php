<?php
    class Aluno extends Pessoa{
        public function __construct(
            private string $ra = "",
            protected string $nome = ""
        ){
            parent::__construct($nome);
        }
        //Gets
        public function getRa(){
            return $this->ra;
        }

        //Sets
        public function setRa($ra){
            $this->ra = $ra;
        }
    }
?>