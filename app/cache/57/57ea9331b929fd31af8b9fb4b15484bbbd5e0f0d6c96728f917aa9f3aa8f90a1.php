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

/* dashboard.html */
class __TwigTemplate_6b9d7e8ece31c6e0303e4c4ad4a64a5e0d2eff393d656de466476cffc79f06ec extends \Twig\Template
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
        echo "<!-- LAYOUT E BACK END - DESENVOLVIDO POR @WILL DEVELOPER -->
<!-- CHAVE: #231941 - INSTITUTO FEDERAL DO ACRE -->

<!DOCTYPE html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Radio Campus | Dashboard</title>
    <!-- Bootstrap CSS -->
    <script src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script src=\"assets/js/grafico-pizza.js\"></script>
    <script src=\"assets/js/grafico-cadastro.js\"></script>
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  </head>
  <body>
    <!--Inicio da navbar -->
    </script>
    <nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Menu de navegação</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand text-index\"><span class=\"glyphicon glyphicon-stats\"></span></i> Dashboard</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"text-will\"><a>";
        // line 34
        echo twig_escape_filter($this->env, ($context["name_user"] ?? null), "html", null, true);
        echo "</a></li>
            <li><a href=\"dashboard/logout\"><i class=\"fa fa-sign-out\"></i></a></li>
          </ul>
        </div><!--/Fim da navbar -->
      </div>
    </nav>
    <br>
    <section id=\"main\">
      <div class=\"container\">
        ";
        // line 43
        if ((($context["sucesso"] ?? null) != "")) {
            // line 44
            echo "          <div class=\"alert alert-success\" align=\"center\">
            ";
            // line 45
            echo twig_escape_filter($this->env, ($context["sucesso"] ?? null), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 48
        echo "        ";
        if ((($context["error"] ?? null) != "")) {
            // line 49
            echo "          <div class=\"alert alert-danger\" align=\"center\">
            ";
            // line 50
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 53
        echo "        <div class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"list-group\">
              <a class=\"list-group-item active main-color-bg\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> Painel de controle
              </a>
              <!-- PEDIDOS -->
              <a class=\"list-group-item\" data-toggle=\"modal\" data-target=\"#Modalpedidos\"><span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span> Pedidos de cadastro <span class=\"badge\">ATIVO</span></a>
              <!-- CADASTRAR LOCUTOR -->
              <a class=\"list-group-item\" data-toggle=\"modal\" data-target=\"#Modallocutor\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Cadastrar locutor <span class=\"badge\">ATIVO</span></a>
              <!-- EMAIL CORPORTATiVO -->
              <a class=\"list-group-item\" data-toggle=\"modal\" data-target=\"#Modalemail\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Enviar Email <span class=\"badge\">ATIVO</span></a>
              <!-- LISTA DE LOCUTORES -->
              <a class=\"list-group-item\" data-toggle=\"modal\" data-target=\"#Modallocutores\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Lista de locutores <span class=\"badge\">ATIVO</span></a>
              <!-- LISTA DE OUVINTES -->
              <a class=\"list-group-item\" data-toggle=\"modal\" data-target=\"#ModalIp\"><span class=\"glyphicon glyphicon-qrcode\" aria-hidden=\"true\"></span> Relatorios de IP <span class=\"badge\">ATIVO</span></a>
              <!-- AO VIVO -->
               <a class=\"list-group-item\" onclick=\"abrir_player_popup()\"><span class=\"glyphicon glyphicon-music\"></span> Transmissão <span class=\"badge\">ATIVO</span></a>
              <!-- LIMPAR CHAT -->
               <a class=\"list-group-item\"  onclick=\"ExcluirRegistros()\"><span class=\"glyphicon glyphicon-list-alt\"></span> Limpar chat <span class=\"badge\">ATIVO</span></a>
              <!-- LOGS -->
               <a class=\"list-group-item\"  data-toggle=\"modal\" data-target=\"#Modalchat\"><span class=\"glyphicon glyphicon-send\"></span> Chat <span class=\"badge\">ATIVO</span></a>
              <!-- RECARREGAR -->
               <a href=\"\" class=\"list-group-item\"><span class=\"glyphicon glyphicon-repeat\" aria-hidden=\"true\"></span> Recarregar <span class=\"badge\">ATIVO</span></a><br>
               <div class=\"row-2\" align=\"center\">
            </div>
            </div>
          </div>
          <div class=\"col-md-9\">
            <!-- Container de relatorio -->
            <div class=\"panel panel-default\">
              <div class=\"panel-heading main-color-bg\">
                <h3 class=\"panel-title\">Relatório de transmissão</h3>
              </div>
              <div class=\"panel-body\">
                <div class=\"col-md-3\">
                  <div class=\"well dash-box\" id=\"card1\">
                    <h2><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> <span id=\"ouvintes\">0</span></h2>
                    <h4>Ouvintes agora</h4>
                  </div>
                </div>
                <div class=\"col-md-3\">
                  <div class=\"well dash-box\" id=\"card2\">
                    <h2><span class=\"glyphicon glyphicon-thumbs-up\" aria-hidden=\"true\"> </span> <span id=\"likes\">0</span></h2>
                    <h4>Likes</h4>
                  </div>
                </div>
                <div class=\"col-md-3\">
                  <div class=\"well dash-box\" id=\"card3\">
                    <h2><span class=\"glyphicon glyphicon-bullhorn\" aria-hidden=\"true\"></span> <span id=\"interacao\">0</span></h2>
                    <h4>Interação</h4>
                  </div>
                </div>
                <div class=\"col-md-3\">
                  <div class=\"well dash-box\">
                    <h2><span class=\"glyphicon glyphicon-stats\" aria-hidden=\"true\"></span> ";
        // line 108
        echo twig_escape_filter($this->env, ($context["cadastros"] ?? null), "html", null, true);
        echo "</h2>
                    <h4>Cadastros</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Pedidos de músicas -->
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                  <h3 class=\"panel-title\">Pedidos de musicas</i></h3>
                </div>
                <div class=\"panel-body\">
                <div class=\"table-responsive table-success\">
                  <table class=\"table table-striped table-hover\">
                      <tr>
                        <th>Nome do ouvinte</th>
                        <th>Música solicitada</th>
                        <th>Curso</th>
                        <th>Dedicatoria</th>
                        <th>Ações locutor</th>
                      </tr>
                      ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["musics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidos"]) {
            // line 131
            echo "                        <tr>
                            ";
            // line 132
            if ((((twig_get_attribute($this->env, $this->source, $context["pedidos"], "name", [], "any", false, false, false, 132) != "") && (twig_get_attribute($this->env, $this->source, $context["pedidos"], "music", [], "any", false, false, false, 132) != "")) && (twig_get_attribute($this->env, $this->source, $context["pedidos"], "course", [], "any", false, false, false, 132) != ""))) {
                // line 133
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedidos"], "name", [], "any", false, false, false, 133), "html", null, true);
                echo "</td>
                                <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedidos"], "music", [], "any", false, false, false, 134), "html", null, true);
                echo "</td>
                                <td>";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedidos"], "course", [], "any", false, false, false, 135), "html", null, true);
                echo "</td>
                                  <!-- Verificação de dedicatoria -->
                                  ";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["pedidos"], "dedicated", [], "any", false, false, false, 137) != "")) {
                    // line 138
                    echo "                                  <td><span class=\"badge\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedidos"], "dedicated", [], "any", false, false, false, 138), "html", null, true);
                    echo "</span></td>
                                  ";
                }
                // line 140
                echo "
                                  <!-- Verificação não vazia -->
                                  ";
                // line 142
                if ((twig_get_attribute($this->env, $this->source, $context["pedidos"], "dedicated", [], "any", false, false, false, 142) == "")) {
                    // line 143
                    echo "                                  <td><span class=\"badge\">NENHUMA</span></td>
                                  ";
                }
                // line 145
                echo "                                  <td><a class=\"btn btn-success\" href=\"dashboard/confirmaMusica?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedidos"], "id", [], "any", false, false, false, 145), "html", null, true);
                echo "\">Confirmar</a></td></td>
                            ";
            }
            // line 147
            echo "                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                    </table>
                  </div>
                </div>
                <hr size=\"100px\">
                <div class=\"row\" align=\"center\">
                  <div class=\"col-lg-6\">
                    <div id=\"grafico_pizza\"></div>
                  </div>
                  <div class=\"divider\"></div>
                  <div class=\"col-lg-6\">
                   <div id=\"grafico_cadastro\"></div>
                  </div>
                </div>
              </div>
              <!-- GRAFICOS-->
        </div>
      </div>
    </section>

    <!-- Modals - lista de locutores -->
    <div class=\"modal fade\" id=\"Modallocutores\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Modallocutores\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <div class=\"svg\" align=\"center\">
              <h3><strong>LOCUTORES</strong></h3>
            </div>
          </div>
          <div class=\"modal-body\">
            <div class=\"table-responsive table-success\" align=\"center\">
              <table id=\"example\" class=\"table table-bordered\" style=\"width:95%\">
                      <thead>
                          <tr class=\"bg-success\">
                              <th>Nome</th>
                              <th>Email</th>
                              <th class=\"text-center\">Situação</th>
                              <th class=\"text-center\">Ações</th>
                          </tr>
                      </thead>
                      <tbody>
                        ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["adm"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["locutor"]) {
            // line 190
            echo "                        <tr>
                        ";
            // line 191
            if (((twig_get_attribute($this->env, $this->source, $context["locutor"], "name", [], "any", false, false, false, 191) != "") && (twig_get_attribute($this->env, $this->source, $context["locutor"], "email", [], "any", false, false, false, 191) != ""))) {
                // line 192
                echo "                          <td><span class=\"glyphicon glyphicon-user text-success\" aria-hidden=\"true\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locutor"], "name", [], "any", false, false, false, 192), "html", null, true);
                echo "</td>
                          <td>";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locutor"], "email", [], "any", false, false, false, 193), "html", null, true);
                echo "</td>
                          <td class=\"text-center\"><span class=\"badge\">OK</span></td>
                          <td class=\"text-center\"><button><a href=\"dashboard/excluir?id=";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locutor"], "id", [], "any", false, false, false, 195), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash text-danger\" aria-hidden=\"true\"></span></td></a></button>
                        ";
            }
            // line 197
            echo "                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locutor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                      </tbody>
              </table>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modals - locutor -->
    <div class=\"modal fade\" id=\"Modallocutor\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Modallocutor\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h3 class=\"modal-title\" id=\"exampleModalLabel\" style=\"text-align: center;\"><strong>CADASTRO</strong></h3>
            </button>
          </div>
        <!-- Inicio do formulario -->
        <form method=\"POST\" action=\"dashboard/insert\" autocomplete=\"off\">
          <div class=\"modal-bodyy\">
            <div class=\"col\" align=\"center\">
              <div class=\"row\"><br>
                <img src=\"assets/img/gravatar.png\" width=\"17%\">
              </div>
            </div>
            <div class=\"container-fluid\">
            <!-- 1° CAMPO -->
              <div class=\"form-group\">
                <label for=\"nomelocutor\">Nome do locutor</label>
                <!-- name 1° Campo = nomelocutor -->
                <input type=\"text\" class=\"form-control\" autocomplete=\"off\" placeholder=\"Nome\" name=\"nomelocutor\" autocomplete=\"off\" required>
              </div>
            <!-- 2° CAMPO -->
              <div class=\"form-group\">
                <label for=\"emaillocutor\">Email</label>
                <!-- name 2° Campo = emaillocutor -->
                <input type=\"email\" class=\"form-control\" autocomplete=\"off\" placeholder=\"Email\" name=\"emaillocutor\" autocomplete=\"off\" required>
              </div>
            <!-- 3° CAMPO -->
              <div class=\"form-group\">
                <label for=\"senhalocutor\">Senha</label>
                <!-- name 3° Campo = senhalocutor -->
                <input type=\"password\" class=\"form-control\" autocomplete=\"off\" placeholder=\"senha\" name=\"senhalocutor\" autocomplete=\"off\" required>
              </div>
          </div>
          </div>
          <div class=\"modal-footer\">
            <!-- Campos de botões -->
            <input type=\"submit\" class=\"btn btn-success\" value=\"Cadastrar\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
          </div>
        </form>
        <!-- Fim do formulario -->
        </div>
      </div>
    </div>
    <!-- MODAL IP-->
    <div class=\"modal fade\" id=\"ModalIp\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalIp\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h3 class=\"modal-title\" id=\"exampleModalLabel\" style=\"text-align: center;\"><strong>IPS CONECTADOS</strong></h3>
            </button>
          </div>
          <div class=\"modal-body\">
            <div class=\"table-responsive table-success\" align=\"center\">
              <table id=\"example\" class=\"table table-bordered\" style=\"width:100%\">
                      <thead>
                          <tr class=\"bg-success\">
                              <th class=\"text-center\">Localização</th>
                              <th class=\"text-center\">Endereço IP</th>
                          </tr>
                      </thead>
                      <tbody id=\"dados\">
                      </tbody>
              </table>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL EMAIL-->
    <div class=\"modal fade\" id=\"Modalemail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Modalemail\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h3 class=\"modal-title\" id=\"exampleModalLabel\" style=\"text-align: center;\"><strong>EMAIL</strong></h3>
            </button>
          </div>
          <div class=\"modal-bodyy\">
            <div class=\"container-fluid\">
              <br>
            <form id=\"form_email\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" id=\"assunto\" placeholder=\"Assunto\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" id=\"destinatario\" placeholder=\"Destinatario\" required>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\">Texto do email</label>
                <textarea class=\"form-control\" id=\"msg\" rows=\"6\" required></textarea>
              </div>
          </div>
          <center><div class=\"loader\" id=\"carregar\" style=\"display: none\"></div></center><br>
          </div>
          <div class=\"modal-footer\">
            <input type=\"submit\" class=\"btn btn-success\" form=\"form_email\" value=\"Enviar\"></button>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <!-- MODAL PEDIDOS-->
    <div class=\"modal fade\" id=\"Modalpedidos\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Modalpedidos\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h3 class=\"modal-title\" id=\"exampleModalLabel\" style=\"text-align: center;\"><strong>PEDIDOS DE CADASTROS</strong></h3>
          </div>
          <div class=\"modal-body\">
            <div class=\"col\" align=\"center\">
              <div class=\"row\">
                <div class=\"table-responsive table-success\" align=\"center\">
                  <table id=\"example\" class=\"table table-bordered table-responsive\" style=\"width:100%\">
                          <thead>
                              <tr class=\"bg-success\">
                                  <th>Nome</th>
                                  <th>Email</th>
                                  <th class=\"text-center\">Situação</th>
                                  <th class=\"text-center\">Aceitar</th>
                                  <th class=\"text-center\">Recusar</th>

                              </tr>
                          </thead>
                          <tbody id=\"dadostabela\">
                            ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["request"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 341
            echo "                            <tr>
                            ";
            // line 342
            if (((twig_get_attribute($this->env, $this->source, $context["user"], "nome", [], "any", false, false, false, 342) != "") && (twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 342) != ""))) {
                // line 343
                echo "                            <form method=\"POST\" action=\"dashboard/request?user=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nome", [], "any", false, false, false, 343), "html", null, true);
                echo "&e=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 343), "html", null, true);
                echo "&id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 343), "html", null, true);
                echo "\">
                              <td id=\"nome\"><span class=\"glyphicon glyphicon-user text-success\" aria-hidden=\"true\"></span> ";
                // line 344
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nome", [], "any", false, false, false, 344), "html", null, true);
                echo "</td>
                              <td id=\"email\">";
                // line 345
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 345), "html", null, true);
                echo "</td>
                              <td class=\"text-center\"><span class=\"badge\">PENDENTE</span></td>
                              <td class=\"text-center\"><button type=\"submit\"><span class=\"glyphicon glyphicon-ok text-success\" aria-hidden=\"true\"></span></td></button>
                              <td style=\"display: none;\"><input type=\"text\" name=\"secret\" value=\"";
                // line 348
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "senha", [], "any", false, false, false, 348), "html", null, true);
                echo "\"></td>
                            </form>
                            <td class=\"text-center\"><a href=\"dashboard/unrequest?id=";
                // line 350
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 350), "html", null, true);
                echo "&email=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 350), "html", null, true);
                echo "\"><button><span class=\"glyphicon glyphicon-remove text-danger\" aria-hidden=\"true\"></span></td></button></a>
                            ";
            }
            // line 352
            echo "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                            
                          </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL CHAT-->
        <div class=\"modal fade\" id=\"Modalchat\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalIp\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <div class=\"img\" align=\"center\">
                  <img src=\"assets/img/chat.png\" id=\"img\">
                </div>
              </div>
              <div class=\"modal-body\">
                <div id=\"chat-message-list\">
                  <div id=\"lista\">
                    
                  </div>
                  <!-- MODAL CHAT
                <div class=\"message-row you-message\">
                  <div class=\"message-text\">Vou bem e você?</div>
                  <div class=\"message-time\">ADMINISTRADOR</div>
                </div>
                  -->
              </div>
            </div>
                  <div class=\"modal-footer\">
                      <div class=\"panel-footer\">
                        <form id=\"form2\" autocomplete=\"off\">
                          <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"mensagem\" placeholder=\"Digite algo...\" required>
                            <span class=\"input-group-btn\">
                              <input class=\"btn btn-success\" type=\"submit\" form=\"form2\" autocomplete=\"off\"><span class=\"glyphicon glyphicon-send\" aria-hidden=\"true\" onclick=\"createMessage()\"></input>
                            </span> 
                          </div>
                        </form>
                    </div>
            </div> 
          </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class=\"page-footer font-small blue rodapes\">
      <div class=\"footer-copyright text-center py-3\">© Radio Campus - Todos os direitos reservados
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <script src=\"http://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script src=\"http://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
    <script src=\"assets/js/ip.js\"></script>
    <script src=\"assets/js/chat_request.js\"></script>
    <script src=\"assets/js/grafico-pizza.js\"></script>
    <script src=\"assets/js/API.js\"></script>
    <script src=\"assets/js/pace.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 354,  499 => 352,  492 => 350,  487 => 348,  481 => 345,  477 => 344,  468 => 343,  466 => 342,  463 => 341,  459 => 340,  316 => 199,  309 => 197,  304 => 195,  299 => 193,  294 => 192,  292 => 191,  289 => 190,  285 => 189,  243 => 149,  236 => 147,  230 => 145,  226 => 143,  224 => 142,  220 => 140,  214 => 138,  212 => 137,  207 => 135,  203 => 134,  198 => 133,  196 => 132,  193 => 131,  189 => 130,  164 => 108,  107 => 53,  101 => 50,  98 => 49,  95 => 48,  89 => 45,  86 => 44,  84 => 43,  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard.html", "C:\\xampp\\htdocs\\radiocampus\\app\\view\\dashboard.html");
    }
}
