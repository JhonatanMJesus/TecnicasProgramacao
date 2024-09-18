<?php
    //É preciso adicionar um novo atributo para fazer a ligação 
    // - como uma chave estrangeira
    //Se for bilateral nós colocamos o atributo nas duas tabelas
    //No diagrama/modelo não vai ter esse atributo
    //Neste atributo são salvos objetos
    //Este atributo é um array para poder guardar vários objetos

    class Produto {
        //Fracamente tipada
        public function __construct(
            private string $nome = "",
            private string $descricao = "",
            private float $preco = 0.00,
            private int $estoque = 0,
            private $categoria = null){}
            //private array $fornecedor = array()){}

            //Fortemente tipada
            /*public function __construct(
                private string $nome = "",
                private string $descricao = "",
                private float $preco = 0.00,
                private int $estoque = 0,
                private Categoria $categoria = new Categoria()){}*/
        
        public function getNome() {
            return $this->nome;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function getEstoque() {
            return $this->estoque;
        }

        public function getFornecedor() {
            return $this->fornecedor;
        }

        public function setNome($novo_nome) {
            $this->nome=$novo_nome;
        }

        public function setDescricao($nova_descricao) {
            $this->descricao=$nova_descricao;
        }

        public function setPreco($novo_preco) {
            $this->perco=$novo_preco;
        }

        public function setEstoque($novo_estoque) {
            $this->estoque=$novo_estoque;
        }

        public function getCategoria() {
            return $this->categoria;
        }

    }




?>