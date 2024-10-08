<?php
    class Emprestimo {
        public function __construct(
            private string $data_emprestimo = "",
            private $aluno = null,
            private array $itens = array()
        ){}

        //Gets
        public function getDataEmprestimo(){
            return $this->data_emprestimo;
        }

        public function getAluno(){
            return $this->aluno;
        }

        public function getItens(){
            return $this->itens;
        }

        //Sets
        public function setDataEmprestimo($data_emprestimo){
            $this->data_emprestimo = $data_emprestimo;
        }

        public function setAluno($aluno){
            $this->aluno = $aluno;
        }

        public function setItens($itens){
            $this->itens[] = $itens;
        }
    }
?>