<?php
    class Categorias {
        public function __construct(
            private int $id_produto = 0,
            private string $descritivo = ""
        ){}

        public function getId() {
            return $this->id_produto;
        }

        public function getDescritivo() {
            return $this->descritivo;
        }
    }
?>