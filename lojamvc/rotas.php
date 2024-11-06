<?php
    class Rotas {
        public array $rotas = [];

        public function get($nomeRota, array $dados) {
            $this->rotas["GET"][$nomeRota] = $dados;
        }

        public function post($nomeRota, array $dados) {
            $this->rotas["POST"][$nomeRota] = $dados;
        }

        public function verificarRota($metodo, $nomeRota) {
            if(isset($this->rotas[$metodo][$nomeRota])) {
                $dados = $this->rotas[$metodo][$nomeRota];
                $method = $dados[1];
                $obj = new $dados[0];
                return $obj->$method();
            } 
            exit("Rota não encontrada");
        }
    } // Fim da classe

    //Instanciar um objeto da classe Rotas
    $route = new Rotas();
    $route->get("/", [inicioController::class, "inicio"]);
    $route->get("/categorias", [categoriaController::class, "listar"]);
    $route->get("/inserir_categoria", [categoriaController::class, "inserir"]);
    $route->get("/excluir_categoria", [categoriaController::class, "excluir"]);
    $route->get("/editar_categoria", [categoriaController::class, "editar"]);

    $route->post("/inserir_categoria", [categoriaController::class, "inserir"]);
    $route->post("/editar_categoria", [categoriaController::class, "editar"]);

?>