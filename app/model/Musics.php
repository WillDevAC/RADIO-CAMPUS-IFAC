<?php 

	use Radio\Database\Connection;

	class Musics
	{
		//seleciona todos os pedidos de musicas
		public static function selecionaTodos()
		{
			$conn = Connection::getConn();

			$sql = "SELECT * FROM songs ORDER BY id ASC LIMIT 4";
			$sql = $conn->prepare($sql);
			$sql->execute();

			$resultado = array();

			while ($row = $sql->fetchObject('Musics')) {
				$resultado[] = $row;
			}
			return $resultado;
		}
		//confirma a musica com o id enviado via GET
		public static function confirmarMusica($dadosGET)
		{
			$conn = Connection::getConn();
			//filtros anti SQL INJECTION
			$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
			$sql = "DELETE FROM songs WHERE id='$id'";
			$sql = $conn->prepare($sql);
			$resultado = $sql->execute();
			if($resultado == 0) {
				throw new Exception("Erro ao confirmar a música no banco de dados!");
				return false;
			}
			return true;
		}
	}

 ?>