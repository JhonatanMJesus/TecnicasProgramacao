<?php
    require_once "header.php";
?>
<div class="content">
    <div class="container">
        <h1>Categoria</h1>
        <form action="/lojamvc/editar_categoria" method="post">
            <input type="hidden" name="id_categoria" value=<?php echo $retorno[0]->id_categoria; ?>>
            <lable for="descritivo">Descritivo:</lable>
            <input type="text" name="descritivo" id="descritivo" value="<?php echo $retorno[0]->descritivo; ?>" placeholder="Digite o nome da categoria">
            <div style="color: red;font-size: 11px"><?php echo $msg; ?></div>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
</div>
</body>
</html>