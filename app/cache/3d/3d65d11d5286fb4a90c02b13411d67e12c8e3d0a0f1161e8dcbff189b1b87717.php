<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cadastro.html */
class __TwigTemplate_552d525e6a75b85750f25a4544d919214b1166b4a9d5c5366a7270cf5ca65bab extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Radio Campus - Cadastro</title>
  <meta charset=\"utf-8\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://localhost/radiocampus/assets/css/login.css\">
  <link href=\"https://fonts.googleapis.com/css?family=Poppins:600&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
  <img class=\"wave\" src=\"http://radiocampusadmin.com.br/assets/img/wave.png\">
  <div class=\"container\">
    <div class=\"img\">
    </div>
    <div class=\"login-content\">
      <form id=\"form1\" autocomplete=\"off\">
        <img src=\"http://localhost/radiocampus/assets/img/avatar.svg\" height=\"30%;\"><br>
              <div class=\"input-div pass\">
                 <div class=\"i\"> 
                    <i class=\"fas fa-users\"></i>
                 </div>
                 <div class=\"div\">
                    <h5>Nome</h5>
                    <input type=\"text\" class=\"input\" id=\"nome\" required autocomplete=\"off\">
                 </div>
              </div>
              <div class=\"input-div pass2\">
                 <div class=\"i\"> 
                    <i class=\"fas fa-address-card\"></i>
                 </div>
                 <div class=\"div\">
                    <h5>Email</h5>
                    <input type=\"email\" class=\"input\" id=\"email\" required autocomplete=\"off\">
                 </div>
              </div>
              <div class=\"input-div pass3\">
                 <div class=\"i\"> 
                    <i class=\"fas fa-lock\"></i>
                 </div>
                 <div class=\"div\">
                    <h5>Senha</h5>
                    <input type=\"password\" class=\"input\" id=\"senha\" required autocomplete=\"off\">
                 </div>
              </div>
              <center><div class=\"loader\" id=\"carrega\" style=\"display: none;\"></div></center>
              <input type=\"submit\" form=\"form1\" class=\"btn\" value=\"Solicitar cadastro\">
              <a href=\"http://radiocampusadmin.com.br/login\" style=\"text-align: center;\">Voltar para trás.</a>
          </form>
        </div>
    </div>
    <script src=\"http://kit.fontawesome.com/a81368914c.js\"></script>
    <script src=\"http://localhost/radiocampus/assets/js/main.js\"></script>
    <script src=\"http://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"http://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
    <script src=\"http://localhost/radiocampus/assets/js/requestadmin.js\"></script>
    <script src=\"http://localhost/radiocampus/assets/js/pace.min.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "cadastro.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cadastro.html", "C:\\xampp\\htdocs\\radiocampus\\app\\view\\cadastro.html");
    }
}
