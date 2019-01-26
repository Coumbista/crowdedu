<?php

/* front/edit_Projet.html.twig */
class __TwigTemplate_cf84f6772a28fcb14b7d4d2c740fbf54e2420039a240adc13ed0d30a8b6b03f5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/edit_Projet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/edit_Projet.html.twig"));

        // line 2
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <body>
       <nav class=\"navbar navbar-default probootstrap-navbar\" style=\"background-color:#ffffff\">
        <div class=\"container\">
          <div class=\"navbar-header\">
            ";
        // line 17
        echo "              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-header\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo-CrowdEdu-Africa-1.png"), "html", null, true);
        echo "\" style=\"width:120px; margin-top:25px\"></a>
          </div>
     
        </div>        
      </nav>
      
      
<div class=\"container\"style=\"margin-top:100px;\">
  <div class=\"row\">
  <div class=\"col-lg-3\"></div>
      <div class=\"col-lg-6 col-md-4 col-sm-6 col-xs-6 col-xxs-12\">
      <div class=\"card\">
        <div class=\"card-header \"style=\"background-color:#96bf31;color:#ffffff;font-size:30px;font-family:ubuntu;text-align:center;height:70px;\">
         <span><b >Indiquer votre objectif ici</b></span>
        </div>
         <div class=\"card-body\">
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
                  ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "budjet", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                   ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "categorie", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "   
                  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "titre_projet", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                  ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                  ";
        // line 44
        echo "                   ";
        // line 45
        echo "          </div>  
            </div>
              <div class=\"card-footer text-muted\">
              <div class=\"row\">
                  <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                    <h4 class=\"card-title\"><button class=\"btn\" type=\"submit\"style=\"background-color:#96bf31;color:#ffffff;font-family:ubuntu;\">Envoyer</button></h4>
                    </div>
                    <div class=\"col-lg-4\"></div>
                  </div>
              </div>
            </div>           
              ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
            
            </div>     
            </div>
            <div class=\"col-lg-3\"></div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
   
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/edit_Projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 57,  95 => 45,  93 => 44,  89 => 42,  85 => 41,  81 => 40,  77 => 39,  73 => 38,  52 => 22,  45 => 17,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends 'Frontend.html.twig' %} #}
<!doctype html>
<html lang=\"en\">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <body>
       <nav class=\"navbar navbar-default probootstrap-navbar\" style=\"background-color:#ffffff\">
        <div class=\"container\">
          <div class=\"navbar-header\">
            {# <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\" aria-controls=\"navbar\"> #}
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-header\" href=\"{{path('front')}}\"><img src=\"{{asset('assets/img/Logo-CrowdEdu-Africa-1.png')}}\" style=\"width:120px; margin-top:25px\"></a>
          </div>
     
        </div>        
      </nav>
      
      
<div class=\"container\"style=\"margin-top:100px;\">
  <div class=\"row\">
  <div class=\"col-lg-3\"></div>
      <div class=\"col-lg-6 col-md-4 col-sm-6 col-xs-6 col-xxs-12\">
      <div class=\"card\">
        <div class=\"card-header \"style=\"background-color:#96bf31;color:#ffffff;font-size:30px;font-family:ubuntu;text-align:center;height:70px;\">
         <span><b >Indiquer votre objectif ici</b></span>
        </div>
         <div class=\"card-body\">
                {{ form_start(form) }}
                  {{ form_row(form.budjet,{'attr':{'class':'form-control'}})}}
                   {{ form_row(form.categorie,{'attr':{'class':'form-control'}}) }}   
                  {{ form_row(form.titre_projet,{'attr':{'class':'form-control'}}) }}
                  {{ form_row(form.description,{'attr':{'class':'form-control'}}) }}
                  {# {{ form_row(form.photo,{'attr':{'class':'form-control'}}) }}  #}
                   {# {{ form_row(form.video,{'attr':{'class':'form-control'}}) }}           #}
          </div>  
            </div>
              <div class=\"card-footer text-muted\">
              <div class=\"row\">
                  <div class=\"col-lg-4\"></div>
                    <div class=\"col-lg-4\">
                    <h4 class=\"card-title\"><button class=\"btn\" type=\"submit\"style=\"background-color:#96bf31;color:#ffffff;font-family:ubuntu;\">Envoyer</button></h4>
                    </div>
                    <div class=\"col-lg-4\"></div>
                  </div>
              </div>
            </div>           
              {{ form_end(form) }}
            
            </div>     
            </div>
            <div class=\"col-lg-3\"></div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
   
  </body>
</html>
", "front/edit_Projet.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/front/edit_Projet.html.twig");
    }
}
