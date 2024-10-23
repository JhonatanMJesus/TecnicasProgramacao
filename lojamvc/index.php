<?php
    require_once "rotas.php";

    //Autoload das classes
    spl_autoload_register(function($class) {
        if(file_exists("controllers/".$class.".php")) {
            require_once "controllers/".$class.".php";
        } else if(file_exists("models/".$class.".php")) {
            require_once "models/".$class.".php";
        } else {
            die("Classe {$class} não encontrada");
        }
    });

    //Tratar a requisição
    $nomeRota = parse_url($_SERVER["REQUEST_URI"])["path"];
    $nomeRota = substr($nomeRota, strpos($nomeRota, "/", 1));
    
    $route->verificarRota($_SERVER["REQUEST_METHOD"], $nomeRota);
?>