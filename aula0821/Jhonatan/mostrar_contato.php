<?php
	if($_GET)
	{
		require_once "Cliente.class.php";
		
		$obj = new Cliente(0, $_GET["nome"], $_GET["sobrenome"], $_GET["cpf"]);
		
		$conect = $obj->conexao();

		$msg  = $obj->inserir($conect);

		echo $msg;

	}
	else
	{
		header("location:index.html");
	}
?>