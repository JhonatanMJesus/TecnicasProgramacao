<?php
    //É preciso adicionar um novo atributo para fazer a ligação 
    // - como uma chave estrangeira
    //Se for bilateral nós colocamos o atributo nas duas tabelas
    //No diagrama/modelo não vai ter esse atributo
    //Neste atributo são salvos objetos
    //Este atributo é um array para poder guardar vários objetos

    class Produto {
        public function __construct(
            private string $nome = "",
            private string $descricao = "",
            private float $preco = 0.00,
            private int $estoque = 0,
            private array $fornecedor = array()){}
        }




?>