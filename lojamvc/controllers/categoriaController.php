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
            $msg = "";
            if($_POST) {
                if(empty($_POST['descritivo'])) {
                    $msg = "Preencha o descritivo";
                } else {
                    $categoria = new Categorias($_POST["id_categoria"], $_POST["descritivo"]);
                    $categoriaDAO = new CategoriasDAO();
                    $categoriaDAO->alterar_categoria($categoria);
                    header("location:/lojamvc/categorias?msg=$retorno");
                }
            }
            if(isset($_GET['id'])) {
                $categoria = new Categorias($_GET["id"]);
                $categoriaDAO = new CategoriasDAO();
                $retorno = $categoriaDAO->buscar_uma_categoria($categoria);
            }
            require_once "views/editar_categoria.php";

        }

        public function excluir() {
            if(isset($_GET["id"])) {
                $categoria = new Categorias($_GET["id"]);
                $categoriaDAO = new CategoriasDAO();
                $retorno = $categoriaDAO->excluir($categoria);
                header("location:/lojamvc/categorias?msg=$retorno");
            }
        }
    }
?>