<?php
    require_once "class_categoria.php";
    require_once "class_produto.php";

    $produto3 = new Produto(
        "Mouse",
        "Mouse Gamer",
        16.5,
        150);
    
    $produto4 = new Produto(
        "Teclado",
        "Teclado Mecânico",
        349.49,
        200);

    $categoria = new Categoria("Material Escolar");
    $categoria1 = new Categoria("Informática", array($produto3));

    $categoria1->setProduto($produto4);

    $produto1 = new Produto(
        "Caderno",
        "Caderno Brochura",
        16.5,
        150,
        $categoria);

    $produto2 = new Produto(
        "Apontador",
        "Apontador azul",
        2.5,
        200,
        $categoria);

    echo "<h3>Produto 1</h3>";
    echo "Nome: {$produto1->getNome()}<br />";
    echo "Descrição: {$produto1->getDescricao()}<br />";
    echo "Preço: {$produto1->getPreco()}<br />";
    echo "Estoque: {$produto1->getEstoque()}<br />";
    echo "Categoria: {$produto1->getCategoria()->getDescritivo()}<br /><br />";

    echo "<h3>Categorias</h3>";
    echo "Nome: {$categoria1->getDescritivo()}";
    echo "<h4>Produtos:</h4>";
    foreach($categoria1->getProduto() as $dados) {
        echo "Nome: {$dados->getNome()}<br />";
        echo "Descrição: {$dados->getDescricao()}<br />";
        echo "Preço: {$dados->getPreco()}<br />";
        echo "Estoque: {$dados->getEstoque()}<br /><br />";
    }
?>