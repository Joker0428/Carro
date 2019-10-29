<?php

    include 'admin/model/conexao.php';
    include 'admin/model/cliente.class.php';
    include 'admin/dao/cliente.dao.php';

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
