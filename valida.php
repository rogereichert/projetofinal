<?php 
	
	require_once("config.php");

	if(empty($_POST['email'])){

		header("Location: index.php");

	}else{

		if (isset($_POST['email']) && isset($_POST['senha'])){

		session_start();

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$c = new Cliente();
		$c->loadByCliente($email, $senha);

	
	}
	}

