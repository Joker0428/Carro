<?php
 namespace LOJA\API;

  class UsuarioLogoff{

       function __construct(){
           unset($_SESSION['usuarioid']);
           unset($_SESSION['usuarionome']);
           unset($_SESSION);
           session_destroy();
           header("location: http://localhost/carro/login/adm");
        }
    }
?>