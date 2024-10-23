<?php
    require_once "header.php";
    require_once "controllers/config.php";

    $sql = "SELECT * FROM produtos";
    $result = new Config;
    $result->conectar();
    $resultado = $result->execute($sql);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Preço</th>";
    echo "<th>Descrição</th>";
    echo "<th>Categoria</th>";
    echo "<th>Editar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";

    foreach($resultado->query($sql) as $row) {
        echo "<tr>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['preco']."</td>";
        echo "<td>".$row['descricao']."</td>";
        echo "<td>".$row['categoria']."</td>";
        echo "<td><a href='editar.php?id=".$row['id']."'>Editar</a></td>";
        echo "<td><a href='excluir.php?id=".$row['id']."'>Excluir</a></td>";
        echo "</tr>";
    }
?>