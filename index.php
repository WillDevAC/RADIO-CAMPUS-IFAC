<?php
	session_start();

	
	//requires da aplicação
	require_once 'app/core/Core.php';
	require_once 'Lib/Radio/Database/Connection.php';
	require_once 'app/controller/LoginController.php';
	require_once 'app/controller/DashboardController.php';
	require_once 'app/model/Musics.php';
	require_once 'app/model/User.php';
	require_once 'app/model/Adm.php';
	require_once 'vendor/autoload.php';

	//criando instancia do core
	$core = new Core;
	echo $core->start($_GET);
?>