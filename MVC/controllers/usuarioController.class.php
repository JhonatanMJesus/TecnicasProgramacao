<?php
    class usuarioController {
        public function listar() {
            echo "Estou na classe usuarioController e executei o método listar";
            //busca dos dados no BD
            require_once "models/usuario.class.php";
            $usuario = new Usuario();
            $retorno = $usuario->buscar_todos_usuarios();
            //mostra os dados na views
            require_once "views/listar_usuarios.php";
        }

        public function inserir() {
            echo "Estou no inserir";
        }

        public function alterar() {
            echo "Estou no alterar";
        }

        public function excluir() {
            echo "Estou no excluir";
        }


    }

?>