<?php
    require_once "class_filme.php";
    require_once "class_papel.php";
    require_once "class_ator.php";

    $ator1 = new Ator("Brad Pitt");
    $filme1 = new Filme("Trem Bala");
    $papel1 = new Papel("DaVinci", $filme1, $ator1);

    // echo "<pre>";
    // var_dump($papel1);
    // echo "</pre>";

    echo "Nome do Papel: {$papel1->getDescritivo()}<br />";
    echo "Nome do Ator: {$papel1->getAtor()->getNome()}<br />";
    echo "Nome do Filme: {$papel1->getFilme()->getTitulo()}<br />";
?>