<?php
    include "model/conexao.php";
    include "dao/departamento.dao.php";

        $obj = new DAODepartamento();

        $lista = $obj->listaDepartamento();

?>