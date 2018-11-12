<?php
	include('header.php');
?>


	<div class="container">

		<br><br>
		<h1><b>CADASTRO DE TÉCNICOS</b></h1>

		<form>

				<br><br>
				  <div class="form-row">
				    <div class="col">
				      <label for="inputnome">Nome:</label>
				      <input type="text" class="form-control" placeholder="Informe o nome">
				    </div>
				    <div class="col">
				      <label for="inputlogin">Log In:</label>
				      <input type="text" class="form-control" placeholder="Informe o log-in">
				    </div>
				  </div>
				  <br>
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputPassword">Senha:</label>
			      <input type="password" class="form-control" id="inputPassword" placeholder="Informe a sua senha">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword">Repita a senha:</label>
			      <input type="password" class="form-control" id="inputPassword2" placeholder="Informa a senha novamente">
			    </div>
			</div>
			<div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputCpf">CPF:</label>
			    <input type="text" class="form-control" id="inputCpf" placeholder="XXX.XXX.XXX-XX">
			  </div>
			  <div class="form-group col-md-6">
			    <label for="inputFone">Telefone:</label>
			    <input type="text" class="form-control" id="inputFone" placeholder="(XX) XXXX-XXXX">
			  </div>
			  <div class="col">
			    <label for="inputEmail">Email:</label>
			    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email@email.com">
			  </div>
			</div>
				<br><br>
				<a href="tecnicos.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Cancelar</button></a>
				<br>
				<button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>

		</form>

	</div>


<?php
	include('footer.php');
?>