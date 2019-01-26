<?php

/* paiement/index.html.twig */
class __TwigTemplate_5e8a8d5dd9bb287f97e368eb0430593dc508c234b0efe00f2cc0644e72f8731f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>  
                <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <title>Title</title>
                        <link rel=\"stylesheet\" href=\"https://cdn.payexpresse.com/v1/payexpresse.min.css\">
                        <script
                                src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
                                integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
                                crossorigin=\"anonymous\"></script>
                        <script src=\"https://cdn.payexpresse.com/v1/payexpresse.min.js\"></script>
                    </head>
                    <body>
                        
                        <button class=\"buy\" onclick=\"buy(this)\" data-item-id=\"88\" >Acheter iphone (450000 XOF)
                        </button>
                        
                        <script>
                        
                        
                            function buy(btn) {
                                var selector = \$(btn);
                        
                                (new PayExpresse({
                                    item_id          :   selector.attr('data-item-id'),
                                })).withOption({
                                    requestTokenUrl           :   '<?= BASE_URL ?>/paiement',
                                    method              :   'POST',
                                    headers             :   {
                                        \"Accept\"          :    \"text/html\"
                                    },
                                    prensentationMode   :   PayExpresse.OPEN_IN_POPUP,
                                    didPopupClosed: function (is_completed, success_url, cancel_url) {
                                        window.location.href = is_completed === true ? success_url  : cancel_url;
                                    },
                                    willGetToken        :   function () {
                                        console.log(\"Je me prepare a obtenir un token\");
                                        selector.prop('disabled', true);
                                    },
                                    didGetToken         : function (token, redirectUrl) {
                                        console.log(\"Mon token est : \" +  token  + ' et url est ' + redirectUrl );
                                        selector.prop('disabled', false);
                                    },
                                    didReceiveError: function (error) {
                                        alert('erreur inconnu', error.toString());
                                        selector.prop('disabled', false);
                                    },
                                    didReceiveNonSuccessResponse: function (jsonResponse) {
                                        console.log('non success response ',jsonResponse);
                                        alert(jsonResponse.errors);
                                        selector.prop('disabled', false);
                                    }
                                }).send();
                        
                                //.send params are optional
                            }
                        </script>
                    </body>
                 </html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "paiement/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>  
                <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <title>Title</title>
                        <link rel=\"stylesheet\" href=\"https://cdn.payexpresse.com/v1/payexpresse.min.css\">
                        <script
                                src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
                                integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
                                crossorigin=\"anonymous\"></script>
                        <script src=\"https://cdn.payexpresse.com/v1/payexpresse.min.js\"></script>
                    </head>
                    <body>
                        
                        <button class=\"buy\" onclick=\"buy(this)\" data-item-id=\"88\" >Acheter iphone (450000 XOF)
                        </button>
                        
                        <script>
                        
                        
                            function buy(btn) {
                                var selector = \$(btn);
                        
                                (new PayExpresse({
                                    item_id          :   selector.attr('data-item-id'),
                                })).withOption({
                                    requestTokenUrl           :   '<?= BASE_URL ?>/paiement',
                                    method              :   'POST',
                                    headers             :   {
                                        \"Accept\"          :    \"text/html\"
                                    },
                                    prensentationMode   :   PayExpresse.OPEN_IN_POPUP,
                                    didPopupClosed: function (is_completed, success_url, cancel_url) {
                                        window.location.href = is_completed === true ? success_url  : cancel_url;
                                    },
                                    willGetToken        :   function () {
                                        console.log(\"Je me prepare a obtenir un token\");
                                        selector.prop('disabled', true);
                                    },
                                    didGetToken         : function (token, redirectUrl) {
                                        console.log(\"Mon token est : \" +  token  + ' et url est ' + redirectUrl );
                                        selector.prop('disabled', false);
                                    },
                                    didReceiveError: function (error) {
                                        alert('erreur inconnu', error.toString());
                                        selector.prop('disabled', false);
                                    },
                                    didReceiveNonSuccessResponse: function (jsonResponse) {
                                        console.log('non success response ',jsonResponse);
                                        alert(jsonResponse.errors);
                                        selector.prop('disabled', false);
                                    }
                                }).send();
                        
                                //.send params are optional
                            }
                        </script>
                    </body>
                 </html>", "paiement/index.html.twig", "/home/coumba/crowdedu/FundingEdu/templates/paiement/index.html.twig");
    }
}
