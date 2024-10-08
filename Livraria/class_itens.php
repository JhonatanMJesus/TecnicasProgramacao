<?php
    class Itens{
        public function __construct(
            private string $data_devolucao = "",
            private array $livro = array()
        ){}

        //Gets
        public function getDataDevolucao(){
            return $this->data_devolucao;
        }

        public function getLivro(){
            return $this->livro;
        }

        //Sets
        public function setDataDevolucao($data_devolucao){
            $this->data_devolucao = $data_devolucao;
        }

        public function setLivro($livro){
            $this->livro[] = $livro;
        }
    }
?>