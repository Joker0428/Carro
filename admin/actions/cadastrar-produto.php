<?php
  include "../model/conexao.php";
  include "../model/departamento.class.php";
  include "../model/produto.class.php";
  include "../dao/produto.dao.php";
    
  try{
    //criamos um objeto prudoto
      $produto = new Produto();
      $produto->setNome('Computador');
      $produto->setPreco('1200');
      $produto->setDescricao('Intel Core I3');

      //cria um objeto departamento
      $departamento = new Departamento();
      $departamento->setId(6);

      //definindo o departamento para o produto
      $produto->setDepartamento($departamento);

      $DAO = new DAOProduto();
      $msg = $DAO->cadastrar($produto);
      echo $msg;
  }catch(Exception $e){
      $msg = $e->getMessage();
      echo $msg;
  }
?>