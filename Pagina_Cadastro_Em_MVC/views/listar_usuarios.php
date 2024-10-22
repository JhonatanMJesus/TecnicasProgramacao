<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Listar Usuários</title>
	</head>
	<body>
		<h1>Usuários</h1>
		<a href="index.php?controle=usuarioController&metodo=inserir">Novo Usuário</a>
		<table border="1">
			<tr>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
			<?php
				require_once "models/Usuario.class.php";
				$usuario = new Usuario();
				$usuarios = $usuario->buscar_todos_usuarios();
				foreach($usuarios as $dado)
				{
					echo "<tr>
						  <td>{$dado['nome']}</td>
						  <td>
						  <a href='index.php?controle=usuarioController&metodo=alterar'>Alterar</a>
						  <a href='index.php?controle=usuarioController&metodo=excluir'>Excluir</a>
						  </td>
						  </tr>";
				}
			?>


		</table>
	</body>
</html>