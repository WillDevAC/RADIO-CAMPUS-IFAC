<?php

    class LoginController
    {
        public function index()
        {
            //responsavel por renderizar a view em html
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader, [
                'cache' => 'app/cache',
                'auto_reload' => true
            ]);
            $template = $twig->load('login.html');
                //se tiver erro o parametro error = A sessão criada na model
                $parameters['error'] = $_SESSION['msg_error'] ?? null;
            //renderiza a view + os parametro Error
            return $template->render($parameters);
        }
        //onde ira fazer a logica do login
        public function check()
        {
            try {
                $user = new User;
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $user->validarLogin();
                header('Location: /dashboard');
            } catch (\Exception $e) {
                $_SESSION['msg_error'] = array('msg' => $e->getMessage(), 'count' => 0);
                header('Location: http://radiocampusadmin.com.br/login');
            }
            
        }
        public function cadastro()
        {
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader, [
                'cache' => 'app/cache',
                'auto_reload' => true
            ]);
            $template = $twig->load('cadastro.html');
            return $template->render();
        }
    }
?>