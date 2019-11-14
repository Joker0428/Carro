<?php
 namespace LOJA\API;

  class UsuarioLogoff{

       function __contruct(){
           unset($_SESSION['usuarioid']);
           unset($_SESSION['usuarionome']);
           unset($_SESSION);
           header("location: http://localhost/carro/painel/adm");
        }
    }
?>