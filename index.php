<!doctype html>
<html lang="pt-br">

<div class="container">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="valida.php">
      <br><br><br>
      <img class="mb-4" src="Imagens/Telefone.jpg" alt="" width="72" height="72">
      <h3>PRJ SYSTEM</h5>
      <h1 class="h3 mb-3 font-weight-normal">Log-in</h1>
      
      <?php
        if(isset($_GET['msg'])){

          $msg = $_GET['msg'];

          switch($msg){
            case 1: 
      ?>

      <div class="message">
        <div class="alert alert-danger">
          <a href="index.php" class=close data-dismiss="alert">&times</a>
          Email ou senha errados, tente outra vez!
        </div>
      </div>

      <?php
          break;
        }
      }
      ?>
      
      <br>
        <div class="col">
          <label for="email">E-mail:</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="">
        </div>
      <br>
        <div class="col">
          <label for="senha">Senha:</label>
          <input type="text" class="form-control" id="senha" name="senha" placeholder="">
        </div>
      <br><br>
      <small>Não possui uma conta? Cadastre-se no link abaixo</small>
      <a href="cadastro_cliente.php"><button  type="button" class="btn btn-secondary btn-lg btn-block">Cadastre-se</button></a>
      <br>
      <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
    </form>

</div>


<?php
  include('footer.php')
?>