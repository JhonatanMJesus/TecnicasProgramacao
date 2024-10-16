<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Usuários</h1>
    <a href="index.php?controle=usuarioController&metodo=inserir">Novo Usuário</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach($retorno as $dado) {
                echo "  <tr>
                            <td>$dado</td>
                            <td> <a href='index.php?controle=usuarioController&metodo=alterar'>Alterar</a></td>
                            <td> <a href='index.php?controle=usuarioController&metodo=excluir'>Excluir</a></td>
                        </tr>";
            }
        ?>
    </table>
    
</body>
</html>