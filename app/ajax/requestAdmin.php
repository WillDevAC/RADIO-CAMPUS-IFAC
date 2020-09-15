<?php 
	//define o header como JSON
	header('Content-Type: application/json');

	//pega a requisição enviada pelo JS
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$verificado = 0;

	//cria o PDO
	$pdo = new PDO("mysql:host=mysql669.umbler.com:41890; dbname=radiocampus", "radioadmin", "3llcb233");
	$sql2 = $pdo->prepare("SELECT * FROM admin_requests WHERE email ='$email'");
	$sql2->execute();

	$sql3 = $pdo->prepare("SELECT * FROM admin WHERE email ='$email'");
	$sql3->execute();

	if($sql2->rowCount() >= 1 || $sql3->rowCount() >= 1)
	{
		//tratando erros com ajax
		echo json_encode(array(
			"error" => true,
		));	
	}else{
		$sql = $pdo->prepare('INSERT INTO admin_requests (nome, email, senha, verificado) VALUES (:na, :em, :se, :ve)');
		//binds
		$sql->bindValue(':na', $nome);
		$sql->bindValue(':em', $email);
		$sql->bindValue(':se', $senha);
		$sql->bindValue(':ve', $verificado);
		//executa o sql e salva
		$result = $sql->execute();
		if ($result == 1) {
			//envia para o JS o JSON
			echo json_encode(array(
				"error" => false,
			));
		}
	}

 ?>