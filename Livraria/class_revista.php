<?php
    class Revista extends Publicacoes {
        public function __construct(
            private string $numero = "",
            private string $issn = "",
            string $data_publicacao = "",
            string $titulo = ""
        ){
            parent::__construct($data_publicacao, $titulo);
        }

        //Gets
        public function getNumero(){
            return $this->numero;
        }

        public function getIssn(){
            return $this->issn;
        }

        //Sets

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function setIssn($issn){
            $this->issn = $issn;
        }
    }
?>