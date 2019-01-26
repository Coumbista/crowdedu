<?php

/* front/index.html.twig */
class __TwigTemplate_38cc2902398b064f8434b042f84765e82c99432edbbb45877e795ac6f5a3d7eb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Frontend.html.twig", "front/index.html.twig", 1);
        $this->blocks = array(
            'campagne' => array($this, 'block_campagne'),
            'section1' => array($this, 'block_section1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_campagne($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "campagne"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "campagne"));

        // line 5
        echo "   ";
        // line 18
        echo "  <section class=\"probootstrap-section\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
                <h2>Causes les plus populaires</h2>
                            </div>
            </div>

         
            <div class=\"row\">
             ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projt"]) {
            // line 29
            echo "              <div class=\"col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate\" data-animate-effect=\"fadeIn\">
                <div class=\"probootstrap-image-text-block probootstrap-cause\" style=\"width:80%;height:300px\">
                  <figure>
                  <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("findID", array("id" => twig_get_attribute($this->env, $this->source, $context["projt"], "id", array()))), "html", null, true);
            echo "\"> <img src=\"data:photo/jpg;base64,";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projt"], "photo", array()), "html", null, true);
            echo "\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\" style=\"height:200px;width:80%\"></a>
                  </figure>
                  <div class=\"row mb30\">
                      <div class=\"col-md-6 col-sm-6 col-xs-6 \"></div>                    
                    </div>
                    <span><b>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projt"], "user", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projt"], "user", array()), "nom", array()), "html", null, true);
            echo "</b></span>
                    <span><h6><a href=\"#\" style=\"color:#000000;font-size:13px;font-family:ubuntu\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projt"], "titreProjet", array()), "html", null, true);
            echo "</a></h6></span>
                   <span> <strong style=\"font-size:14px;font-family:ubuntu\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projt"], "description", array()), "html", null, true);
            echo "</strong></span>
                    
                  <div class=\"probootstrap-cause-inner\">
                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-s2\" data-percent=\"1\">
                    </div>
                    </div>
                    
                    <div class=\"row mb30\">
                    <ul class=\"nav navbar-nav \">
                    <li>
                      <span>12500F<b>collecté sur</b></span></li>
                      <li><span>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projt"], "budjet", array()), "html", null, true);
            echo "F</span></li>
                      ";
            // line 53
            echo "                    </div>                          
                  <p><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("findID", array("id" => twig_get_attribute($this->env, $this->source, $context["projt"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary \"style=\"background-color:#96bf31;border-color:#96bf31\">Voir +!</a></p>
                  </div>
                </div>
              </div>   
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo " 
              <div class=\"row\"> 
              <div class=\"col-lg-4\"></div>
              <div class=\"col-lg-4\">             
                ";
        // line 63
        echo "              </div>
               <div class=\"col-lg-4\"></div>
                  </div>     
              </div>  
              <div class=\"navigation\">
              ";
        // line 68
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 68, $this->source); })()));
        echo "
                </div>     
        </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_section1($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 73
        echo "                   <section class=\"probootstrap-section probootstrap-bg \" style=\"background-image: url(img/hero_bg_bw_1.jpg);background-color:#053151\"  data-stellar-background-ratio=\"0.5\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <h2>DERNIERS DONS</h2>
              <p class=\"lead\"></p>
            </div>
          </div>
           
          ";
        // line 84
        echo "          ";
        // line 85
        echo "            ";
        // line 98
        echo "         
        ";
        // line 100
        echo "      </section>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 100,  181 => 98,  179 => 85,  177 => 84,  166 => 73,  157 => 72,  143 => 68,  136 => 63,  130 => 58,  119 => 54,  116 => 53,  112 => 51,  97 => 39,  93 => 38,  87 => 37,  77 => 32,  72 => 29,  68 => 28,  56 => 18,  54 => 5,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends 'Frontend.html.twig' %}
  {# {% block section3 %}{% endblock %} #}
  
  {% block campagne %}
   {# <section class=\"probootstrap-section\">
    <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-6 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
              <figure>
                 <object width=\"425\" height=\"344\" data=\"https://www.youtube.com/embed/cnex9vsyHYs\"></object>
                  </figure>
                  </div>
                  <div class=\"col-md-6 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
                  <p> cette video vous aiderez a faire un </p>
                  </div>
                  </div>
                  </div> #}
  <section class=\"probootstrap-section\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12 text-center section-heading probootstrap-animate\" data-animate-effect=\"fadeIn\">
                <h2>Causes les plus populaires</h2>
                            </div>
            </div>

         
            <div class=\"row\">
             {% for projt in projet %}
              <div class=\"col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate\" data-animate-effect=\"fadeIn\">
                <div class=\"probootstrap-image-text-block probootstrap-cause\" style=\"width:80%;height:300px\">
                  <figure>
                  <a href=\"{{path('findID', {'id':projt.id})}}\"> <img src=\"data:photo/jpg;base64,{{projt.photo}}\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\" style=\"height:200px;width:80%\"></a>
                  </figure>
                  <div class=\"row mb30\">
                      <div class=\"col-md-6 col-sm-6 col-xs-6 \"></div>                    
                    </div>
                    <span><b>{{ projt.user.prenom}} {{ projt.user.nom}}</b></span>
                    <span><h6><a href=\"#\" style=\"color:#000000;font-size:13px;font-family:ubuntu\">{{ projt.titreProjet}}</a></h6></span>
                   <span> <strong style=\"font-size:14px;font-family:ubuntu\">{{ projt.description }}</strong></span>
                    
                  <div class=\"probootstrap-cause-inner\">
                    <div class=\"progress\">
                      <div class=\"progress-bar progress-bar-s2\" data-percent=\"1\">
                    </div>
                    </div>
                    
                    <div class=\"row mb30\">
                    <ul class=\"nav navbar-nav \">
                    <li>
                      <span>12500F<b>collecté sur</b></span></li>
                      <li><span>{{projt.budjet}}F</span></li>
                      {# <div class=\"col-md-6 col-sm-6 col-xs-6 \"><span>{{projt.budjet}}Fcfa</span></div> #}
                    </div>                          
                  <p><a href=\"{{path('findID', {'id':projt.id})}}\" class=\"btn btn-primary \"style=\"background-color:#96bf31;border-color:#96bf31\">Voir +!</a></p>
                  </div>
                </div>
              </div>   
              {% endfor %} 
              <div class=\"row\"> 
              <div class=\"col-lg-4\"></div>
              <div class=\"col-lg-4\">             
                {# <a href=\"{{ path('user_registration')}}\" class=\"btn probootstra-cta-button \"style=\"background-color:#96bf31;color:#ffffff;height:40px;marggin-left:90px;\">Démarrer une campagne</a> #}
              </div>
               <div class=\"col-lg-4\"></div>
                  </div>     
              </div>  
              <div class=\"navigation\">
              {{ knp_pagination_render(projet) }}
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
           
          {# <div class=\"row\">
          {% for donate in don %} #}
          {# {{dump((donate.montant / donate.projet.budjet )* 100)}} #}
            {# <div class=\"col-md-3 col-sm-6 col-xs-6 col-xxs-12\">
              <div class=\"probootstrap-donors text-center probootstrap-animate\">
                <figure class=\"media\">
                  <img src=\"data:photo/jpg;base64,{{donate.projet.photo}}\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\">
                </figure>
                <div class=\"text\">
                  <h3>{{donate.projet.user.prenom}} {{donate.projet.user.nom}}</h3>
                  <p class=\"donated\">Donné <span class=\"money\">{{donate.montant}}</span></p>
                </div>
              </div>
            </div>
             {% endfor %} 
            </div>           #}
         
        {# </div> #}
      </section>
            {% endblock %}
            
  
          {# {% block categorie %}        

              {% endblock %} #}
", "front/index.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/front/index.html.twig");
    }
}
