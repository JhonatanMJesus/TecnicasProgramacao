<?php
#################################################################################
# Padrão MVC                                                                    #
# M - Model; V - View; C - Controller                                           #
# Dividiremos nossa aplicação em 3 pastas                                       #
# Na pasta model - colocaremos nossas classes que trarão os                     #
# modelos para instanciar objetos no banco de dados                             #
# Na pasta View - colocaremos os arquivos que mostra ou solicita informações    #
# para o usuário                                                                #
# Na pasta controller - colocaremos os arquivos que controlam as rotas de       #
# requisições. Precisamos ter 1 controlador para cada classe.                   #
# O MVC facilita com a distribuição de funções no trabalho, podendo colocar     #
# pessoas qualificadas em suas posições. Na pasta model, trabalhará os          #
# especialistas em banco de dados. Na pasta view, trabalhará especialistas em   #
# Front-end. Na pasta controller, trabalhará especialistas em back-end.         #
#################################################################################
    if($_GET){
        #Outras rotas http://localhost/index.php?controle=usuarioController&metodo=listar
        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];
        require_once "controllers/" . $controle . ".class.php";
        #Resultado = controller/usuarioController.class.php
        $obj = new $controle();
        $obj->$metodo();
    } else {
        #Rota inicial http://localhost/jhonatan/MVC/index.php
        require_once "controllers/inicioController.class.php";
        $obj = new inicioController();
        $obj -> inicio();
    }

?>