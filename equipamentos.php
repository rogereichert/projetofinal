<?php
  include('header.php');
?>

<!--
  CABEÇALHO DO ADMIN
  -->

<div class="container">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="admin.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="relatorio.php">Relatórios<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="equipamentos.php">Equipamentos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="tecnicos.php">Técnicos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="clientes.php">Clientes<span class="sr-only">(current)</span></a>
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

    <div class="container">
      
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome Equipamento</th>
              <th scope="col">Categoria</th>
              <th scope="col">Marca</th>
              <th scope="col">Modelo</th>
              <th scope="col">Serial</th>
              <th scope="col">Data entrada</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              
              <td>0001</td>
              <td>Impressora</td>
              <td></td>
              <td>Lexmark</td>
              <td>2200</td>
              <td>123789963.147</td>
              <td>12/05/2018</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              
              <td>0002</td>
              <td>Desktop</td>
              <td></td>
              <td>HP</td>
              <td>Compaq 3005</td>
              <td>12369877.65498</td>
              <td>05/12/2019</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              
              <td>0003</td>
              <td>Notebook</td>
              <td></td>
              <td>DELL</td>
              <td>Turbo 900</td>
              <td>1597.45621.33</td>
              <td>30/05/2018</td>    
              <td><button type="button" class="btn btn-danger">Excluir</button></td>        
            </tr>
            <tr>
              
              <td>0004</td>
              <td>Desktop</td>
              <td></td>
              <td>Positivo</td>
              <td>7050 HD</td>
              <td>123456789.789456123.123456789</td>
              <td>10/02/2019</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              
              <td>0005</td>
              <td>Impressora</td>
              <td></td>
              <td>HP</td>
              <td>6005</td>
              <td>4569687.465487.654789</td>
              <td>01/09/2018</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              
              <td>0006</td>
              <td>Modem</td>
              <td></td>
              <td>ZTE</td>
              <td>00078</td>
              <td>1236.4451.55.1</td>
              <td>28/11/2018</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
          </tbody>
        </table>

    </div>

<!--
  FIM DO CORPO DA PAGINA DE ADMIN
  -->

<div class="container">
  
  <a href="cadastro_equipamento.php"><button type="button" class="btn btn-primary">Cadastrar Novo Equipamento</button></a>

</div>



<?php
  include('footer.php');
?>