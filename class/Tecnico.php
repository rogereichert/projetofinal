<?php

    class Tecnico extends Usuario {

        private $idPerfil;
        
        public function loadByTecnico($deslogin, $dessenha){

			$sql = new Sql();

            $results = $sql->select
            ("SELECT deslogin, dessenha FROM tb_usuarios
            INNER JOIN tb_tecnicos
            ON tb_usuarios.idusuario = tb_tecnicos.idUsuario
            WHERE deslogin = :DESLOGIN AND dessenha = :DESSENHA", array(
                ":DESLOGIN" => $deslogin,
                ":DESSENHA" => $dessenha
            ));

			if (count($results) > 0){

				header("Location: tecnico.php");
			
			}else{

                header("Location: index.php?msg=1");
               
            }

		}

    }

?>