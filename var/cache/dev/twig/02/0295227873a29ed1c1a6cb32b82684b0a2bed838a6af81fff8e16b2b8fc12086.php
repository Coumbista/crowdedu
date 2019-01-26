<?php

/* Frontend.html.twig */
class __TwigTemplate_69cf336d8e26a4d1919a7c92e78e471963e4064e1cb05009ff46cfb9a0d69908 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'link' => array($this, 'block_link'),
            'div' => array($this, 'block_div'),
            'section0' => array($this, 'block_section0'),
            'campagne' => array($this, 'block_campagne'),
            'section1' => array($this, 'block_section1'),
            'section2' => array($this, 'block_section2'),
            'categorie' => array($this, 'block_categorie'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Frontend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Frontend.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>FundingEdu &mdash;Financement participatif</title>
    <meta name=\"description\" content=\"Free Bootstrap Theme by uicookies.com\">
    <meta name=\"keywords\" content=\"free website templates, free bootstrap themes, free template, free bootstrap, free website template\">
    ";
        // line 10
        $this->displayBlock('link', $context, $blocks);
        // line 18
        echo "       <style>
      .head {
        width: 100vw;
        padding: 5px 40px;
      }
    </style>
    <!--[if lt IE 9]>
      <script src=\"js/vendor/html5shiv.min.js\"></script>
      <script src=\"js/vendor/respond.min.js\"></script>
    <![endif]-->
  </head> 
 
  <body>

     ";
        // line 32
        $this->displayBlock('div', $context, $blocks);
        // line 105
        echo "        </div>
      </nav>
      ";
        // line 107
        $this->displayBlock('section0', $context, $blocks);
        // line 159
        echo "     ";
        $this->displayBlock('campagne', $context, $blocks);
        // line 250
        echo "        ";
        $this->displayBlock('section1', $context, $blocks);
        // line 309
        echo "      ";
        $this->displayBlock('section2', $context, $blocks);
        // line 403
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 461
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 477
        echo "  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_link($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        // line 11
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles-merged.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\">
     ";
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_div($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 33
        echo "      <nav class=\"navbar navbar-default probootstrap-navbar\" style=\"position: fixed; background: none;\">
        <div class=\"header head\" id=\"header\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\" aria-controls=\"navbar\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-header\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo-CrowdEdu-Africa-1.png"), "html", null, true);
        echo "\" style=\"width:120px; margin-top:25px;margin-left:40px;\"></a>
          </div>
     
          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
             
           
              ";
        // line 69
        echo "               ";
        // line 72
        echo "                        <!--Navbar-->

                        ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->source); })()), "user", array()) != null)) {
            // line 75
            echo "                        ";
            // line 78
            echo "                        <li class=\"nav-item ";
            if (array_key_exists("mainNavLogin", $context)) {
                echo "active";
            }
            echo "\">
                            <a class=\"nav-link\"style=\"color:#696969\" href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mapage");
            echo "\">Mes campagnes</a>
                        </li>
                             <li><a href=\"news.html\"style=\"color:#696969\">Mode d'emploie</a></li>
                               <li><a href=\"causes.html\"style=\"color:#696969\">Causes</a></li>
                           <li class=\"nav-item\">
                         <a href=\"#demo\" data-toggle=\"collapse\"style=\"color:#696969\"> Bonjour <b> ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 84, $this->source); })()), "user", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 84, $this->source); })()), "user", array()), "nom", array()), "html", null, true);
            echo "</b></a>
                          <div id=\"demo\" class=\"collapse\">
                           <ul class=\"list-group\">
                            <li class=\"list-group-item\"><p><b style=\"color:#000000\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->source); })()), "user", array()), "email", array()), "html", null, true);
            echo "</b> </p><p><span><a href=\"#\"style=\"color:#096ea2;font-family:ubuntu;font-size:12px\" >profil Google+</a></span> - <span><a href=\"#\" style=\"color:#096ea2;font-family:ubuntu;font-size:12px\">Confidentialité</a></span></p></li>
                            <li class=\"list-group-item\"><a class=\"nav-link btn\"style=\"color:#000000\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a></li>
                          </ul>
                          </div>
                           </li>
                        ";
        } else {
            // line 93
            echo "                          <li><a href=\"news.html\"style=\"color:#696969\">Mode d'emploie</a></li>
                          <li><a href=\"causes.html\"style=\"color:#696969\">Causes</a></li>
                        <li class=\"nav-item ";
            // line 95
            if (array_key_exists("mainNavLogin", $context)) {
                echo "active";
            }
            echo "\">
                            <a class=\"nav-link\"style=\"color:#808080\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
                        </li>
                        <li class=\"probootstra-cta-button last\">
                          <a href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
            echo "\" class=\"btn\" style=\"background:#96bf31\">Démarrer une campagne</a>
                        </li> 
                        ";
        }
        // line 102
        echo "                  </ul>
          </div>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_section0($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section0"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section0"));

        // line 108
        echo "      <section class=\"probootstrap-hero\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/shutterstock_150330623.jpg"), "html", null, true);
        echo "\"  data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"probootstrap-slider-text probootstrap-animate\" data-animate-effect=\"fadeIn\" id=\"repertHeader\">
                <h1 class=\"probootstrap-heading probootstrap-animate\"><span style=\"color:#ffffff ! important\">Des campagnes gratuites au profit d'êtres et de causes qui vous sont chers</span></h1>
                
                 <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
        echo "\" class=\"btn \"style=\"background-color:#96bf31;color:#ffffff;height:45px; font-size:17px;\">Démarrer une campagne</a>
                
              </div>
            </div>
          </div>
        </div>
        <div class=\"probootstrap-service-intro\" style=\"\">
          <div class=\"container\">
            <div class=\"probootstrap-service-intro-flex\" style=\"background-color:#053151;padding:20px\">
              <div class=\"item probootstrap-animate\" data-animate-effect=\"fadeIn\"style=\"background-color:#053151;\">
                <div class=\"icon\">
                  <i class=\"icon-wallet\"></i>
                </div>
                <div class=\"text\" >
                  <h2>Faire un Don</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href=\"#\">Apprendre encore plus</a></p>
                </div>
              </div>
              <div class=\"item probootstrap-animate\" data-animate-effect=\"fadeIn\"style=\"background-color:#053151;\">
                <div class=\"icon\">
                  <i class=\"icon-heart\"></i>
                </div>
                <div class=\"text\">
                  <h2>Devenir bénévole</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href=\"#\">Apprendre encore plus</a></p>
                </div>
              </div>
              <div class=\"item probootstrap-animate\" data-animate-effect=\"fadeIn\"style=\"background-color:#053151;\">
                <div class=\"icon\">
                  <i class=\"icon-graduation-cap\"></i>
                </div>
                <div class=\"text\">
                  <h2>Donner une bourse</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href=\"#\">Apprendre encore plus</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_campagne($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "campagne"));

        // line 160
        echo "      <section class=\"probootstrap-section\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <h2>Most Popular Causes</h2>
                </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <div class=\"probootstrap-image-text-block probootstrap-cause\">
                <figure>
                  <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1.jpg"), "html", null, true);
        echo "\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"probootstrap-cause-inner\">
                  <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-s2\" data-percent=\"99\"></div>
                  </div>

                  <div class=\"row mb30\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-raised\">Raised: <span class=\"money\">\$49,112</span></div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-goal\">Goal: <span class=\"money\">\$50,000</span></div>
                  </div>
                  
                  <h2><a href=\"#\">Help Children To Get Food</a></h2>
                  <div class=\"probootstrap-date\"><i class=\"icon-calendar\"></i> 2 hours remaining</div>  
                  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate quaerat maxime inventore.</p>
                  <p><a href=\"#\" class=\"btn btn-primary \"style=\"background-color:#96bf31;border-color:#96bf31\">Faire un Don!</a></p>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <div class=\"probootstrap-image-text-block  probootstrap-cause\">
                <figure>
                  <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1.jpg"), "html", null, true);
        echo "\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"probootstrap-cause-inner\">
                  <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-s2\" data-percent=\"95\"></div>
                  </div>

                  <div class=\"row mb30\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-raised\">Raised: <span class=\"money\">\$28,127</span></div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-goal\">Goal: <span class=\"money\">\$30,000</span></div>
                  </div>
                  
                  <h2><a href=\"#\">Help Children To Get Health</a></h2>
                  <div class=\"probootstrap-date\"><i class=\"icon-calendar\"></i> 7 days remaining</div>  
                  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate quaerat maxime inventore.</p>
                  <p><a href=\"#\" class=\"btn btn-primary \"style=\"background-color:#96bf31;border-color:#96bf31\">Faire un Don!</a></p>
                </div>
              </div>
            </div>
           
            <div class=\"clearfix visible-sm-block visible-xs-block\"></div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <div class=\"probootstrap-image-text-block  probootstrap-cause\">
                <figure>
                  <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1.jpg"), "html", null, true);
        echo "\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"probootstrap-cause-inner\">
                  <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-s2\" data-percent=\"19\"></div>
                  </div>
                    
                  <div class=\"row mb30\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-raised\">Raised: <span class=\"money\">\$21,973</span></div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-goal\">Goal: <span class=\"money\">\$100,000</span></div>
                  </div>
                   
                  <h2><a href=\"#\">Help Children To Get Education</a></h2>
                  <div class=\"probootstrap-date\"><i class=\"icon-calendar\"></i> 15 days remaining</div>  
                  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate quaerat maxime inventore.</p>
                  <p><a href=\"#\" class=\"btn btn-primary \"style=\"background-color:#96bf31;border-color:#96bf31\">Faire un Don!</a></p>
                </div>
              </div>
            </div>
          </div>
         
          <div class=\"row\">
            <div class=\"col-md-12\">
              <p>Save the future for the little children by donating. <a href=\"causes.html\">See all causes</a></p>
            </div>
          </div>
        </div>
      </section>
      
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 250
    public function block_section1($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 251
        echo "      
      <section class=\"probootstrap-section probootstrap-bg \" style=\"background-image: url(img/hero_bg_bw_1.jpg);background-color:#053151\"  data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <h2>DERNIERS DONS</h2>
              <p class=\"lead\"></p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-3\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/1.jpg"), "html", null, true);
        echo "\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>Linda Reyez</h3>
                  <p class=\"donated\">Donated <span class=\"money\">\$500.00</span></p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"img/person_1.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>Chris Worth</h3>
                  <p class=\"donated\">Donated <span class=\"money\">\$1,500.00</span></p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"img/person_5.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>Janet Morris</h3>
                  <p class=\"donated\">Donated <span class=\"money\">\$250.00</span></p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"img/person_7.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>Jessa Sy</h3>
                  <p class=\"donated\">Donated <span class=\"money\">\$400.00</span></p>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </section>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 309
    public function block_section2($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 310
        echo "      ";
        // line 324
        echo "  ";
        $this->displayBlock('categorie', $context, $blocks);
        // line 401
        echo "      </section>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 324
    public function block_categorie($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorie"));

        // line 325
        echo "      <section class=\"probootstrap-section\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-3 probootstrap-animate\">
              <h3>News</h3>
              <ul class=\"probootstrap-news\">
                <li>
                  <span class=\"probootstrap-date\">July 16, 2017</span>
                  <h3><a href=\"#\">Porro provident suscipit</a></h3>
                  <p>Provident sequi assumenda quaerat minima mollitia at ducimus atque aliquam a ad dolore.</p>
                  <p><span class=\"probootstrap-meta\"><a href=\"#\"><i class=\"icon-redo2\"></i> 14</a> <a href=\"#\"><i class=\"icon-bubbles2\"></i> 7</a></span></p>
                </li>
                <li>
                  <span class=\"probootstrap-date\">July 16, 2017</span>
                  <h3><a href=\"#\">Voluptatem dolor pariatur</a></h3>
                  <p>Provident sequi assumenda quaerat minima mollitia at ducimus atque aliquam a ad dolore.</p>
                  <p><span class=\"probootstrap-meta\"><a href=\"#\"><i class=\"icon-redo2\"></i> 14</a> <a href=\"#\"><i class=\"icon-bubbles2\"></i> 7</a></span></p>
                </li>
              </ul>
              <p><a href=\"#\" class=\"btn btn-primary\">View all news</a></p>
            </div>
            <div class=\"col-md-6 probootstrap-animate\">
              <h3>About Us</h3>
              <p><img src=\"img/img_sm_2.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\"></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem porro impedit, perferendis similique voluptatum reiciendis laudantium iusto ad, eligendi non minus nemo tempora? Non velit ab quasi at dignissimos fugiat.</p>
              <p><a href=\"#\" class=\"btn btn-primary\">Learn More</a></p>
            </div>
            
           
            <div class=\"col-md-3 probootstrap-animate\">
              <h3>Gallery</h3>
              
              <div class=\"owl-carousel owl-carousel-fullwidth\">
                <div class=\"item\">
                  <a href=\"img/img_sq_1.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_1.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_2.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_2.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_3.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_3.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_4.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_4.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_5.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_5.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_6.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_6.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_7.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_7.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
              </div>

              <p class=\"text-center\"><a href=\"#\" class=\"btn btn-primary\">View all gallery</a></p>

            </div>
          </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 403
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 404
        echo "      <footer class=\"probootstrap-footer probootstrap-bg\" style=\"background-color:#053151\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4 probootstrap-animate\">
              <div class=\"probootstrap-footer-widget\">
                <h3>A Propos</h3>
                <p>FundingEdu est une plateform de financement participatif qui offre aux étudiants de Crowdedu à collecter de l'argent pour payer leurs formations</p>
                <ul class=\"probootstrap-footer-social\">
                  <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-github\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-youtube\"></i></a></li>
                </ul>
              </div>
            </div>
           
            <div class=\"col-md-4 probootstrap-animate\">
              <div class=\"probootstrap-footer-widget\">
                <h3>Contact</h3>
                <ul class=\"probootstrap-contact-info\">
                  <li><i class=\"icon-location2\"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                  <li><i class=\"icon-mail\"></i><span>info@domain.com</span></li>
                  <li><i class=\"icon-phone2\"></i><span>+123 456 7890</span></li>
                </ul>
                
              </div>
            </div>

            <div class=\"col-md-4 probootstrap-animate\">
              <div class=\"probootstrap-footer-widget\">
                <h3>Dons</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit omnis nam obcaecati placeat. Repellendus omnis in praesentium molestiae rem eligendi.</p>
                ";
        // line 439
        echo "              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class=\"probootstrap-copyright\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-8 text-left\">
                <p>&copy; 2017 <a href=\"https://uicookies.com/\">uiCookies:Charity</a>. All Rights Reserved. Designed &amp; Developed with <i class=\"icon icon-heart\"></i> by <a href=\"https://uicookies.com/\">uicookies.com</a></p>
              </div>
              <div class=\"col-md-4 probootstrap-back-to-top\">
                <p><a href=\"#\" class=\"js-backtotop\">Back to top <i class=\"icon-arrow-long-up\"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 461
    public function block_script($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 462
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
            <script>
        \$(document).ready(function(){
          \$(window).on( 'scroll', function(){
            if(\$('#header').offset().top > \$('#repertHeader').offset().top) {
              \$('#header').css({'background': '#ffffff'});
            } else {
              \$('#header').css({'background': 'none'});
            }
          });
        });
      </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontend.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  730 => 464,  726 => 463,  721 => 462,  712 => 461,  681 => 439,  645 => 404,  636 => 403,  551 => 325,  542 => 324,  531 => 401,  528 => 324,  526 => 310,  517 => 309,  462 => 264,  447 => 251,  438 => 250,  397 => 219,  369 => 194,  343 => 171,  330 => 160,  321 => 159,  267 => 115,  256 => 108,  247 => 107,  235 => 102,  229 => 99,  223 => 96,  217 => 95,  213 => 93,  205 => 88,  201 => 87,  193 => 84,  185 => 79,  178 => 78,  176 => 75,  174 => 74,  170 => 72,  168 => 69,  156 => 42,  145 => 33,  136 => 32,  125 => 16,  121 => 14,  117 => 13,  113 => 12,  110 => 11,  101 => 10,  90 => 477,  87 => 461,  84 => 403,  81 => 309,  78 => 250,  75 => 159,  73 => 107,  69 => 105,  67 => 32,  51 => 18,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>FundingEdu &mdash;Financement participatif</title>
    <meta name=\"description\" content=\"Free Bootstrap Theme by uicookies.com\">
    <meta name=\"keywords\" content=\"free website templates, free bootstrap themes, free template, free bootstrap, free website template\">
    {% block link %}
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/styles-merged.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/custom.css')}}\">
     {# <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\"> #}
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
        {% endblock %}
       <style>
      .head {
        width: 100vw;
        padding: 5px 40px;
      }
    </style>
    <!--[if lt IE 9]>
      <script src=\"js/vendor/html5shiv.min.js\"></script>
      <script src=\"js/vendor/respond.min.js\"></script>
    <![endif]-->
  </head> 
 
  <body>

     {% block div %}
      <nav class=\"navbar navbar-default probootstrap-navbar\" style=\"position: fixed; background: none;\">
        <div class=\"header head\" id=\"header\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\" aria-controls=\"navbar\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-header\" href=\"{{path('front')}}\"><img src=\"{{asset('assets/img/Logo-CrowdEdu-Africa-1.png')}}\" style=\"width:120px; margin-top:25px;margin-left:40px;\"></a>
          </div>
     
          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
             
           
              {# <li class=\"dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"style=\"color:#000000\">Pages</a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"about.html\">About Us</a></li>
                  <li><a href=\"testimonial.html\">Testimonial</a></li>
                  <li><a href=\"cause-single.html\">Cause Single</a></li>
                  <li><a href=\"gallery.html\">Gallery</a></li>
                  <li class=\"dropdown-submenu dropdown\">
                    <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><span>Sub Menu</span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"#\">Second Level Menu</a></li>
                      <li><a href=\"#\">Second Level Menu</a></li>
                      <li><a href=\"#\">Second Level Menu</a></li>
                      <li><a href=\"#\">Second Level Menu</a></li>
                    </ul>
                  </li>
                  <li><a href=\"news.html\">News</a></li>
                  <li><a href=\"contact.html\">Contact</a></li>
                </ul>
              </li> #}
               {# <li class=\"nav-item {% if mainNavLogin is defined %}active{% endif %}\">
                            <a class=\"nav-link\"style=\"color:#000000\" href=\"{{path('login')}}\">Connexion</a>
                        </li> #}
                        <!--Navbar-->

                        {% if app.user != null %}
                        {# <li class=\"nav-item {% if mainNavLogin is defined %}active{% endif %}\">
                            <a class=\"nav-link\"style=\"color:#000000\" href=\"{{path('security_logout')}}\">Déconnexion</a>
                        </li> #}
                        <li class=\"nav-item {% if mainNavLogin is defined %}active{% endif %}\">
                            <a class=\"nav-link\"style=\"color:#696969\" href=\"{{path('mapage')}}\">Mes campagnes</a>
                        </li>
                             <li><a href=\"news.html\"style=\"color:#696969\">Mode d'emploie</a></li>
                               <li><a href=\"causes.html\"style=\"color:#696969\">Causes</a></li>
                           <li class=\"nav-item\">
                         <a href=\"#demo\" data-toggle=\"collapse\"style=\"color:#696969\"> Bonjour <b> {{app.user.prenom}} {{app.user.nom}}</b></a>
                          <div id=\"demo\" class=\"collapse\">
                           <ul class=\"list-group\">
                            <li class=\"list-group-item\"><p><b style=\"color:#000000\">{{app.user.email}}</b> </p><p><span><a href=\"#\"style=\"color:#096ea2;font-family:ubuntu;font-size:12px\" >profil Google+</a></span> - <span><a href=\"#\" style=\"color:#096ea2;font-family:ubuntu;font-size:12px\">Confidentialité</a></span></p></li>
                            <li class=\"list-group-item\"><a class=\"nav-link btn\"style=\"color:#000000\" href=\"{{path('security_logout')}}\">Déconnexion</a></li>
                          </ul>
                          </div>
                           </li>
                        {% else %}
                          <li><a href=\"news.html\"style=\"color:#696969\">Mode d'emploie</a></li>
                          <li><a href=\"causes.html\"style=\"color:#696969\">Causes</a></li>
                        <li class=\"nav-item {% if mainNavLogin is defined %}active{% endif %}\">
                            <a class=\"nav-link\"style=\"color:#808080\" href=\"{{path('login')}}\">Connexion</a>
                        </li>
                        <li class=\"probootstra-cta-button last\">
                          <a href=\"{{ path('user_registration')}}\" class=\"btn\" style=\"background:#96bf31\">Démarrer une campagne</a>
                        </li> 
                        {% endif %}
                  </ul>
          </div>
          {% endblock %}
        </div>
      </nav>
      {% block section0 %}
      <section class=\"probootstrap-hero\" style=\"background-image: url({{asset('assets/img/shutterstock_150330623.jpg')}}\"  data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"probootstrap-slider-text probootstrap-animate\" data-animate-effect=\"fadeIn\" id=\"repertHeader\">
                <h1 class=\"probootstrap-heading probootstrap-animate\"><span style=\"color:#ffffff ! important\">Des campagnes gratuites au profit d'êtres et de causes qui vous sont chers</span></h1>
                
                 <a href=\"{{ path('user_registration')}}\" class=\"btn \"style=\"background-color:#96bf31;color:#ffffff;height:45px; font-size:17px;\">Démarrer une campagne</a>
                
              </div>
            </div>
          </div>
        </div>
        <div class=\"probootstrap-service-intro\" style=\"\">
          <div class=\"container\">
            <div class=\"probootstrap-service-intro-flex\" style=\"background-color:#053151;padding:20px\">
              <div class=\"item probootstrap-animate\" data-animate-effect=\"fadeIn\"style=\"background-color:#053151;\">
                <div class=\"icon\">
                  <i class=\"icon-wallet\"></i>
                </div>
                <div class=\"text\" >
                  <h2>Faire un Don</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href=\"#\">Apprendre encore plus</a></p>
                </div>
              </div>
              <div class=\"item probootstrap-animate\" data-animate-effect=\"fadeIn\"style=\"background-color:#053151;\">
                <div class=\"icon\">
                  <i class=\"icon-heart\"></i>
                </div>
                <div class=\"text\">
                  <h2>Devenir bénévole</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href=\"#\">Apprendre encore plus</a></p>
                </div>
              </div>
              <div class=\"item probootstrap-animate\" data-animate-effect=\"fadeIn\"style=\"background-color:#053151;\">
                <div class=\"icon\">
                  <i class=\"icon-graduation-cap\"></i>
                </div>
                <div class=\"text\">
                  <h2>Donner une bourse</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href=\"#\">Apprendre encore plus</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {% endblock %}
     {% block campagne %}
      <section class=\"probootstrap-section\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <h2>Most Popular Causes</h2>
                </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <div class=\"probootstrap-image-text-block probootstrap-cause\">
                <figure>
                  <img src=\"{{asset('assets/img/1.jpg')}}\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"probootstrap-cause-inner\">
                  <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-s2\" data-percent=\"99\"></div>
                  </div>

                  <div class=\"row mb30\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-raised\">Raised: <span class=\"money\">\$49,112</span></div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-goal\">Goal: <span class=\"money\">\$50,000</span></div>
                  </div>
                  
                  <h2><a href=\"#\">Help Children To Get Food</a></h2>
                  <div class=\"probootstrap-date\"><i class=\"icon-calendar\"></i> 2 hours remaining</div>  
                  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate quaerat maxime inventore.</p>
                  <p><a href=\"#\" class=\"btn btn-primary \"style=\"background-color:#96bf31;border-color:#96bf31\">Faire un Don!</a></p>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <div class=\"probootstrap-image-text-block  probootstrap-cause\">
                <figure>
                  <img src=\"{{asset('assets/img/1.jpg')}}\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"probootstrap-cause-inner\">
                  <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-s2\" data-percent=\"95\"></div>
                  </div>

                  <div class=\"row mb30\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-raised\">Raised: <span class=\"money\">\$28,127</span></div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-goal\">Goal: <span class=\"money\">\$30,000</span></div>
                  </div>
                  
                  <h2><a href=\"#\">Help Children To Get Health</a></h2>
                  <div class=\"probootstrap-date\"><i class=\"icon-calendar\"></i> 7 days remaining</div>  
                  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate quaerat maxime inventore.</p>
                  <p><a href=\"#\" class=\"btn btn-primary \"style=\"background-color:#96bf31;border-color:#96bf31\">Faire un Don!</a></p>
                </div>
              </div>
            </div>
           
            <div class=\"clearfix visible-sm-block visible-xs-block\"></div>
            <div class=\"col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <div class=\"probootstrap-image-text-block  probootstrap-cause\">
                <figure>
                  <img src=\"{{asset('assets/img/1.jpg')}}\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"probootstrap-cause-inner\">
                  <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-s2\" data-percent=\"19\"></div>
                  </div>
                    
                  <div class=\"row mb30\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-raised\">Raised: <span class=\"money\">\$21,973</span></div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6 probootstrap-goal\">Goal: <span class=\"money\">\$100,000</span></div>
                  </div>
                   
                  <h2><a href=\"#\">Help Children To Get Education</a></h2>
                  <div class=\"probootstrap-date\"><i class=\"icon-calendar\"></i> 15 days remaining</div>  
                  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate quaerat maxime inventore.</p>
                  <p><a href=\"#\" class=\"btn btn-primary \"style=\"background-color:#96bf31;border-color:#96bf31\">Faire un Don!</a></p>
                </div>
              </div>
            </div>
          </div>
         
          <div class=\"row\">
            <div class=\"col-md-12\">
              <p>Save the future for the little children by donating. <a href=\"causes.html\">See all causes</a></p>
            </div>
          </div>
        </div>
      </section>
      
      {% endblock %}
        {% block section1 %}
      
      <section class=\"probootstrap-section probootstrap-bg \" style=\"background-image: url(img/hero_bg_bw_1.jpg);background-color:#053151\"  data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <h2>DERNIERS DONS</h2>
              <p class=\"lead\"></p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-3\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"{{asset('assets/img/1.jpg')}}\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>Linda Reyez</h3>
                  <p class=\"donated\">Donated <span class=\"money\">\$500.00</span></p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"img/person_1.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>Chris Worth</h3>
                  <p class=\"donated\">Donated <span class=\"money\">\$1,500.00</span></p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"img/person_5.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>Janet Morris</h3>
                  <p class=\"donated\">Donated <span class=\"money\">\$250.00</span></p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"img/person_7.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>Jessa Sy</h3>
                  <p class=\"donated\">Donated <span class=\"money\">\$400.00</span></p>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </section>
      {% endblock %}
      {% block section2 %}
      {# <section class=\"probootstrap-half\" >
        <div class=\"image\">
          <div class=\"image-bg\">
            <img src=\"{{asset('assets/img/img_sq_5_big.jpg')}}\" alt=\"Free Bootstrap Template by uicookies.com\">
          </div>
        </div>
        <div class=\"text\">
          <div class=\"probootstrap-animate\">
            <h3>Sucess Stories</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sunt excepturi dicta ex, placeat ab esse, iure harum eaque fuga asperiores distinctio amet temporibus enim illum molestiae neque ad similique possimus repellendus velit! Quaerat nihil nemo, aliquam consectetur debitis illum. Excepturi cum, quaerat minus odit dolorem recusandae, debitis reprehenderit voluptate?</p>
            <p><a href=\"#\" class=\"btn btn-primary btn-lg\">Read More</a></p>
          </div>
        </div>
      </section> #}
  {% block categorie %}
      <section class=\"probootstrap-section\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-3 probootstrap-animate\">
              <h3>News</h3>
              <ul class=\"probootstrap-news\">
                <li>
                  <span class=\"probootstrap-date\">July 16, 2017</span>
                  <h3><a href=\"#\">Porro provident suscipit</a></h3>
                  <p>Provident sequi assumenda quaerat minima mollitia at ducimus atque aliquam a ad dolore.</p>
                  <p><span class=\"probootstrap-meta\"><a href=\"#\"><i class=\"icon-redo2\"></i> 14</a> <a href=\"#\"><i class=\"icon-bubbles2\"></i> 7</a></span></p>
                </li>
                <li>
                  <span class=\"probootstrap-date\">July 16, 2017</span>
                  <h3><a href=\"#\">Voluptatem dolor pariatur</a></h3>
                  <p>Provident sequi assumenda quaerat minima mollitia at ducimus atque aliquam a ad dolore.</p>
                  <p><span class=\"probootstrap-meta\"><a href=\"#\"><i class=\"icon-redo2\"></i> 14</a> <a href=\"#\"><i class=\"icon-bubbles2\"></i> 7</a></span></p>
                </li>
              </ul>
              <p><a href=\"#\" class=\"btn btn-primary\">View all news</a></p>
            </div>
            <div class=\"col-md-6 probootstrap-animate\">
              <h3>About Us</h3>
              <p><img src=\"img/img_sm_2.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\"></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem porro impedit, perferendis similique voluptatum reiciendis laudantium iusto ad, eligendi non minus nemo tempora? Non velit ab quasi at dignissimos fugiat.</p>
              <p><a href=\"#\" class=\"btn btn-primary\">Learn More</a></p>
            </div>
            
           
            <div class=\"col-md-3 probootstrap-animate\">
              <h3>Gallery</h3>
              
              <div class=\"owl-carousel owl-carousel-fullwidth\">
                <div class=\"item\">
                  <a href=\"img/img_sq_1.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_1.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_2.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_2.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_3.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_3.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_4.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_4.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_5.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_5.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_6.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_6.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
                <div class=\"item\">
                  <a href=\"img/img_sq_7.jpg\" class=\"image-popup\">
                    <img src=\"img/img_sq_7.jpg\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                  </a>
                </div>
              </div>

              <p class=\"text-center\"><a href=\"#\" class=\"btn btn-primary\">View all gallery</a></p>

            </div>
          </div>
        </div>
        {% endblock %}
      </section>
      {% endblock %}
    {% block footer %}
      <footer class=\"probootstrap-footer probootstrap-bg\" style=\"background-color:#053151\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4 probootstrap-animate\">
              <div class=\"probootstrap-footer-widget\">
                <h3>A Propos</h3>
                <p>FundingEdu est une plateform de financement participatif qui offre aux étudiants de Crowdedu à collecter de l'argent pour payer leurs formations</p>
                <ul class=\"probootstrap-footer-social\">
                  <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-github\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                  <li><a href=\"#\"><i class=\"icon-youtube\"></i></a></li>
                </ul>
              </div>
            </div>
           
            <div class=\"col-md-4 probootstrap-animate\">
              <div class=\"probootstrap-footer-widget\">
                <h3>Contact</h3>
                <ul class=\"probootstrap-contact-info\">
                  <li><i class=\"icon-location2\"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                  <li><i class=\"icon-mail\"></i><span>info@domain.com</span></li>
                  <li><i class=\"icon-phone2\"></i><span>+123 456 7890</span></li>
                </ul>
                
              </div>
            </div>

            <div class=\"col-md-4 probootstrap-animate\">
              <div class=\"probootstrap-footer-widget\">
                <h3>Dons</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit omnis nam obcaecati placeat. Repellendus omnis in praesentium molestiae rem eligendi.</p>
                {# <p><a href=\"{{path('fairedon')}}\" class=\"btn btn-primary\"style=\"background:#96bf31;border-color:#96bf31\">Faire un Don maintenant</a></p> #}
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class=\"probootstrap-copyright\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-8 text-left\">
                <p>&copy; 2017 <a href=\"https://uicookies.com/\">uiCookies:Charity</a>. All Rights Reserved. Designed &amp; Developed with <i class=\"icon icon-heart\"></i> by <a href=\"https://uicookies.com/\">uicookies.com</a></p>
              </div>
              <div class=\"col-md-4 probootstrap-back-to-top\">
                <p><a href=\"#\" class=\"js-backtotop\">Back to top <i class=\"icon-arrow-long-up\"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    {% endblock %}
    {% block script %}
      <script src=\"{{asset('assets/js/scripts.min.js')}}\"></script>
      <script src=\"{{asset('assets/js/main.min.js')}}\"></script>
      <script src=\"{{asset('assets/js/custom.js')}}\"></script>
            <script>
        \$(document).ready(function(){
          \$(window).on( 'scroll', function(){
            if(\$('#header').offset().top > \$('#repertHeader').offset().top) {
              \$('#header').css({'background': '#ffffff'});
            } else {
              \$('#header').css({'background': 'none'});
            }
          });
        });
      </script>
    {% endblock %}
  </body>
</html>", "Frontend.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/Frontend.html.twig");
    }
}
