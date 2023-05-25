<?php

class ProdutoDAO{
    
    public function insert(Produto $obj){
        try{
            $sql = "insert into produtos values(:id,"
                    . ":nome,:descricao,:preco,"
                    . ":estoque)";
        
            //abre a conexão com o banco de dados
            $db = $this->getDB();
            //prepara a ação a ser executada no banco de dados
            $stm = $db->prepare($sql);
            /*referencia os valores que serão inseridos 
            na tabela produtos*/
            $stm->BindValue(":id",$obj->getId());
            $stm->BindValue(":nome",$obj->getNome());
            $stm->BindValue(":descricao",$obj->getDescricao());
            $stm->BindValue(":preco",$obj->getPreco());
            $stm->BindValue(":estoque",$obj->getEstoque());
            /*executa a ação no banco de dados
             * e verifica se a ação foi bem sucedida ou
             * não.
             */
            if($stm->execute() > 0){
                return true;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return false;
    }

    public function update(Produto $obj){
        try{
            //situação do livro recebe 1 pra estar ativo
            $sql = "update produtos set nome=:nome,"
                    . "descricao=:descricao,preco=:preco,"
                    . "estoque=:estoque where id=:id";
            $db = $this->getDB();
            $stm = $db->prepare($sql);
            $stm->BindValue(":nome",$obj->getNome());
            $stm->BindValue(":descricao",$obj->getDescricao());
            $stm->BindValue(":preco",$obj->getPreco());
            $stm->BindValue(":estoque",$obj->getEstoque());
            $stm->BindValue(":id",$obj->getId());
            
            if($stm->execute() > 0){
                return true;
            }
            
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        return false;
    }
    
    public function adicionaImagem($imagem, $id){
        $sql = "update produtos set imagem = '$imagem' where id = $id";
        $db = $this->getDB();
        $stm = $db->prepare($sql);
        if($stm->execute() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function consultaProduto($param){
        $sql = "";
        if(is_numeric($param)){
            $sql = "select * from produtos where id = $param";
        }else{
            $sql = "select * from produtos where nome like '%".$param."%'";
        }
        $db = $this->getDB();
        $stm = $db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listaProdutos(){
        $sql = "select * from produtos";
        $db = $this->getDB();
        $stm = $db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    private function getDB(){
        return Connection::getConnection();
    }
}
