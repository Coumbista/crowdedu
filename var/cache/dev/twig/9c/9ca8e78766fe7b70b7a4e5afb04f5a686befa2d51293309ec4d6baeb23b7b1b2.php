<?php

/* projet/show.html.twig */
class __TwigTemplate_1476f8dc69a597992477623b5d41108fc736b6a452b5e68b383b0c417b605b71 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Projet</title>

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
        echo "    <h1>Projet</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 16, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Budjet</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 20, $this->source); })()), "budjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TitreProjet</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 24, $this->source); })()), "titreProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 28, $this->source); })()), "photo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Video</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 32, $this->source); })()), "video", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 36, $this->source); })()), "date", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 36, $this->source); })()), "date", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new Twig_Error_Runtime('Variable "projet" does not exist.', 43, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "projet/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  117 => 43,  112 => 41,  104 => 36,  97 => 32,  90 => 28,  83 => 24,  76 => 20,  69 => 16,  62 => 12,  54 => 6,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<title>Projet</title>

{% block body %}
    <h1>Projet</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ projet.id }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ projet.description }}</td>
            </tr>
            <tr>
                <th>Budjet</th>
                <td>{{ projet.budjet }}</td>
            </tr>
            <tr>
                <th>TitreProjet</th>
                <td>{{ projet.titreProjet }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ projet.photo }}</td>
            </tr>
            <tr>
                <th>Video</th>
                <td>{{ projet.video }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ projet.date ? projet.date|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('projet_index') }}\">back to list</a>

    <a href=\"{{ path('projet_edit', {'id': projet.id}) }}\">edit</a>

    {{ include('projet/_delete_form.html.twig') }}
{% endblock %}", "projet/show.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/projet/show.html.twig");
    }
}
