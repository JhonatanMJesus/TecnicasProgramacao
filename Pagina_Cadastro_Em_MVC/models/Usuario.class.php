<?php
	class Usuario
	{
		public function __construct(
			private int $id = 0,
			private string $nome = "",
			private string $email = "",
			private string $senha = ""
		)
		{}
		
		public function buscar_todos_usuarios()
		{
			require_once "inc/config.php";
			$conexao = Conexao::abrir();
			$sql = "SELECT * FROM usuarios";
			$comando = $conexao->prepare($sql);
			$comando->execute();
			$retorno = $comando->fetchAll();
			Conexao::fechar();
			return $retorno;
		}

		public function getNome()
		{
			return $this->nome;
		}
	}
?>