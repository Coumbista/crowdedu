<?php

/* dashboard/projet.html.twig */
class __TwigTemplate_de5f5b0a59ac12d4d876aae60be542b488cb0eac54c9888ea8981dad5fafa7c4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "dashboard/projet.html.twig", 1);
        $this->blocks = array(
            'reso_sociaux' => array($this, 'block_reso_sociaux'),
            'div3' => array($this, 'block_div3'),
            'users' => array($this, 'block_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/projet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_reso_sociaux($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reso_sociaux"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reso_sociaux"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_div3($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div3"));

        // line 4
        echo "            <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h2 class=\"card-title\">Gérer les projets</h2>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                     <thead>
                        <tr>
                           
                          <th>Profil</th>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Somme à collecter</th>
                          <th>Projet</th>      
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new Twig_Error_Runtime('Variable "projets" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 24
            echo "                        <tr>
                        <td><img src=\"data:photo/jpg;base64,";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "photo", array()), "html", null, true);
            echo "\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\"></td>
                          <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "user", array()), "nom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["projet"], "user", array()), "prenom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "budjet", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "titreProjet", array()), "html", null, true);
            echo "</td>                          
                          <td>
                          ";
            // line 32
            echo "                          <span><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Editer</a></span>
                          ";
            // line 34
            echo "                                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\">
                                        <button class=\"btn btn-danger\" >Supprimer</button>
                                    </form>
                          </td>
                        </tr>  
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                     
                      </tbody>
                    </table>
                  </div>                  
                  <div class=\"d-flex align-items-center justify-content-between flex-wrap\">
                    <p class=\"mb-0\">Showing 1 to 10 of 57 entries</p>
                    <nav>
                      <ul class=\"pagination rounded-separated pagination-info mt-3\">
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"mdi mdi-chevron-left\"></i></a></li>
                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"mdi mdi-chevron-right\"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
        </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_users($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 65,  144 => 41,  132 => 36,  126 => 34,  121 => 32,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  97 => 24,  93 => 23,  72 => 4,  63 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}
 {% block reso_sociaux %}{% endblock %}
            {% block div3 %}
            <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h2 class=\"card-title\">Gérer les projets</h2>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                     <thead>
                        <tr>
                           
                          <th>Profil</th>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Somme à collecter</th>
                          <th>Projet</th>      
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       {% for projet in projets %}
                        <tr>
                        <td><img src=\"data:photo/jpg;base64,{{projet.photo}}\" alt=\"Free Bootstrap Template by uicookies.com\" class=\"img-responsive\"></td>
                          <td>{{projet.user.nom}}</td>
                          <td>{{projet.user.prenom}}</td>
                          <td>{{projet.budjet}}</td>
                          <td>{{projet.titreProjet}}</td>                          
                          <td>
                          {# <span><a href=\"{{ path('projet_show', {'id': projet.id}) }}\"><i class=\"far fa-eye\"style=\"color:#096ea2;font-size:18px\"></i></a></span> #}
                          <span><a href=\"{{ path('projet_edit', {'id': projet.id}) }}\" class=\"btn btn-success\">Editer</a></span>
                          {# <span><a href=\"#\"><i class=\"fas fa-trash-alt\" style=\"color:#DC143C;font-size:18px\"></i></a></span> #}
                                    <form method=\"post\" action=\"{{ path('projet_delete', {'id': projet.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ projet.id) }}\">
                                        <button class=\"btn btn-danger\" >Supprimer</button>
                                    </form>
                          </td>
                        </tr>  
                        {% endfor %}                     
                      </tbody>
                    </table>
                  </div>                  
                  <div class=\"d-flex align-items-center justify-content-between flex-wrap\">
                    <p class=\"mb-0\">Showing 1 to 10 of 57 entries</p>
                    <nav>
                      <ul class=\"pagination rounded-separated pagination-info mt-3\">
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"mdi mdi-chevron-left\"></i></a></li>
                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\"><i class=\"mdi mdi-chevron-right\"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
        </div>
            {% endblock %}
           {% block users %}{% endblock %}", "dashboard/projet.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/dashboard/projet.html.twig");
    }
}
