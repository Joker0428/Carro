<?php 
namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAODepartamento;

    class DepartamentoVizualizar{

        public $dados;
        public function __construct(){
            try{
                $DAO = new DAODepartamento();
                $this->dados = $DAO->buscaPorId($_GET['id']);
            
            }catch(\Exception $e){
                $this->dados = $e->getMessage();
            }
        }
    }
?>