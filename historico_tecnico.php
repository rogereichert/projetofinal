<?php
  include('header.php');
?>

<!--
  CABEÇALHO DO ADMIN
  -->

<div class="container">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="tecnico.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="historico_tecnico.php">Consultar Histórico<span class="sr-only">(current)</span></a>
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

<!--
  INICIO DO CORPO DA PAGINA DE ADMIN
  -->
<br><br>
<div class="container">
  <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Numero de série:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o Nº de série do Equipamento">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nome do cliente:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o nome do cliente">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nome do técnico:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o nome do técnico">
      </div>
    </form>
</div>
<!--
  FIM DO CORPO DA PAGINA DE ADMIN
  -->

<!--
  INICIO DE NAVEGAÇÃO DE PÁGINAS
  -->
    <div class="container">
      <br>
       <button type="button" class="btn btn-primary">Buscar</button>
    </div>

<!--
  FIM DA NAVEGAÇÃO DE PÁGINAS
-->

<?php
  include('footer.php');
?>