<?php
    class CategoriasDAO extends Conexao {
        public function __construct(
        ){
            parent::__construct();
        }

        public function inserir($categoria) {
            $sql = "INSERT INTO categorias (descritivo) VALUES (?)";
            try {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $categoria->getDescritivo());
                $stm->execute();
                $this->db = null;
                return "Categoria inserida com sucesso";
            } catch(PDOException $e) {
                echo $e->getCode();
                echo $e->getMessage();
                die();
            }
        }

        public function alterar() {

        }

        public function excluir() {
        //Exclusão física
            
        }

        public function buscar_todas() {
            $sql = "SELECT * from categorias";
            try{
                $stm = $this->db->prepare($sql);
                $stm->execute();
                $this->db = null;
                //fecha a conexao
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch(PDOException $e) {
                echo $e->getCode();
                echo $e->getMessage();
                die();
            }
        }

        public function buscar_uma() {

        }
    }
?>