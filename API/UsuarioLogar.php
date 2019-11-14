<?php

    namespace LOJA\API;
    use LOJA\DAO\DAOUsuario;
    use LOJA\Model\Usuario;

    class UsuarioLogar{
        public $msg;
    
        function __construct(){

    if($_POST){

        try{
            $obj = new Usuario();
            $obj->setNome($_POST['nome']);
            $obj->setSenha($_POST['senha']);
           

            $DAO = new DAOUsuario();
            $result= $DAO->buscaPorNomeSenha($obj);

            if($result){
                //GUARDO AS INFORMAÇÕES DO USARIO NA SESSÃO
                $_SESSION['usuarioid'] = $result['id'];
                $_SESSION['usuarionome'] = $result['nome'];

                header("location: http://localhost/carro/painel/adm");

            }else{
                $this->msg = "Usuário/Senha inválidos";
            }

        }catch(Exception $e){
            $this->msg = $e->getMessage();
        }
    }
    }
 }

?>