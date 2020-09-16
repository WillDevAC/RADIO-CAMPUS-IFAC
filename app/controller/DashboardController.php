<?php 

	class DashboardController
	{
		//privates
		private $sucessomessage;
		private $errormessage;

		//classe construtora - Responsavel pelos popup de erros
		public function __construct()
		{
			$this->sucessomessage = $_SESSION['sucesso'] ?? null;
			$this->errormessage = $_SESSION['errorSession'] ?? null;
			//contador de sucesso!
			if (isset($this->sucessomessage)) {
				if ($this->sucessomessage['contador'] === 0) {
					$_SESSION['sucesso']['contador']++;
				} else {
					unset($_SESSION['sucesso']);
				}
			}
			//contador de error
			if (isset($this->errormessage)) {
				if ($this->errormessage['contador2'] === 0) {
					$_SESSION['errorSession']['contador2']++;
				} else {
					unset($_SESSION['errorSession']);
				}
			}
		}
		public function index()
		{
		    	//Envio e recebimento de parametros das model
		    	$colecMusics = Musics::selecionaTodos();
		    	$locutores = Adm::selecionaLocutores();
		    	$cadastros = Adm::contadorCadastros();
		    	$requests = Adm::selecionaRequests();

		    	$loader = new \Twig\Loader\FilesystemLoader('app/view');
		    	$twig = new \Twig\Environment($loader, [
		    	    'cache' => 'app/cache',
		    	    'auto_reload' => true
		    	]);
		    	$template = $twig->load('dashboard.html');
		    	$parametros = array();
		    	$parametros['musics'] = $colecMusics;
		    	$parametros['adm'] = $locutores;
		    	$parametros['request'] = $requests;
		    	$parametros['cadastros'] = $cadastros;
		    	$parametros['sucesso'] = $_SESSION['sucesso']['mensagem'] ?? null;
		    	$parametros['error'] = $_SESSION['errorSession']['mensagem'] ?? null;
		    	$parametros['name_user'] = $_SESSION['usr']['name_user'];
		    	$conteudo = $template->render($parametros);
		    	echo $conteudo;
		}
		public function request()
		{
			$nome = $_GET['user'];
			$email = $_GET['e'];
			$id_user = $_GET['id'];
			$s = $_POST['secret'];
			try {
				Adm::confirmaRequest($nome, $email, $s, $id_user);
				$_SESSION['sucesso'] = array('mensagem' => 'SUCESSO: Cadastro confirmado com sucesso!', 'contador' => 0);
				header('Location: http://radiocampusadmin.com.br/dashboard');
			} catch (Exception $e) {
				$_SESSION['errorSession'] = array('mensagem' => $e->getMessage(), 'contador2' => 0);
				header('Location: http://radiocampusadmin.com.br/dashboard');
			}
		} 

		public function unrequest()
		{
			try {
			 $email = $_GET['email'];
			 Adm::unrequest($_GET, $email);
			 $_SESSION['sucesso'] = array('mensagem' => 'SUCESSO: Registro de cadastro negado com sucesso!', 'contador' => 0);
			 header('Location: http://radiocampusadmin.com.br/dashboard');
			} catch (Exception $e) {
			 $_SESSION['errorSession'] = array('mensagem' => $e->getMessage(), 'contador2' => 0);
			 header('Location: http://radiocampusadmin.com.br/dashboard');
			}
		}
		//função de incluir locutor
		public function insert() {
			try {
				Adm::insertLocutor($_POST);
				$_SESSION['sucesso'] = array('mensagem' => 'SUCESSO: Locutor inserido com sucesso!', 'contador' => 0);
				header('Location: http://radiocampusadmin.com.br/dashboard');
			} catch (Exception $e) {
				$_SESSION['errorSession'] = array('mensagem' => 'FALHA: Ocorreu algum problema ao inserir locutor!', 'contador2' => 0);
				header('Location: http://radiocampusadmin.com.br/dashboard');
			}
		}
		//função de excluir locutor
		public function excluir() {
			try {
			 Adm::excluirLocutor($_GET);
			 $_SESSION['sucesso'] = array('mensagem' => 'SUCESSO: Locutor excluido com sucesso!', 'contador' => 0);
			 header('Location: http://radiocampusadmin.com.br/dashboard');
			} catch (Exception $e) {
			 $_SESSION['errorSession'] = array('mensagem' => $e->getMessage(), 'contador2' => 0);
			 header('Location: http://radiocampusadmin.com.br/dashboard');
			}
		}
		//função de confirmar musica
		public function confirmaMusica() {
			try {
				Musics::confirmarMusica($_GET);	
				$_SESSION['sucesso'] = array('mensagem' => 'SUCESSO: Música confirmada com sucesso!', 'contador' => 0);
				header('Location: http://radiocampusadmin.com.br/dashboard');	
			} catch (Exception $e) {
				$_SESSION['errorSession'] = array('mensagem' => 'ERROR: Ocorreu um erro ao tentar confirmar música!', 'contador2' => 0);
				header('Location: http://radiocampusadmin.com.br/dashboard');
			}

		}
		//função deslogar do sistema
		public function logout()
		{
		    unset($_SESSION['usr']);
		    session_destroy();
		    header('Location: http://radiocampusadmin.com.br/login');
		}
	}
 ?>