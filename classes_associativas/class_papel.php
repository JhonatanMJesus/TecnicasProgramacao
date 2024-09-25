<?php
    Class Papel {
        public function __construct(
            private string $descritivo ="",
            private $filme = null,
            private $ator = null
        ){}
        
        public function getDescritivo(){
            return $this->descritivo;
        }
        
        public function getFilme(){
            return $this->filme;
        }
        
        public function getAtor(){
            return $this->ator;
        }
    }
?>