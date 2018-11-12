<?php 

	class Usuario{

		/*
		Declaração dos atributos da classe Usuario
		*/

		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $nome;
		private $cpf;
		private $telefone;
		private $email;
		private $dtcadastro;

		public function getIdusuario(){
			return $this->idusuario;
		}

		public function getDeslogin(){
			return $this->deslogin;
		}

		public function setDeslogin($value){
			$this->deslogin = $value;
		}

		public function getDessenha(){
			return $this->dessenha;
		}

		public function setDessenha($value){
			$this->dessenha = $value;
		}

		public function setIdusuario($value){
			$this->idusuario = $value;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($value){
			$this->nome = $value;
		}

		public function getCpf(){
			return $this->cpf;
		}

		public function setCpf($value){
			$this->cpf = $value;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function setTelefone($value){
			$this->telefone = $value;
		}

		public function getDtcadastro(){
			return $this->dtcadastro;
		}

		public function setDtcadastro($value){
			$this->dtcadastro = $value;
		}

		public function loadById($id){

			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
				":ID" => $id));

			if (count($results) > 0){

				$this->setData($results[0]);
			
			}

		}

		public function login($login){

			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN", array(
				
				":LOGIN" => $login
			));

			if (count($results) > 0){

				$this->setData($results[0]);
				header("Location:sistema.php");
			
			}else{
				echo ("<script LANGUAGE='JavaScript'>
				    window.alert('Erro de Login ou Senha');
				    window.location.href='index.php';
				    </script>");

			}

		}

		// método que recece os valores nos geters
		public function setData($row){

			$this->setIdusuario	 ($row['idusuario']);
			$this->setDeslogin	 ($row['deslogin']);
			$this->setDessenha	 ($row['dessenha']);
			$this->setDtcadastro (new DateTime($row['dtcadastro']));
		
		}

		public function __toString(){

			return json_encode(array(
				"idusuario"  => $this->getIdusuario() . "<br>",
				"deslogin"   => $this->getDeslogin()  . "<br>",
				"dessenha"   => $this->getDessenha()  . "<br>",
				"dtcadastro" => $this->getDtcadastro()->format("d/m/Y")
			));
		}

		public function insert($login, $senha){

			$sql = new Sql();

			$results = $sql->query("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)", array(
				":LOGIN" 	=> $login,
				":SENHA:" 	=> $senha
			));

			if (count($results) > 0){

				$this->setData($results[0]);

			}

		}



	}

 ?>