<?php 

	header('Content-Type: application/json');

	$pdo = new PDO("mysql:host=mysql669.umbler.com:41890; dbname=radiocampus", "radioadmin", "3llcb233");
	$sql = $pdo->prepare('SELECT * FROM admin_requests');
	$result = $sql->execute();

	if($result == 1) {
		echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
	}else{
		echo json_encode("Nenhuma solicitação encontrada!");
	}
 ?>