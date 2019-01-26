<?php

/* projet/index.html.twig */
class __TwigTemplate_abc784d6ae7e1bec41a77276bf7e5a3bac47ca8452564400408f51ffc708ca74 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Projet index</title>

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Projet index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Budjet</th>
                <th>TitreProjet</th>
                <th>Photo</th>
                <th>Video</th>
                <th>Date</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new Twig_Error_Runtime('Variable "projets" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "budjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "titreProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "photo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "video", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["projet"], "date", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "date", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_show", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  131 => 41,  122 => 37,  113 => 33,  109 => 32,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  72 => 22,  54 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<title>Projet index</title>

{% block body %}
    <h1>Projet index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Budjet</th>
                <th>TitreProjet</th>
                <th>Photo</th>
                <th>Video</th>
                <th>Date</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td>{{ projet.id }}</td>
                <td>{{ projet.description }}</td>
                <td>{{ projet.budjet }}</td>
                <td>{{ projet.titreProjet }}</td>
                <td>{{ projet.photo }}</td>
                <td>{{ projet.video }}</td>
                <td>{{ projet.date ? projet.date|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('projet_show', {'id': projet.id}) }}\">show</a>
                    <a href=\"{{ path('projet_edit', {'id': projet.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('projet_new') }}\">Create new</a>
{% endblock %}", "projet/index.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/projet/index.html.twig");
    }
}
