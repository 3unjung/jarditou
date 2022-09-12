<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/_header.html.twig */
class __TwigTemplate_f4c208d4116ce5ff5b216f25cfb9b6b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo "<header>
\t<div
\t\tclass=\"container\">
\t\t<!-- LOGO JARDITOU -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"text-center rounded\">
\t\t\t\t\t<a href=\"/\"><img class=\"img-fluid\" src=\"";
        // line 8
        echo "assets/img/jarditou.logo.png";
        echo "\" style=\"text-decoration: none;\" alt=\"Logo de Jarditou\"></a>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END LOGO JARDITOU -->

\t\t<!-- NAVIGATIONS -->
\t\t<nav class=\"navbar navbar-expand-lg  bg-success rounded\">
\t\t\t<button
\t\t\t\tclass=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<!-- <span class=\"navbar-toggler-icon\"></span> /!\\ icon boostrap  -->
\t\t\t\t<i class=\"fa fa-navicon\"></i>

\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarNavAltMarkup\">
\t\t\t\t<div class=\"navbar-nav\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 25
        echo "/";
        echo "\">Home</a>
\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>

\t\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            echo "/login";
            echo "\">Login</a>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 32
            echo "/register";
            echo "\">Register</a>

\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_crud_index");
        echo "\">Users</a>


\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<!-- END NAVIGATIONS -->

\t\t<!-- BANNER JARDITOU -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"/\"><img class=\"rounded\" style=\"width: 100%;\" src=\"";
        // line 46
        echo "assets/img/conseils.png";
        echo "\" alt=\"Maitre d'oeuvre de Jarditou\" id=\"banner-jarditou\"></a>

\t\t\t</div>
\t\t</div>
\t\t<!-- END BANNER JARDITOU -->

\t</div>


</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  97 => 35,  91 => 32,  86 => 31,  79 => 28,  76 => 27,  72 => 25,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
\t<div
\t\tclass=\"container\">
\t\t<!-- LOGO JARDITOU -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"text-center rounded\">
\t\t\t\t\t<a href=\"/\"><img class=\"img-fluid\" src=\"{{ 'assets/img/jarditou.logo.png' }}\" style=\"text-decoration: none;\" alt=\"Logo de Jarditou\"></a>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END LOGO JARDITOU -->

\t\t<!-- NAVIGATIONS -->
\t\t<nav class=\"navbar navbar-expand-lg  bg-success rounded\">
\t\t\t<button
\t\t\t\tclass=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<!-- <span class=\"navbar-toggler-icon\"></span> /!\\ icon boostrap  -->
\t\t\t\t<i class=\"fa fa-navicon\"></i>

\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarNavAltMarkup\">
\t\t\t\t<div class=\"navbar-nav\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ \"/\" }}\">Home</a>
\t\t\t\t\t{# if user is connected #}
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path(\"app_logout\") }}\">Logout</a>

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ \"/login\" }}\">Login</a>
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ \"/register\" }}\">Register</a>

\t\t\t\t\t{% endif %}
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_users_crud_index') }}\">Users</a>


\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<!-- END NAVIGATIONS -->

\t\t<!-- BANNER JARDITOU -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"/\"><img class=\"rounded\" style=\"width: 100%;\" src=\"{{ \"assets/img/conseils.png\" }}\" alt=\"Maitre d'oeuvre de Jarditou\" id=\"banner-jarditou\"></a>

\t\t\t</div>
\t\t</div>
\t\t<!-- END BANNER JARDITOU -->

\t</div>


</header>
", "partials/_header.html.twig", "/home/quinella/Downloads/jarditou/templates/partials/_header.html.twig");
    }
}
