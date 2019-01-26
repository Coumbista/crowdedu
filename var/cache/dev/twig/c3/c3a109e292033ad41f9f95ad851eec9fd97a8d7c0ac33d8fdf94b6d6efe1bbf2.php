<?php

/* dashboard/don/index.html.twig */
class __TwigTemplate_68ee705626459154877642d7d9f4d98a1ca75917e852d66365043f79157db5a5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 44
        $this->parent = $this->loadTemplate("admin.html.twig", "dashboard/don/index.html.twig", 44);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/don/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/don/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_reso_sociaux($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reso_sociaux"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reso_sociaux"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_div3($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div3"));

        // line 47
        echo "            <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h2 class=\"card-title\">Gérer les dons</h2>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                     <thead>
                        <tr>
                           
                         <th>Montant</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Porteur de projet</th>
                        <th>Date</th>
                        <th>Actions</th>
                                </tr>
                      </thead>
                      <tbody>
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dons"]) || array_key_exists("dons", $context) ? $context["dons"] : (function () { throw new Twig_Error_Runtime('Variable "dons" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["don"]) {
            // line 67
            echo "                        <tr>
                       
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["don"], "montant", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["don"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["don"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["don"], "projet", array()), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["don"], "projet", array()), "user", array()), "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["don"], "date", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["don"], "date", array()), "Y-m-d ")) : ("")), "html", null, true);
            echo "</td>
                          <td>
                          <span><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_show", array("id" => twig_get_attribute($this->env, $this->source, $context["don"], "id", array()))), "html", null, true);
            echo "\"><i class=\"far fa-eye\"style=\"color:#096ea2;font-size:18px\"></i></a></span>
                          <span> <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["don"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"style=\"color:#96bf31;font-size:18px\"></i></a></span>
                          <span><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["don"], "id", array()))), "html", null, true);
            echo "\"<i class=\"fas fa-trash-alt\" style=\"color:#DC143C;font-size:18px\"></i></a></span>
                          </td>
                        </tr> 
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                        <tr>
                            <td colspan=\"7\">Pas de dons</td>
                        </tr> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['don'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                     
                      </tbody>
                    </table>
                  </div>                  
                  <div class=\"d-flex align-items-center justify-content-between flex-wrap\">
                    <p class=\"mb-0\">Affiche 1 à 10 de 57 entrées</p>
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

    // line 108
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
        return "dashboard/don/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 108,  151 => 84,  142 => 81,  133 => 77,  129 => 76,  125 => 75,  120 => 73,  114 => 72,  110 => 71,  106 => 70,  102 => 69,  98 => 67,  93 => 66,  72 => 47,  63 => 46,  46 => 45,  15 => 44,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# <!DOCTYPE html>

<title>Don index</title>

{% block body %}
    <h1>Don index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Montant</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Date</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for don in dons %}
            <tr>
                <td>{{ don.id }}</td>
                <td>{{ don.montant }}</td>
                <td>{{ don.nom }}</td>
                <td>{{ don.prenom }}</td>
                <td>{{ don.email }}</td>
                <td>{{ don.date ? don.date|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('don_show', {'id': don.id}) }}\">show</a>
                    <a href=\"{{ path('don_edit', {'id': don.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('don_new') }}\">Create new</a>
{% endblock %} #}
{% extends 'admin.html.twig' %}
 {% block reso_sociaux %}{% endblock %}
            {% block div3 %}
            <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h2 class=\"card-title\">Gérer les dons</h2>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                     <thead>
                        <tr>
                           
                         <th>Montant</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Porteur de projet</th>
                        <th>Date</th>
                        <th>Actions</th>
                                </tr>
                      </thead>
                      <tbody>
                        {% for don in dons %}
                        <tr>
                       
                        <td>{{ don.montant }}</td>
                        <td>{{ don.nom }}</td>
                        <td>{{ don.prenom }}</td>
                        <td>{{ don.projet.user.nom }} {{ don.projet.user.prenom }}</td>
                        <td>{{ don.date ? don.date|date('Y-m-d ') : '' }}</td>
                          <td>
                          <span><a href=\"{{ path('don_show', {'id': don.id}) }}\"><i class=\"far fa-eye\"style=\"color:#096ea2;font-size:18px\"></i></a></span>
                          <span> <a href=\"{{ path('don_edit', {'id': don.id}) }}\"><i class=\"fas fa-edit\"style=\"color:#96bf31;font-size:18px\"></i></a></span>
                          <span><a href=\"{{ path('don_delete', {'id': don.id}) }}\"<i class=\"fas fa-trash-alt\" style=\"color:#DC143C;font-size:18px\"></i></a></span>
                          </td>
                        </tr> 
                                    {% else %}
                        <tr>
                            <td colspan=\"7\">Pas de dons</td>
                        </tr> 
                        {% endfor %}                     
                      </tbody>
                    </table>
                  </div>                  
                  <div class=\"d-flex align-items-center justify-content-between flex-wrap\">
                    <p class=\"mb-0\">Affiche 1 à 10 de 57 entrées</p>
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
           {% block users %}{% endblock %}", "dashboard/don/index.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/dashboard/don/index.html.twig");
    }
}
