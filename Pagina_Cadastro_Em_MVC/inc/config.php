<?php
    class Conexao
    {
        public static function abrir()
        {
            $conexao = new PDO("mysql:host=localhost;dbname=lojamvc", "root", "");
            return $conexao;
        }

        public static function fechar()
        {
            $conexao = null;
        }
    }
?>