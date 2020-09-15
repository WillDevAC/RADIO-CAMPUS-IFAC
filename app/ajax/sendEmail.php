<?php 

	$destinatario = $_POST['destinatario'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];


	$to = $destinatario;
	$subject = $assunto;
	$message = $mensagem;
	$headers = 'From: contato@radiocampusadmin.com.br' . "\r\n" .
	    'Reply-To: contato@radiocampusadmin.com.br' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
	echo json_encode("Sucesso!");
 ?>