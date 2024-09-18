<?php
    require_once "class_fornecedor.php";
    require_once "class_produto.php";

    $produto1 = new Produto("Lápis Preto",
    "Lápis preto nº 6",
    3.20,
    1000);

    $produto2 = new Produto("Caixa de Lápis de Cor",
    "Caixa com 12 unidades",
    20,
    100);

    $fornecedor = new Fornecedor("Faber Castell",
    "00.000.0001/000-01",
    "(14)36261514",
    array($produto1, $produto2));

    echo "<pre>";
    var_dump ($fornecedor);
    echo "</pre";
?>