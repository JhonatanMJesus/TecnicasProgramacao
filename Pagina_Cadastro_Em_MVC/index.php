<?php

	include "inc/config.php";

	if($_GET)
	{
		//outras rotas http://localhost/exemploMVC/index.php?controle=usuarioController&metodo=listar
		
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		require_once "controllers/" . $controle . ".class.php"; 
		
		$obj = new $controle();
		$obj->$metodo();
	}
	else
	{
		//rota inicial http://localhost/exemploMVC/index.php
		require_once "controllers/inicioController.class.php";
		$obj = new inicioController();
		$obj->inicio();
	}
	
	
	
	
?>