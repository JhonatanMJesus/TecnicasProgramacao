<?php
    require_once "header.php";
?>
<div class="content">
    <div class="container">
        <h1>Categorias</h1>
        <form action="/lojamvc/inserir_categoria" method="post">
            <lable for="descritivo">Descritivo:</lable>
            <input type="text" name="descritivo" id="descritivo" placeholder="Digite o nome da categoria" required>
            <div style="color: red;font-size: 11px"><?php echo $msg; ?></div>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
</div>
</body>
</html>