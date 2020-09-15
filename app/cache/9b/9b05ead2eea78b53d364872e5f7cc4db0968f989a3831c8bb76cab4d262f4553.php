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

/* login.html */
class __TwigTemplate_68531c9d9fa3520ebb72a0ad9e138c09cc0fc3788d7b2fec2697197b36c92eb5 extends \Twig\Template
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
  <title>Radio Campus - Login</title>
  <meta charset=\"utf-8\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/login.css\">
  <link href=\"https://fonts.googleapis.com/css?family=Poppins:600&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
  <img class=\"wave\" src=\"assets/img/wave.png\">
  <div class=\"container\">
    <div class=\"img\">
      <img src=\"assets/img/bg.svg\">
    </div>
    <div class=\"login-content\">
      <form action=\"login/check\" method=\"POST\" autocomplete=\"off\">
        <img src=\"assets/img/logo.png\" height=\"30%;\"><br>
              ";
        // line 20
        if ((($context["error"] ?? null) != "")) {
            // line 21
            echo "              <p style=\"color: #FF6347;\"><i class=\"fa fa-code\"></i>&nbsp;Acesso não autorizado!</p><br>
              ";
        }
        // line 23
        echo "              <div class=\"input-div one\">
                 <div class=\"i\">
                    <i class=\"fas fa-user\"></i>
                 </div>
                 <div class=\"div\">
                    <h5>Email</h5>
                    <input type=\"email\" class=\"input\" name=\"email\" autocomplete=\"off\" required autocomplete=\"off\">
                 </div>
              </div>
              <div class=\"input-div pass\">
                 <div class=\"i\"> 
                    <i class=\"fas fa-lock\"></i>
                 </div>
                 <div class=\"div\">
                    <h5>Senha</h5>
                    <input type=\"password\" class=\"input\" name=\"password\" required autocomplete=\"off\">
                 </div>
              </div>
              <input type=\"submit\" class=\"btn\" value=\"Login\">
              <a  href=\"login/cadastro\" style=\"text-align: center;\">Não possui login? Clique aqui.</a>
            </form>
        </div>
    </div>
    <script src=\"https://kit.fontawesome.com/a81368914c.js\"></script>
    <script src=\"assets/js/pace.min.js\"></script>
    <script src=\"assets/js/main.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  60 => 21,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html", "C:\\xampp\\htdocs\\radiocampus\\app\\view\\login.html");
    }
}
