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
              <th scope="col">Nome</th>
              <th scope="col">CPF</th>
              <th scope="col">Telefone</th>
              <th scope="col">E-Mail</th>
              <th scope="col">Log-in</th>
              <th scope="col">Senha</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              
              <td>0001</td>
              <td>Rodrigo Justo</td>
              <td>025.658.951.97</td>
              <td>(55)1369-7895</td>
              <td>email@hotmail.com</td>
              <td>Rodrigow</td>
              <td>sauidhsaiuhdsa</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              
              <td>0002</td>
              <td>Alan Moraes</td>
              <td>134.258.157.70</td>
              <td>(51)4653-4852</td>
              <td>email@gmail.com</td>
              <td>AlanMora</td>
              <td>dsaihduisa</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              
              <td>0003</td>
              <td>Tadeu Lima</td>
              <td>758.157.467.35</td>
              <td>(58)7861-1598</td>
              <td>email@yahoo.com</td>
              <td>Tadeoz</td>    
              <td>dnsaidhuisa</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>        
            </tr>
            <tr>
              
              <td>0004</td>
              <td>Suellen Barros</td>
              <td>167.135.791.64</td>
              <td>(56)1359-6578</td>
              <td>email@live.com.br</td>
              <td>SuuhSuuh</td>
              <td>22915945</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              
              <td>0005</td>
              <td>Roger Reichert</td>
              <td>153.759.258.26</td>
              <td>(55)1265-1489</td>
              <td>email@bol.com.br</td>
              <td>Colorado</td>
              <td>254814a</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
            <tr>
              
              <td>0006</td>
              <td>William Marques</td>
              <td>349.761.167.15</td>
              <td>(51)3258-4598</td>
              <td>email@terra.com.br</td>
              <td>William845</td>
              <td>15987789aash</td>
              <td><button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
          </tbody>
        </table>

    </div>

<!--
  FIM DO CORPO DA PAGINA DE ADMIN
  -->


<?php
  include('footer.php');
?>