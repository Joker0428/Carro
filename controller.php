<?php 
    session_start();

   //capturando os dados da url
    //ex.: admin/departamento/cadastrar/listar
    //model=departamento & action-listar
    require "incluedes/autoload.php";
    
    $router = $_GET['model'].$_GET['action'];
    $view = "";

    $url = "http://localhost/carro";

    switch($router){
    //router = departamentolistar

        case 'servicocadastrar':
           
            $obj = new \LOJA\API\ServicoCadastrar;
            $msg = $obj->msg;
            $view = "form-servico.php";
            break;

        case 'servicolistar':
            \LOJA\incluedes\Seguranca::restritoAdm();

            $obj = new \LOJA\API\ServicoListar;
            $lista = $obj->lista;
            $view = "lista-servico.php";
            break;

        case 'departamentovizualizar':
            $obj = new \LOJA\API\DepartamentoVizualizar;
            $departamento = $obj->dados;
            $view = "vizualizar-departamentp-id.php";
            break;

        case 'clientelistar':
            $obj = new \LOJA\API\ClienteListar;
            $lista = $obj->lista;
            $view = "lista-cliente.php";
            break;
            
        case 'clientecadastrar':
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
            break;

        case 'clientevizualizar':
            $obj = new \LOJA\API\ClienteVizualizar;
            $cliente = $obj->dados;
            $view = "vizualizar-cliente-id.php";
            break;
        
        
        case 'produtocadastrar':
            $obj = new \LOJA\API\ProdutoCadastrar;
            $msg = $obj->msg;

            $obj2 = new \LOJA\API\ServicoListar;
            $lista = $obj2->lista;

            $view = "form-produto.php";
            break;
            
        case 'usuariocadastrar':
            $obj = new \LOJA\API\UsuarioCadastrar;
            $msg = $obj->msg;
            $view = "form-usuario.php";
            break;

        case 'usuariolistar':
            $obj = new \LOJA\API\UsuarioListar;
            $lista = $obj->lista;
            $view = "lista-usuario.php";
            break;

        case 'usuariovizualizar':
            include "API/buscar-usuario-id.php";
            $view = "vizualiza-usuario-id.php";
            break;

            case 'produtolistar':
            $obj = new \LOJA\API\ProdutoListar;
            $lista = $obj->lista;
            $view = "lista-produto.php";
            break;

        case 'fornecedorcadastrar':
            include "API/cadastrar-fornecedor.php";
            $view = "form-fornecedor.php";
            break;

        case 'fornecedorlistar':
            include "API/lista-fornecedor.php";
            $view = "lista-fornecedor.php";
            break;

        case 'loginadm':
            $obj = new \LOJA\API\UsuarioLogar;
            $msg = $obj->msg;
            $view = "form-login-adm.php";
            break;
    
        case 'paineladm':
            $view = "painel-adm.php";
            break;

        case 'painellogoff':
            $obj = new \LOJA\API\UsuarioLogoff;
            $view = "form-login-adm.php";
            break;

       
        default:
            $view = "form-cliente.php";
        break; 
    }

    
    include "view/{$view}";

?>

