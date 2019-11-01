<?php 
    //capturando os dados da url
    //ex.: admin/departamento/cadastrar/listar
    //model=departamento & action-listar
    $router = $_GET['model'].$_GET['action'];
    $view = "";

    switch($router){
    //router = departamentolistar

        case 'departamentocadastrar':
            include "actions/cadastrar-depar.php";
            $view = "form-departamento.php";
            break;

        case 'departamentolistar':
            include "actions/lista-departamento.php";
            $view = "lista-departamento.php";
            break;

        default:
            echo "default";
        break; 
    }

    include "view/header.php";
    include "view/{$view}";
    include "view/mensagem.php";
    include "view/footer.php";
?>

