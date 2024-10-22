<?php
	class inicioController
	{
		public function inicio()
		{
			echo "Estou na classe inicioController e executei o método inicio";
			require_once "views/menu.html";
		}
	}
?>