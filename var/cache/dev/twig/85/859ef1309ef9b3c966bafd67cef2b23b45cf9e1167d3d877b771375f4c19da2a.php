<?php

/* admin.html.twig */
class __TwigTemplate_62ccd10a829a5ed48071d5b6cf97915c411ecd162995e048bed3256420b4e55c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'div1' => array($this, 'block_div1'),
            'div2' => array($this, 'block_div2'),
            'div3' => array($this, 'block_div3'),
            'reso_sociaux' => array($this, 'block_reso_sociaux'),
            'users' => array($this, 'block_users'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Stellar Admin</title>
  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/flag-icon-css/css/flag-icon.min.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
        
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/chartist/dist/chartist.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/style.css"), "html", null, true);
        echo "\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/favicon.png"), "html", null, true);
        echo "\" />
   <style>
      .titre {
       color:#96bf31
      }
      #chartLegend{
       color:#053651
      }
    </style>
</head>
<body>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    ";
        // line 36
        $this->displayBlock('nav', $context, $blocks);
        // line 172
        echo "    <!-- partial -->
    ";
        // line 173
        $this->displayBlock('div1', $context, $blocks);
        // line 263
        echo "        <!-- partial -->
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card overflow-hidden dashboard-curved-chart\">
                ";
        // line 270
        echo "                  ";
        // line 271
        echo "                    ";
        // line 272
        echo "                    ";
        // line 273
        echo "                      ";
        // line 287
        echo "                    ";
        // line 288
        echo "                  ";
        // line 289
        echo "                ";
        // line 290
        echo "                ";
        // line 291
        echo "              </div>
            </div>
          </div>
          ";
        // line 295
        echo "          <!-- ROW ENDS -->
          ";
        // line 296
        $this->displayBlock('div2', $context, $blocks);
        // line 344
        echo "          <!-- ROW ENDS -->
          ";
        // line 345
        $this->displayBlock('div3', $context, $blocks);
        // line 397
        echo "                    ";
        $this->displayBlock('reso_sociaux', $context, $blocks);
        // line 434
        echo "          <!-- ROW ENDS -->
          ";
        // line 435
        $this->displayBlock('users', $context, $blocks);
        // line 533
        echo "        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
          <div class=\"container-fluid clearfix\">
            <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © 2018 <a href=\"http://www.bootstrapdash.com/\" target=\"_blank\">Bootstrapdash</a>. All rights reserved.</span>
            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"mdi mdi-heart text-danger\"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/popper.js/dist/umd/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/node_modules/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/misc.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/js/dashboard.js"), "html", null, true);
        echo "\"></script>
  <!-- End custom js for this page-->
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 37
        echo "    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper\">
        <a class=\"navbar-brand brand-logo\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/Logo-CrowdEdu-Africa-1.png"), "html", null, true);
        echo "\"style =\"width:150px\"alt=\"logo\"></a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/logo_mini.svg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center\">
        <p class=\"page-name d-none d-lg-block\">Bonjour ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "user", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
        <ul class=\"navbar-nav ml-lg-auto\">
          <li class=\"nav-item\">
            <form class=\"mt-2 mt-md-0 d-none d-lg-block search-input\">
              <div class=\"input-group\">
                <span class=\"input-group-addon d-flex align-items-center\"><i class=\"icon-magnifier icons\"></i></span>
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
              </div>
            </form>
          </li>
            ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "user", array()) != null)) {
            // line 54
            echo "            <li class=\"nav-item ";
            if (array_key_exists("mainNavLogin", $context)) {
                echo "active";
            }
            echo "\">
                  <a class=\"nav-link\"style=\"color:#808080\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
            </li>
            ";
        }
        // line 58
        echo "          ";
        // line 107
        echo "          ";
        // line 154
        echo "          <li class=\"nav-item lang-dropdown d-none d-sm-block\">
            ";
        // line 158
        echo "          </li>
          <li class=\"nav-item d-none d-sm-block profile-img\">
            <a class=\"nav-link profile-image\" href=\"#\" data-toggle=\"dropdown\">
              <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/images/faces/toff.jpg"), "html", null, true);
        echo "\" alt=\"profile-img\" >
              <span class=\"online-status online bg-success\"></span>
            </a>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"icon-menu icons\"></span>
        </button>
      </div>
    </nav>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_div1($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div1"));

        // line 174
        echo "<div class=\"container-fluid page-body-wrapper\" >
      <div class=\"row row-offcanvas row-offcanvas-right\" style=\"background:#053651\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\"style=\"background:#053651\">
          <ul class=\"nav\">
            <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">GENERAL</span>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                <span class=\"menu-title\">Dashboard</span>
                <i class=\"icon-speedometer menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">PROJET</span>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet_index");
        echo "\">
                <span class=\"menu-title\">Les Projets</span>
                <i class=\"icon-wrench menu-icon\"></i>
              </a>
            </li>
            ";
        // line 200
        echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                <span class=\"menu-title titre\"> CATEGORIES</span>
                <i class=\"icon-layers menu-icon\"></i>
              </a>
              <div class=\"collapse\" id=\"ui-basic\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Comptabilité</a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Bureautique</a></li>
                </ul>
              </div>
            </li>
            ";
        // line 218
        echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/icons/font-awesome.html\">
                <span class=\"menu-title\">Icons</span>
                <i class=\"icon-globe menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">DON</span>
            </li>
           <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("don_index");
        echo "\">
                <span class=\"menu-title\"> Les dons</span>
                <i class=\"icon-grid menu-icon\"></i>
              </a>
            </li>
            ";
        // line 236
        echo "            ";
        // line 242
        echo "            ";
        // line 245
        echo "            ";
        // line 260
        echo "          </ul>
        </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 296
    public function block_div2($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div2"));

        // line 297
        echo "          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card performance-cards\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col d-flex flex-row justify-content-center align-items-center\">
                      <div class=\"wrapper icon-circle \"style=\"background:#96bf31\">
                        <i class=\"fas fa-project-diagram\"></i>
                      </div>
                      <div class=\"wrapper text-wrapper\">
                        <p class=\"text-dark\">8954</p>
                        <p>Totals projets</p>
                      </div>
                    </div>
                    <div class=\"col d-flex flex-row justify-content-center align-items-center\">
                      <div class=\"wrapper icon-circle \"style=\"background:#096ea2\">
                       <i class=\"fas fa-money-bill-wave-alt\"></i>
                      </div>
                      <div class=\"wrapper text-wrapper\">
                        <p class=\"text-dark\">7841</p>
                        <p>Totals dons</p>
                      </div>
                    </div>
                    <div class=\"col d-flex flex-row justify-content-center align-items-center\" >
                      <div class=\"wrapper icon-circle \"style=\"background:#053651\" >
                        <i class=\"fas fa-users\"></i>
                      </div>
                      <div class=\"wrapper text-wrapper\">
                        <p class=\"text-dark\">6521</p>
                        <p>Total Etudiants</p>
                      </div>
                    </div>
                    ";
        // line 330
        echo "                      ";
        // line 337
        echo "                    ";
        // line 338
        echo "                  </div>
                </div>
              </div>
            </div>
          </div>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 345
    public function block_div3($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div3"));

        // line 346
        echo "          <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 grid-margin\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title mb-0\">Statistiques</h4>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block pt-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">\$10,200</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\" ml-1 mb-0\">Mis à jour: 9:10am</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-gray\">Sur 89 projets.</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" px-4 py-2 rounded\" style=\"background:#96bf31\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-buffer text-white icon-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 grid-margin\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title mb-0\">Ordre du jour</h4>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block pt-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">\$2256</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\" ml-1 mb-0\">Mis à jour 05:42pm</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-gray\">hé, déjeunons ensemble</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" px-4 py-2 rounded\" style=\"background:#096ea2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-wallet text-white icon-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 397
    public function block_reso_sociaux($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reso_sociaux"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reso_sociaux"));

        // line 398
        echo "          <div class=\"row section social-section\">
            <div class=\"col-lg-4 grid-margin stretch-card\">
              <div class=\"social-card w-100 bg-facebook\" style=\"background:#053651\">
                <div class=\"social-icon\">
                  <i class=\"fab fa-facebook\"></i>
                </div>
                <div class=\"content\" >
                  <p>+ 1500</p>
                  <p>Facebook Likes</p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 grid-margin stretch-card\">
              <div class=\"social-card w-100 bg-twitter\"  style=\"background:#96bf31\">
                <div class=\"social-icon\">
                  <i class=\"fab fa-twitter-square\"></i>
                </div>
                <div class=\"content\">
                  <p>+574</p>
                  <p>Twitter Followers</p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 grid-margin stretch-card\">
              <div class=\"social-card w-100 bg-dribbble\"  style=\"background:#096ea2\">
                <div class=\"social-icon\">
                  <i class=\"fab fa-dribbble-square\"></i>
                </div>
                <div class=\"content\">
                  <p>+450</p>
                  <p>Dribble Shots</p>
                </div>
              </div>
            </div>
          </div>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 435
    public function block_users($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "users"));

        // line 436
        echo "          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h2 class=\"card-title\">Manage Users</h2>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start Date</th>
                          <th>Assign</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2009/10/09</td>
                          <td>\$162,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2009/10/09</td>
                          <td>\$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2004/12/02</td>
                          <td>\$62,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2011/07/25</td>
                          <td>\$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>32</td>
                          <td>2004/12/02</td>
                          <td>\$62,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>31</td>
                          <td>2011/07/25</td>
                          <td>\$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>Tokyo</td>
                          <td>39</td>
                          <td>2004/12/02</td>
                          <td>\$62,700</td>
                        </tr>
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
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 436,  583 => 435,  538 => 398,  529 => 397,  469 => 346,  460 => 345,  445 => 338,  443 => 337,  441 => 330,  407 => 297,  398 => 296,  386 => 260,  384 => 245,  382 => 242,  380 => 236,  372 => 228,  360 => 218,  346 => 200,  338 => 192,  326 => 183,  315 => 174,  306 => 173,  285 => 161,  280 => 158,  277 => 154,  275 => 107,  273 => 58,  267 => 55,  260 => 54,  258 => 53,  243 => 43,  237 => 40,  231 => 39,  227 => 37,  218 => 36,  203 => 564,  197 => 561,  193 => 560,  187 => 557,  183 => 556,  179 => 555,  173 => 552,  169 => 551,  165 => 550,  146 => 533,  144 => 435,  141 => 434,  138 => 397,  136 => 345,  133 => 344,  131 => 296,  128 => 295,  123 => 291,  121 => 290,  119 => 289,  117 => 288,  115 => 287,  113 => 273,  111 => 272,  109 => 271,  107 => 270,  100 => 263,  98 => 173,  95 => 172,  93 => 36,  77 => 23,  72 => 21,  66 => 18,  62 => 17,  54 => 12,  50 => 11,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Stellar Admin</title>
  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/admin/node_modules/mdi/css/materialdesignicons.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/admin/node_modules/simple-line-icons/css/simple-line-icons.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets/admin/node_modules/flag-icon-css/css/flag-icon.min.css')}}\">
   <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
        
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/admin/node_modules/chartist/dist/chartist.min.css')}}\" />
  <link rel=\"stylesheet\" href=\"{{asset('assets/admin/node_modules/jvectormap/jquery-jvectormap.css')}}\" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/admin/css/style.css')}}\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"{{asset('assets/admin/images/favicon.png')}}\" />
   <style>
      .titre {
       color:#96bf31
      }
      #chartLegend{
       color:#053651
      }
    </style>
</head>
<body>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    {% block nav %}
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper\">
        <a class=\"navbar-brand brand-logo\" href=\"{{path('front')}}\"><img src=\"{{asset('assets/admin/images/Logo-CrowdEdu-Africa-1.png')}}\"style =\"width:150px\"alt=\"logo\"></a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"{{asset('assets/admin/images/logo_mini.svg')}}\" alt=\"logo\"></a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center\">
        <p class=\"page-name d-none d-lg-block\">Bonjour {{app.user.prenom}} {{app.user.nom}}</p>
        <ul class=\"navbar-nav ml-lg-auto\">
          <li class=\"nav-item\">
            <form class=\"mt-2 mt-md-0 d-none d-lg-block search-input\">
              <div class=\"input-group\">
                <span class=\"input-group-addon d-flex align-items-center\"><i class=\"icon-magnifier icons\"></i></span>
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
              </div>
            </form>
          </li>
            {% if app.user != null %}
            <li class=\"nav-item {% if mainNavLogin is defined %}active{% endif %}\">
                  <a class=\"nav-link\"style=\"color:#808080\" href=\"{{path('security_logout')}}\">Déconnexion</a>
            </li>
            {% endif %}
          {# <li class=\"nav-item dropdown mail-dropdown\">
            <a class=\"nav-link count-indicator\" id=\"MailDropdown\"href=\"#\" data-toggle=\"dropdown\">
               <i class=\"icon-envelope-letter icons\"></i>
                <span class=\"count bg-danger\"></span>
            </a>
            <div class=\"dropdown-menu navbar-dropdown mail-notification dropdownAnimation\" aria-labelledby=\"MailDropdown\">
              <a class=\"dropdown-item\" href=\"#\">
                <div class=\"sender-img\">
                  <img src=\"{{asset('assets/admin/images/faces/face6.jpg')}}\" alt=\"\">
                  <span class=\"badge badge-success\">&nbsp;</span>
                </div>
                <div class=\"sender\">
                  <p class=\"Sende-name\">John Doe</p>
                  <p class=\"Sender-message\">Hey, We have a meeting planned at the end of the day.</p>
                </div>
              </a>
              <a class=\"dropdown-item\" href=\"#\">
                <div class=\"sender-img\">
                  <img src=\"{{asset('assets/admin/images/faces/face2.jpg')}}\" alt=\"\">
                  <span class=\"badge badge-success\">&nbsp;</span>
                </div>
                <div class=\"sender\">
                  <p class=\"Sende-name\">Leanne Jones</p>
                  <p class=\"Sender-message\">Can we schedule a call this afternoon?</p>
                </div>
              </a>
              <a class=\"dropdown-item\" href=\"#\">
                <div class=\"sender-img\">
                  <img src=\"{{asset('assets/admin/images/faces/face3.jpg')}}\" alt=\"\">
                  <span class=\"badge badge-primary\">&nbsp;</span>
                </div>
                <div class=\"sender\">
                  <p class=\"Sende-name\">Stella</p>
                  <p class=\"Sender-message\">Great presentation the other day. Keep up the good work!</p>
                </div>
              </a>
              <a class=\"dropdown-item\" href=\"#\">
                <div class=\"sender-img\">
                  <img src=\"{{asset('assets/admin/images/faces/face4.jpg')}}\" alt=\"\">
                  <span class=\"badge badge-warning\">&nbsp;</span>
                </div>
                <div class=\"sender\">
                  <p class=\"Sende-name\">James Brown</p>
                  <p class=\"Sender-message\">Need the updates of the project at the end of the week.</p>
                </div>
              </a>
              <a href=\"#\" class=\"dropdown-item view-all\">View all</a>
            </div>
          </li> #}
          {# <li class=\"nav-item dropdown notification-dropdown\">
            <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"icon-speech icons\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu navbar-dropdown preview-list notification-drop-down dropdownAnimation\" aria-labelledby=\"notificationDropdown\">
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon\">
                    <i class=\"icon-info mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <p class=\"preview-subject font-weight-medium\">Application Error</p>
                  <p class=\"font-weight-light small-text\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon\">
                    <i class=\"icon-speech mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <p class=\"preview-subject\">Settings</p>
                  <p class=\"font-weight-light small-text\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon\">
                    <i class=\"icon-envelope mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <p class=\"preview-subject\">New user registration</p>
                  <p class=\"font-weight-light small-text\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li> #}
          <li class=\"nav-item lang-dropdown d-none d-sm-block\">
            {# <a class=\"nav-link\" href=\"#\">
              <p class=\"mb-0\">English <i class=\"flag-icon flag-icon-gb\"></i></p>
            </a> #}
          </li>
          <li class=\"nav-item d-none d-sm-block profile-img\">
            <a class=\"nav-link profile-image\" href=\"#\" data-toggle=\"dropdown\">
              <img src=\"{{asset('assets/admin/images/faces/toff.jpg')}}\" alt=\"profile-img\" >
              <span class=\"online-status online bg-success\"></span>
            </a>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"icon-menu icons\"></span>
        </button>
      </div>
    </nav>
    {% endblock %}
    <!-- partial -->
    {% block div1 %}
<div class=\"container-fluid page-body-wrapper\" >
      <div class=\"row row-offcanvas row-offcanvas-right\" style=\"background:#053651\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\"style=\"background:#053651\">
          <ul class=\"nav\">
            <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">GENERAL</span>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('dashboard')}}\">
                <span class=\"menu-title\">Dashboard</span>
                <i class=\"icon-speedometer menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">PROJET</span>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('projet_index')}}\">
                <span class=\"menu-title\">Les Projets</span>
                <i class=\"icon-wrench menu-icon\"></i>
              </a>
            </li>
            {# <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">Les catégories</span>
            </li> #}
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                <span class=\"menu-title titre\"> CATEGORIES</span>
                <i class=\"icon-layers menu-icon\"></i>
              </a>
              <div class=\"collapse\" id=\"ui-basic\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Comptabilité</a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Bureautique</a></li>
                </ul>
              </div>
            </li>
            {# <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('don_index')}}\">
                <span class=\"menu-title\"> Les dons</span>
                <i class=\"icon-grid menu-icon\"></i>
              </a>
            </li> #}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/icons/font-awesome.html\">
                <span class=\"menu-title\">Icons</span>
                <i class=\"icon-globe menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">DON</span>
            </li>
           <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('don_index')}}\">
                <span class=\"menu-title\"> Les dons</span>
                <i class=\"icon-grid menu-icon\"></i>
              </a>
            </li>
            {# <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">DATA REPRESENTAION</span>
            </li> #}
            {# <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/charts/flot-chart.html\">
                <span class=\"menu-title\">Charts</span>
                <i class=\"icon-pie-chart menu-icon\"></i>
              </a>
            </li> #}
            {# <li class=\"nav-item nav-category\">
              <span class=\"nav-link titre\">SAMPLE PAGES</span>
            </li> #}
            {# <li class=\"nav-item\">
              <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                <span class=\"menu-title\">General Pages</span>
                <i class=\"icon-bubbles menu-icon\"></i>
              </a>
              <div class=\"collapse\" id=\"auth\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Login </a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register.html\"> Register </a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-404.html\"> 404 </a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-500.html\"> 500 </a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/blank-page.html\"> Blank Page </a></li>
                </ul>
              </div>
            </li> #}
          </ul>
        </nav>
        {% endblock %}
        <!-- partial -->
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card overflow-hidden dashboard-curved-chart\">
                {# <div class=\"card-body mx-3\">
                  <h2 class=\"card-title border-bottom-none\">Recent Movement</h2> #}
                  {# <div class=\"align-items-center mb-5 justify-content-between d-lg-flex d-xl-flex d-md-block d-block\"> #}
                    {# <div id=\"chartLegend\"></div> #}
                    {# <div class=\"nav-wrapper d-inline-block mt-4 mt-lg-0\"> #}
                      {# <ul class=\"nav nav-pills\">
                        <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"#\">Week</a>
                        </li>
                        <li class=\"nav-item\">
                          <a class=\"nav-link active\" href=\"#\">Month</a>
                        </li>
                        <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"#\">Year</a>
                        </li>
                        <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"#\">Today</a>
                        </li>
                      </ul> #}
                    {# </div> #}
                  {# </div> #}
                {# </div> #}
                {# <div  class=\"float-chart float-chart-mini\"></div> #}
              </div>
            </div>
          </div>
          {# {% endblock %} #}
          <!-- ROW ENDS -->
          {% block div2 %}
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card performance-cards\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col d-flex flex-row justify-content-center align-items-center\">
                      <div class=\"wrapper icon-circle \"style=\"background:#96bf31\">
                        <i class=\"fas fa-project-diagram\"></i>
                      </div>
                      <div class=\"wrapper text-wrapper\">
                        <p class=\"text-dark\">8954</p>
                        <p>Totals projets</p>
                      </div>
                    </div>
                    <div class=\"col d-flex flex-row justify-content-center align-items-center\">
                      <div class=\"wrapper icon-circle \"style=\"background:#096ea2\">
                       <i class=\"fas fa-money-bill-wave-alt\"></i>
                      </div>
                      <div class=\"wrapper text-wrapper\">
                        <p class=\"text-dark\">7841</p>
                        <p>Totals dons</p>
                      </div>
                    </div>
                    <div class=\"col d-flex flex-row justify-content-center align-items-center\" >
                      <div class=\"wrapper icon-circle \"style=\"background:#053651\" >
                        <i class=\"fas fa-users\"></i>
                      </div>
                      <div class=\"wrapper text-wrapper\">
                        <p class=\"text-dark\">6521</p>
                        <p>Total Etudiants</p>
                      </div>
                    </div>
                    {# <div class=\"col d-flex flex-row justify-content-center align-items-center\">  #}
                      {# <div class=\"wrapper icon-circle bg-primary\">
                        <i class=\"icon-check icons\"></i>
                      </div>
                      <div class=\"wrapper text-wrapper\">
                        <p class=\"text-dark\">325</p>
                        <p>Total visits</p>
                      </div> #}
                    {# </div>  #}
                  </div>
                </div>
              </div>
            </div>
          </div>
          {% endblock %}
          <!-- ROW ENDS -->
          {% block div3 %}
          <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 grid-margin\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title mb-0\">Statistiques</h4>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block pt-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">\$10,200</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\" ml-1 mb-0\">Mis à jour: 9:10am</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-gray\">Sur 89 projets.</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" px-4 py-2 rounded\" style=\"background:#96bf31\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-buffer text-white icon-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 grid-margin\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title mb-0\">Ordre du jour</h4>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block pt-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">\$2256</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\" ml-1 mb-0\">Mis à jour 05:42pm</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-gray\">hé, déjeunons ensemble</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" px-4 py-2 rounded\" style=\"background:#096ea2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-wallet text-white icon-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    {% endblock %}
                    {% block reso_sociaux %}
          <div class=\"row section social-section\">
            <div class=\"col-lg-4 grid-margin stretch-card\">
              <div class=\"social-card w-100 bg-facebook\" style=\"background:#053651\">
                <div class=\"social-icon\">
                  <i class=\"fab fa-facebook\"></i>
                </div>
                <div class=\"content\" >
                  <p>+ 1500</p>
                  <p>Facebook Likes</p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 grid-margin stretch-card\">
              <div class=\"social-card w-100 bg-twitter\"  style=\"background:#96bf31\">
                <div class=\"social-icon\">
                  <i class=\"fab fa-twitter-square\"></i>
                </div>
                <div class=\"content\">
                  <p>+574</p>
                  <p>Twitter Followers</p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 grid-margin stretch-card\">
              <div class=\"social-card w-100 bg-dribbble\"  style=\"background:#096ea2\">
                <div class=\"social-icon\">
                  <i class=\"fab fa-dribbble-square\"></i>
                </div>
                <div class=\"content\">
                  <p>+450</p>
                  <p>Dribble Shots</p>
                </div>
              </div>
            </div>
          </div>
          {% endblock %}
          <!-- ROW ENDS -->
          {% block users %}
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h2 class=\"card-title\">Manage Users</h2>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start Date</th>
                          <th>Assign</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2009/10/09</td>
                          <td>\$162,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2009/10/09</td>
                          <td>\$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2004/12/02</td>
                          <td>\$62,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2011/07/25</td>
                          <td>\$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>32</td>
                          <td>2004/12/02</td>
                          <td>\$62,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>31</td>
                          <td>2011/07/25</td>
                          <td>\$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>Tokyo</td>
                          <td>39</td>
                          <td>2004/12/02</td>
                          <td>\$62,700</td>
                        </tr>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
          <div class=\"container-fluid clearfix\">
            <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © 2018 <a href=\"http://www.bootstrapdash.com/\" target=\"_blank\">Bootstrapdash</a>. All rights reserved.</span>
            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"mdi mdi-heart text-danger\"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src=\"{{asset('assets/admin/node_modules/jquery/dist/jquery.min.js')}}\"></script>
  <script src=\"{{asset('assets/admin/node_modules/popper.js/dist/umd/popper.min.js')}}\"></script>
  <script src=\"{{asset('assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=\"{{asset('assets/admin/node_modules/flot/jquery.flot.js')}}\"></script>
  <script src=\"{{asset('assets/admin/node_modules/flot/jquery.flot.resize.js')}}\"></script>
  <script src=\"{{asset('assets/admin/node_modules/flot.curvedlines/curvedLines.js')}}\"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=\"{{asset('assets/admin/js/off-canvas.js')}}\"></script>
  <script src=\"{{asset('assets/admin/js/misc.js')}}\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"{{asset('assets/admin/js/dashboard.js')}}\"></script>
  <!-- End custom js for this page-->
</body>

</html>", "admin.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/admin.html.twig");
    }
}
