<?php

    include 'model/conexao.php';
    include 'model/departamento.class.php';
    include 'dao/departamento.dao.php';

    if($_POST){

        try{
            $obj = new Departamento();
            $obj->setNome($_POST['nome']);
           

            $DAO = new DAODepartamento();
            $msg = $DAO->cadastrar($obj);

        }catch(Exception $e){
            $msg = $e->getMessage();
        }
    }

?>