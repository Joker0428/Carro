<?php

    namespace LOJA\Actions;
    use LOJA\Model\Departamento;
    use LOJA\DAO\DAODepartamento;

    class DepartamentoCadastrar{

        function __construct(){

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
    }
}

?>