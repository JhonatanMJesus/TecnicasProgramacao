<?php
    class inicioController {
        public function inicio() {
            echo "Estou na classe inicioController e executei o método início()";
            require_once "views/menu.html";
        }
    }

?>