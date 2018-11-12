<?php 

	class Chamado {

		private $idchamado;
		private $cliente;
		private $datachamado;
		private $contato;
		private $titulo;
		private $usuario;
		private $descricao;
		private $status;

		public function setIdchamado($value) {
			$this->idchamado = $value;
		}

		public function getIdchamado(){
			return $this->idchamado;
		}

		public function setCliente($value) {
			$this->cliente = $value;
		}

		public function getCliente(){
			return $this->cliente;
		}

		public function setDataChamado($value){

			$this->datachamado = $value;
		}

		public function getDataChamado(){

		

			return $this->datachamado;
		}

		public function setContato ($value) {
			$this->contato = $value;
		}

		public function getContato(){
			return $this->contato;
		}

		public function setTitulo($value) {
			$this->titulo = $value;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setUsuario($value){
			$this->usuario = $value;
		}

		public function getUsuario(){
			return $this->usuario;
		}

		public function setDescricao($value){
			$this->descricao = $value;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setStatus($value){
			$this->status = $value;
		}

		public function getStatus(){
			return $this->status;
		}

		// funções DAO
		public function inserirRegistro(){

		}

		public function setData($data){
			
			$this->setIdchamado				  ($data['id']);
			$this->setCliente  				  ($data['cliente']);
			$this->setDataChamado			  ($data['data_chamado']);
			$this->setContato				  ($data['contato']);
			$this->setTitulo  				  ($data['titulo']);
			$this->setUsuario  				  ($data['usuario']);
			$this->setDescricao  			  ($data['descricao']);
			$this->setStatus 			      ($data['status']);

		}

		public function mostrarDados(){

			$sql = new Sql();

			return $sql->select("SELECT id, cliente, titulo, data_chamado, contato FROM tb_chamados WHERE status = 1 ORDER BY id DESC");

		}

		public function limitePagina($pagina, $itensPorPagina){

			$sql = new Sql();

			return $sql->select("SELECT id, cliente, titulo, data_chamado, contato FROM tb_chamados WHERE status=1  ORDER BY id DESC LIMIT $pagina, $itensPorPagina");

		}

		public function carregaChamado($id){

			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_chamados WHERE id = :ID", array(
				":ID" => $id
			));

			if (count($results) > 0){

				$this->setData($results[0]);
		
		 	}
		}


		public function adicionarNovoChamado(){

			$sql = new Sql();

			$results = $sql->query("INSERT INTO tb_chamados(cliente, contato, titulo, usuario, descricao) VALUES(:CLIENTE, :CONTATO, :TITULO, :USUARIO, :DESCRICAO)", array(

				":CLIENTE" 		=> $this->getCliente(),
				":CONTATO" 		=> $this->getContato(),
				":TITULO"  		=> $this->getTitulo(),
				":USUARIO"		=> $this->getUsuario(),
				":DESCRICAO"	=> $this->getDescricao()
			));

		}

		public function __toString(){

			return json_encode(array(

				"id" 			=> $this->getIdchamado(),
				"cliente"   	=> $this->getCliente(),
				"data_chamado"	=> $this->getDataChamado()

			));

		}

		public function contarRegistros(){

			$sql = new Sql();

			$contagem = $sql->select("SELECT * FROM tb_chamados WHERE status=1");
			$total = count($contagem);

			return $total;
		}
	}

?>