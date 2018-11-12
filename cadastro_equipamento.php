<?php
	include('header.php');
?>


	<div class="container">

		<br><br>
		<h1><b>CADASTRO DE EQUIPAMENTOS</b></h1>

		<form>

				<br><br>
				  <div class="form-row">
				    <div class="col">
				      <label for="inputNomeEquip">Nome:</label>
				      <input type="text" class="form-control" placeholder="Informe o nome">
				    </div>
				    <div class="col">
				      <label for="inputCategoria">Categoria:</label>
				      <input type="text" class="form-control" placeholder="Informe a categoria">
				    </div>
				  </div>
				  <br>
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputMarca">Marca:</label>
			      <input type="text" class="form-control" id="inputMarca" placeholder="Informe a marca">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputSerial">Serial:</label>
			      <input type="text" class="form-control" id="inputPassword2" placeholder="Informe o nº do Serial">
			    </div>
			</div>
			<div class="form-row">
			  <div class="col">
			    <label for="inputModelo">Modelo:</label>
			    <input type="text" class="form-control" id="inputModelo"  placeholder="Informe o Modelo">
			  </div>
			</div>
				<br><br>
				<a href="equipamentos.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Cancelar</button></a>
				<br>
				<button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>

		</form>

	</div>


<?php
	include('footer.php');
?>