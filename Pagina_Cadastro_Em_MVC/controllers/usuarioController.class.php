<?php
	class usuarioController
	{
		public function listar()
		{			
			//mostrar os dados na views
			require_once "views/listar_usuarios.php";
		}
		public function inserir()
		{
			echo "Estou no inserir";
			if(empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["senha"]))
			{
				require_once "views/cadastro.php";
			} else {
				//conectar ao BD
				require_once "inc/config.php";
				$conexao = Conexao::abrir();
				//inserir os dados
				$sql = "INSERT INTO usuarios (nome, email, senha) VALUES(?, ?, ?)";
				$comando = $conexao->prepare($sql);
				$comando->bindParam(1, $_POST["nome"]);
				$comando->bindParam(2, $_POST["email"]);
				$comando->bindParam(3, $_POST["senha"]);
				$comando->execute();
				//redirecionar para a listagem
				header("Location: index.php?controle=usuarioController&metodo=listar");
				//fechar a conexão
				Conexao::fechar();
			}
		}
		public function alterar()
		{
			echo "Estou no alterar";
		}
		public function excluir()
		{
			echo "Estou no excluir";
		}
	}
?>