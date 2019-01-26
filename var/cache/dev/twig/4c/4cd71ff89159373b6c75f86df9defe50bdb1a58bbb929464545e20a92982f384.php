<?php

/* dashboard/index.html.twig */
class __TwigTemplate_a2dcba3db340539323ec4d76fb3c61824f9dc8ae4957908cfe6e22568d2b7d79 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "dashboard/index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_users($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        // line 4
        echo " <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h2 class=\"card-title\">Gérer les utilisateurs </h2><a href=\"#\"style=\"background-color:#096ea2;font-family:ubuntu;color:#ffffff ! important\"class=\"btn\" >Ajouter  <i class=\"fas fa-plus-square\" style=\"color:#ffffff ! important\"></i></a>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                           
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Email</th>
                          <th>Identifiant</th>      
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "                        <tr>
                          <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</td>                          
                          <td>
                          <span><i class=\"far fa-eye\"style=\"color:#096ea2\"></i></span>
                          <span><i class=\"fas fa-edit\"style=\"color:#96bf31\"></i></span>
                          <span><i class=\"fas fa-trash-alt\" style=\"color:#DC143C\"></i></span>
                          </td>
                        </tr>  
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  73 => 22,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}  

 {% block users %}
 <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h2 class=\"card-title\">Gérer les utilisateurs </h2><a href=\"#\"style=\"background-color:#096ea2;font-family:ubuntu;color:#ffffff ! important\"class=\"btn\" >Ajouter  <i class=\"fas fa-plus-square\" style=\"color:#ffffff ! important\"></i></a>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                           
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Email</th>
                          <th>Identifiant</th>      
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       {% for user in users %}
                        <tr>
                          <td>{{user.nom}}</td>
                          <td>{{user.prenom}}</td>
                          <td>{{user.email}}</td>
                          <td>{{user.username}}</td>                          
                          <td>
                          <span><i class=\"far fa-eye\"style=\"color:#096ea2\"></i></span>
                          <span><i class=\"fas fa-edit\"style=\"color:#96bf31\"></i></span>
                          <span><i class=\"fas fa-trash-alt\" style=\"color:#DC143C\"></i></span>
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
 {% endblock %}", "dashboard/index.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/dashboard/index.html.twig");
    }
}
