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

<!--
  INICIO DO CORPO DA PAGINA DE ADMIN
  -->

    <div class="container">
      
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Título Chamado</th>
              <th scope="col">Data abertura</th>
              <th scope="col">Ultima atualização</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              
              <td>Problema 1</td>
              <td>10/10/2018</td>
              <td>12/10/2018 às 13:52</td>
              <td>Concluído</td>
            </tr>
            <tr>
              
              <td>Problema 2</td>
              <td>23/10/2018</td>
              <td>24/10/2018 às 17:25</td>
              <td>Concluído</td>
            </tr>
            <tr>
              
              <td>Problema 3</td>
              <td>05/06/2018</td>
              <td>10/06/2018 às 09:53</td>
              <td>Concluído</td>      
            </tr>
            <tr>
              
              <td>Problema 4</td>
              <td>28/07/2018</td>
              <td>05/09/2018 às 12:57</td>
              <td>Concluído</td>
            </tr>
            <tr>
              
              <td>Problema 5</td>
              <td>01/01/2019</td>
              <td>02/01/2018 às 08:00</td>
              <td>Concluído</td>
            </tr>
            <tr>
              
              <td>Problema 6</td>
              <td>02/05/2017</td>
              <td>30/05/2017 às 22:35</td>
              <td>Concluído</td>
            </tr>
          </tbody>
        </table>

    </div>

<!--
  FIM DO CORPO DA PAGINA DE ADMIN
  -->

<!--
  INICIO DE NAVEGAÇÃO DE PÁGINAS
  -->
    <div class="container">

      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
        </ul>
      </nav>

    </div>

<!--
  FIM DA NAVEGAÇÃO DE PÁGINAS
-->

<?php
  include('footer.php');
?>