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

<div class="container">

<br><br>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Serial do Equipamento:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" disabled="">
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
        <label for="exampleFormControlInput1">Data de Abertura:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" disabled="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Problema Descrito:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled=""></textarea>
      </div>
    </form>

    
</div>

  <div class="container">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Finalizar Chamado</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Finalização de Chamado</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Feedback do Técnico:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Solução:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </div>
      </div>

  </div>


<?php
  include('footer.php');
?>