<?php 
	use Radio\Database\Connection;
	/**
	 * Classe responsavel por funções administrativas do app 
	 */
	class Adm
	{
		//limpa o todos os registros de chat no banco de dados
		public static function limparChat()
		{
			$conn = Connection::getConn();
			$sql = 'DELETE FROM messages';
			$sql = $conn->prepare($sql);
			$resposta = $sql->execute();

			if($resposta == 0) {
				throw new Exception("Erro, ao apagar os registros do chat!");
				return false;
			}
			return true;

		}
		public static function confirmaRequest($nome, $email, $s, $id_user)
		{
			$name_user = $nome;
			$email_user = $email;
			$secret_user = $s;
			$id = $id_user;

			$conn = Connection::getConn();
			$sql = 'INSERT INTO admin (name, email, pass) VALUES (:name_user, :email_user, :secret_user)';
			$sql = $conn->prepare($sql);
			$sql->bindValue(':name_user', $name_user);
			$sql->bindValue(':email_user', $email_user);
			$sql->bindValue(':secret_user', $secret_user);
			$res = $sql->execute();
			$sql2 = "DELETE FROM admin_requests WHERE id='$id'";
			$sql2 = $conn->prepare($sql2);
			$res2 = $sql2->execute();
			if($res == 0 || $res2 == 0) {
				//lançamento de excessão
				throw new Exception("ERRO: Falha ao confirmar cadastro na base de dados!");
				return false;
			}
			#ENVIANDO EMAIL - PHP
			$to = $email_user;
			$subject = 'RADIO CAMPUS - CADASTRO';
			$message = 'Bem vindo,' . $name_user.'! seu cadastro foi aceito!' . "\r\n" .'Acesse: radiocampusadmin.com.br/login';
			$headers = 'From: contato@radiocampusadmin.com.br' . "\r\n" .
			    'Reply-To: contato@radiocampusadmin.com.br' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			return true;
		}
		public static function unrequest($dadosGET, $email)
		{
			$conn = Connection::getConn();
			//filtro anti SQL INJECTION
			$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
			$sql = "DELETE FROM admin_requests WHERE id='$id'";
			$sql = $conn->prepare($sql);
			//verifica se o id é o mesmo do user
			$resultado = $sql->execute();
			if($resultado == 0) {
				//lançamento de excessão
				throw new Exception("ERRO: Erro ao excluir pedido de registro!");
				return false;
			}
			$email_user = $email;
			$to = $email_user;
			$subject = 'RADIO CAMPUS - CADASTRO';
			$message = 'Infelizmente seu cadastro foi recusado pela administração.';
			$headers = 'From: contato@radiocampusadmin.com.br' . "\r\n" .
			    'Reply-To: contato@radiocampusadmin.com.br' . "\r\n" . 
			    'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			return true;
		}
		//seleciona todos os registros de locutores do banco
		public static function selecionaLocutores()
		{
			$conn = Connection::getConn();
			$sql = "SELECT * FROM admin ORDER BY name ASC";
			$sql = $conn->prepare($sql);
			$sql->execute();

			$res = array();

			while ($row = $sql->fetchObject('Adm')) {
				$res[] = $row;
			}
			return $res;
		}
		public static function selecionaRequests()
		{
			$conn = Connection::getConn();
			$sql = "SELECT * FROM admin_requests ORDER BY nome ASC";
			$sql = $conn->prepare($sql);
			$sql->execute();

			$result = array();

			while ($row = $sql->fetchObject('Adm')) {
				$result[] = $row;
			}
			return $result;
		}
		//conta quantos cadastros tem
		public static function contadorCadastros()
		{
			$conn = Connection::getConn();
			$registros = 0;
			$sql = "SELECT * FROM users ORDER BY id ASC";
			$sql = $conn->prepare($sql);
			$sql->execute();

			$resultado = array();

			while ($row = $sql->fetchObject('Adm')) {
				$registros = $registros + 1;
			}
			return $registros;
		}
		//exclui o locutor do banco de dados de acordo com o id recebido
		public static function excluirLocutor()
		{
			$conn = Connection::getConn();
			//filtro anti SQL INJECTION
			$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
			$sql = "DELETE FROM admin WHERE id='$id'";
			$meuid = $_SESSION['usr']['id_user'];
			$sql = $conn->prepare($sql);
			//verifica se o id é o mesmo do user
			if($meuid != $id) {
				$resultado = $sql->execute();
				if($resultado == 0) {
					//lançamento de excessão
					throw new Exception("Erro ao excluir o locutor!");
					return false;
				}
			}else{
				throw new Exception("FALHA: Você não pode excluir você mesmo!");
			}
			return true;
		}
		//insere locutor no banco de dados
		public static function insertLocutor($dadosPost)
		{
			$conn = Connection::getConn();
			$sql = 'INSERT INTO admin (name, email, pass) VALUES (:nomelocutor, :emaillocutor, :senhalocutor)';
			$sql = $conn->prepare($sql);
			$sql->bindValue(':nomelocutor', $dadosPost['nomelocutor']);
			$sql->bindValue(':emaillocutor', $dadosPost['emaillocutor']);
			$sql->bindValue(':senhalocutor', $dadosPost['senhalocutor']);
			$res = $sql->execute();
			if($res == 0) {
				//lançamento de excessão
				throw new Exception("Falha ao cadastrar locutor!");
				return false;
			}
			return true;
		}
	}

 ?>