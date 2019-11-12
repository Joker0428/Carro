<?php
  namespace LOJA\API;
  
  use LOJA\Model\Produto;
  use LOJA\Model\Departamento;
  use LOJA\DAO\DAOProduto;

  class ProdutoCadastrar{
    public $msg;

    function __construct(){
      if($_POST){
  try{
    //criamos um objeto prudoto
      $produto = new Produto();
      $produto->setNome($_POST['nome']);
      $produto->setPreco($_POST['preco']);
      $produto->setDescricao($_POST['descricao']);

      //cria um objeto departamento
      $departamento = new Departamento();
      $departamento->setId($_POST['departamento']);

      //definindo o departamento para o produto
      $produto->setDepartamento($departamento);

      $DAO = new DAOProduto();
      $this->msg = $DAO->cadastrar($produto);
      
    }catch(Exception $e){
      $this->msg = $e->getMessage();
    }
  }
}
}
?>