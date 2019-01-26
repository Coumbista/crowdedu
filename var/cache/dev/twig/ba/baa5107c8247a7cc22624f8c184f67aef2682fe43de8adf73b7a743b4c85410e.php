<?php

/* dashboard/don/show.html.twig */
class __TwigTemplate_5f8970cf0e941e27e03c1d4cbd36cbad4dff6c62e7a5176e93999fa67a686305 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "dashboard/don/show.html.twig", 1);
        $this->blocks = array(
            'users' => array($this, 'block_users'),
            'reso_sociaux' => array($this, 'block_reso_sociaux'),
            'div3' => array($this, 'block_div3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/don/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/don/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_users($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_reso_sociaux($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reso_sociaux"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reso_sociaux"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_div3($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div3"));

        // line 5
        echo "
    <h1>Don</h1>

    <table class=\"table\">
        <tbody>
            
            <tr>
                <th>Montant</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["don"]) || array_key_exists("don", $context) ? $context["don"] : (function () { throw new Twig_Error_Runtime('Variable "don" does not exist.', 13, $this->source); })()), "montant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["don"]) || array_key_exists("don", $context) ? $context["don"] : (function () { throw new Twig_Error_Runtime('Variable "don" does not exist.', 17, $this->source); })()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["don"]) || array_key_exists("don", $context) ? $context["don"] : (function () { throw new Twig_Error_Runtime('Variable "don" does not exist.', 21, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["don"]) || array_key_exists("don", $context) ? $context["don"] : (function () { throw new Twig_Error_Runtime('Variable "don" does not exist.', 25, $this->source); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["don"]) || array_key_exists("don", $context) ? $context["don"] : (function () { throw new Twig_Error_Runtime('Variable "don" does not exist.', 29, $this->source); })()), "date", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["don"]) || array_key_exists("don", $context) ? $context["don"] : (function () { throw new Twig_Error_Runtime('Variable "don" does not exist.', 29, $this->source); })()), "date", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"row\">
    <div class=\"col-lg-6\">
    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_index");
        echo "\" class=\"btn\" style=\"background:#053651;color:#ffffff ! important\">Retour</a>
    </div>
     <div class=\"col-lg-6\" >
    ";
        // line 38
        echo twig_include($this->env, $context, "dashboard/don/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/don/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  136 => 35,  127 => 29,  120 => 25,  113 => 21,  106 => 17,  99 => 13,  89 => 5,  80 => 4,  63 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}
{% block users %}{% endblock %}
{% block reso_sociaux %}{% endblock %}
{% block div3 %}

    <h1>Don</h1>

    <table class=\"table\">
        <tbody>
            
            <tr>
                <th>Montant</th>
                <td>{{ don.montant }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ don.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ don.prenom }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ don.email }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ don.date ? don.date|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>
    <div class=\"row\">
    <div class=\"col-lg-6\">
    <a href=\"{{ path('don_index') }}\" class=\"btn\" style=\"background:#053651;color:#ffffff ! important\">Retour</a>
    </div>
     <div class=\"col-lg-6\" >
    {{ include('dashboard/don/_delete_form.html.twig') }}
    </div>
{% endblock %}", "dashboard/don/show.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/dashboard/don/show.html.twig");
    }
}
