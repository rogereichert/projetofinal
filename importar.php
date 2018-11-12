<?php 

	$conn = new mysqli("localhost", "root", "", "sistema");
	mysqli_set_charset($conn, "utf8");

	$arquivo = $_FILES["file"]["tmp_name"];
	$nome    = $_FILES["file"]["name"];

	$ext 	  = explode(".", $nome);
	$extensao = end($ext);

	if ($extensao != "csv"){
		
		echo "extensão inválida";
	
	}else{

		$objeto = fopen($arquivo, 'r');
		while (($dados = fgetcsv($objeto, 1000, ";")) !== FALSE) {
			
			$nome 	   = utf8_encode($dados[0]);
			$sobrenome = utf8_encode($dados[1]);

			echo "Nome: " . $nome . "<br>";
			echo "Nome: " . $sobrenome . "<br>";
		
			$results = $conn->query("INSERT INTO alunos(nome, sobrenome) VALUES ('$nome', '$sobrenome')");

		}

		if ($results){
			echo "Dados inseridos com sucesso";
		}else{
			echo "Erro ao inserir no banco";
		}

	}

?>
