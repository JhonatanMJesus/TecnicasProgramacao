<?php
    class categoriaController {
        public function listar() {
            $categoriaDAO = new CategoriasDAO();
            $retorno = $categoriaDAO->buscar_todas();
            require_once "views/listar_categorias.php";

        }

        public function inserir() {
            $msg = "";
            if($_POST){
                if(empty($_POST["descritivo"])){
                    $msg = "Preencha o descritivo";
                } else {
                    //Salvar no banco de dados
                    $categoria = new Categorias(descritivo:$_POST["descritivo"]);
                    $obj = new categoriasDAO();
                    $retorno = $obj->inserir($categoria);
                    if($retorno) {
                        echo "<script>alert('Categoria inserida com sucesso')</script>";
                    }
                    header("location:/lojamvc/categorias");
                }

            }
            require_once "views/form_categoria.php";
        }

        public function editar() {
            require_once "views/categoria/editar.php";
        }

        public function excluir() {
            require_once "views/categoria/excluir.php";
        }
    }
?>