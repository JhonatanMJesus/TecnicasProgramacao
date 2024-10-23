<?php
    class categoriaController {
        public function listar() {
            // require_once "views/categoria/listar.php";
            echo "Estou no listar categoria";
        }

        public function cadastrar() {
            require_once "views/categoria/cadastrar.php";
        }

        public function editar() {
            require_once "views/categoria/editar.php";
        }

        public function excluir() {
            require_once "views/categoria/excluir.php";
        }
    }
?>