<!doctype html>
<html lang="pt-br">
  <head>
  <link rel='shortcut icon' href='carro.png'>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Meu estilo-->
    <link rel="stylesheet" href="../css/estilo.css">
    <title></title>
  </head>
  <body class="bb">

   

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo $url;?>/cliente/listar">Lista de Clientes</a>
          <a class="dropdown-item" href="<?php echo $url;?>/cliente/cadastrar">Cadastro de cliente</a>
  
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="ctrl-usuario-lista.php">Lista de usuarios</a>
          <a class="dropdown-item" href="<?php echo $url;?>/cliente/cadastrar">Cadastro de usuario</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Serviços
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="<?php echo $url;?>/servico/listar">Serviço Lista</a>
          <a class="dropdown-item" href="<?php echo $url;?>/servico/cadastrar">Serviço Cadastrar</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item disabled" href="ctrl-produto-lista.php">Lista dos Produtos</a>
          <a class="dropdown-item " href="ctrl-cadastro-produto.php">Registrar Produto</a>
          
          
        </div>
      </li>
    </ul>
  </div>
  
</nav>
<ul class="nav justify-content-center ll">
  <li class="nav-item">
    <a class="nav-link active" href="#">Peças</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Serviços</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contato</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<div class="container">