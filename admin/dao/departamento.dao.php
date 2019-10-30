<?php

class DAODepartamento{
    public function cadastrar(Departamento $departamento2){
        $sql = "INSERT INTO departamento2
        VALUES (default, :nome)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $departamento2->getNome());
        $con->execute();

        return "Cadastro o departamento com Sucesso";

    }
    public function listaDepartamento(){
        $sql = "SELECT * FROM departamento2";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($departamento2 = $con->fetch(PDO::FETCH_ASSOC)){
            $lista[] = $departamento2;
        }
        
        return $lista;
        
    }
}


?>
