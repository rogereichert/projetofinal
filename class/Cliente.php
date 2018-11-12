<?php

    class Cliente extends Usuario{

        private $idPerfil;

        public function loadByCliente($deslogin, $dessenha){

            /**
             * Faço uma função que uso um SELECT, através dos parâmetros que o usuário digitar
             * então verifico se existe esses dados dentro da tabela clientes.
             * Caso não obtenha, então passo os parâmetros para o objeto que criei do Técnico
             * e verifico se existe esses dados na tabela Técnicos.
             * Caso não haja nenhum dado encontrado nessas tabelas, mostra um alert para o usuário
             */


            // Chamo um objeto da classe Sql
			$sql = new Sql();

            /**
             * Crio uma variável para receber o SELECT que pesquisarei
             * Usando os parâmetros passados dentro do método
             */
            $results = $sql->select(
               "SELECT deslogin, dessenha FROM tb_usuarios INNER JOIN tb_clientes
                ON tb_usuarios.idusuario = tb_clientes.idUsuario
                WHERE deslogin = :DESLOGIN AND dessenha = :DESSENHA", array(
                    ":DESLOGIN" => $deslogin,
                    ":DESSENHA" => $dessenha
            ));

			if (count($results) > 0){

            /**
             * Caso consiga encontrar dentro da tabela Clientes os dados fornecidos
             * Então redireciono para o arquivo cliente.php
             * onde todos os dados necessários e que carrega suas configurações 
             */
				header("Location: cliente.php");
			
			}else{

                /**
                 * Caso contrário, crio um objeto do tipo Técnico
                 * e tento utilizar os mesmos parâmetros para fazer o login.
                 * Caso não consiga da mesma maneira, dentro da classe Tecnico tem um else que apontará um erro
                 * dessa forma mostrará o erro na tela para o usuário
                 */
                $t = new Tecnico();
			    $t->loadByTecnico($deslogin, $dessenha);
                
            }

		}

    }


?>