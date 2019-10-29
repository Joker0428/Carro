<?php

    include 'model/conexao.php';
    include 'model/cliente.class.php';
    include 'dao/cliente.dao.php';

    if($_POST){

        try{
            $obj = new Cliente();
            $obj->setNome($_POST['nome']);
            $obj->setEndereco($_POST['endereco']);
            $obj->setCep($_POST['cep']);
            $obj->setEmail($_POST['email']);
            $obj->setCpf($_POST['cpf']);

            $DAO = new DAOCliente();
            $msg = $DAO->cadastrar($obj);

        }catch(Exception $e){
            $msg = $e->getMenssagem();
        }
    }

?>
