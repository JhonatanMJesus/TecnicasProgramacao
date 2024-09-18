<?php
	class Cliente
	{
		//Atributos
		
		public function __construct(
			public int $id_cliente = 0,
			public string $nome = "",
			public string $sobrenome = "",
			public string $cpf = ""){}
		
		//métodos
		public function inserir($conexao)
		{
			$sql = "INSERT INTO Cliente (nome_cliente, sobrenome_cliente, cpf_cliente) VALUES (?,?,?)";
			$stm = $conexao->prepare($sql);
			$stm->bindValue(1, $this->nome);
			$stm->bindValue(2, $this->sobrenome);
			$stm->bindValue(3, $this->cpf);
			$stm->execute();
			return "Cliente cadastrado com sucesso";
		}
		public function conexao()
		{
			$parametros = "mysql:host=localhost;dbname=aula0821;charset=utf8mb4";
			$conexao = new PDO($parametros, "root", "");
			return $conexao;
		}
	}
		//fim da classe
?>