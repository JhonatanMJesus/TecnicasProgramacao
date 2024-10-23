<?php
 class produtoController {
     public function listar() {
        require_once "views/produtos.php";
     }

     public function cadastrar() {
        require_once "views/produto/cadastrar.php";
     }

     public function editar() {
        require_once "views/produto/editar.php";
     }

     public function excluir() {
        require_once "views/produto/excluir.php";
     }
 }
?>