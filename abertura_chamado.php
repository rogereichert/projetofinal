<?php
  include('header.php');
?>

<!--
  CABEÇALHO DO ADMIN
  -->

<div class="container">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="cliente.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="abertura_chamado.php">Abrir Novo Chamado<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="historico_cliente.php">Histórico de Chamados<span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-3">
          <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
          <button type="button" class="btn btn-dark">Log Out</button>
      </div>
    </nav>

</div>

<!--
  FIM DO CABEÇALHO ADMIN
  -->

<div class="container">

<br><br>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Serial do Equipamento:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o nº de Serial do Equipamento">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Categoria do Equipamento:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" disabled="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Marca do Equipamento:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" disabled="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Modelo do Equipamento:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" disabled="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Data de Abertura</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" disabled="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descreva o Problema:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>

    
</div>

<!--
  INICIO DO CORPO DA PAGINA DE ADMIN
  -->


<!--
  FIM DO CORPO DA PAGINA DE ADMIN
  -->

<!--
  INICIO DE NAVEGAÇÃO DE PÁGINAS
  -->
    <div class="container">

        <a href="cliente.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Cancelar</button></a>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Abrir Chamado</button>

    </div>

<!--
  FIM DA NAVEGAÇÃO DE PÁGINAS
-->

<?php
  include('footer.php');
?>