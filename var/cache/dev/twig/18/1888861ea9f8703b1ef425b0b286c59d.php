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

/* partials/_footer.html.twig */
class __TwigTemplate_718fa815bb65452ef78f53fc22ee0284 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{#}
<!-- Footer -->
<footer>
\t<div class=\"container-fluid footer-container fixed-bottom\">
\t\t<div class=\"footer text-md-left rounded\">
\t\t\t<div class=\"row\" style=\"background-color: #116611;\">
\t\t\t\t<h4 style=\"color: white;\">Plus d'informations sur notre</h4>
\t\t\t\t<div class=\"col-md-6 col-lg-9 text-center text-md-right\">
\t\t\t\t\t<a class=\"mr-3\" href=\"https://www.facebook.com/eunjungsp\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"https://github.com/3unjung?tab=repositories\">
\t\t\t\t\t\t<i class=\"fab fa-github\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Grid row -->
\t\t\t<div
\t\t\t\tclass=\"row\">
\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-6 mt-md-0 mt-3\">
\t\t\t\t\t<br>
\t\t\t\t\t<!-- Content -->
\t\t\t\t\t<h5 class=\"text-uppercase\">À propos de
\t\t\t\t\t\t<a href=\"/\">Jarditou</a>
\t\t\t\t\t</h5>
\t\t\t\t\t<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, nobis consequatur! Suscipit
\t\t\t\t\t\t                        facere amet, necessitatibus dolorem distinctio odio ea tempora sunt dolores beatae! Officia
\t\t\t\t\t\t                        excepturi, repellendus enim pariatur illo recusandae?
\t\t\t\t\t\t                        Harum vero nulla recusandae doloremque in provident dolorem repudiandae dignissimos, omnis
\t\t\t\t\t\t                        eligendi
\t\t\t\t\t\t                        tempore, sed rem animi consectetur illum dolor ipsum esse numquam libero. Fuga, exercitationem
\t\t\t\t\t\t                        voluptatum nam mollitia quasi dicta!
\t\t\t\t\t\t                        Fugit magni doloremque ipsam explicabo enim ad voluptatum nemo animi quaerat sequi dolores, cum.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<!-- Grid column -->

\t\t\t\t<hr
\t\t\t\tclass=\"clearfix w-100 d-md-none pb-3\">
\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-3 mb-md-0 mb-3\">
\t\t\t\t\t<br>
\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<h5 class=\"text-uppercase\">Plan du site</h5>

\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#index \">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#catalogue \">Nos produits</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#register \">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t\t<!-- Grid column -->
\t\t\t\t<!-- Grid column -->
\t\t\t\t<div class=\"col-md-3 mb-md-0 mb-3\">
\t\t\t\t\t<br>
\t\t\t\t\t<!-- Links -->
\t\t\t\t\t<h5 class=\"text-uppercase\">Liens utiles</h5>

\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#!\">Nous contacté</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#!\">Horaires</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#!\">Mentions légales</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- Grid column -->


\t\t\t</div>
\t\t\t<!-- Grid row -->
\t\t\t<!-- Copyright -->
\t\t\t<div class=\"footer-copyright text-center py-3\">
\t\t\t\t<p class=\"mr-2\">© 2020 Copyright
\t\t\t\t</p>
\t\t\t\t<!-- MarginRight 4-->
\t\t\t\t<strong>
\t\t\t\t\t<a href=\"/\">Jarditou</a>
\t\t\t\t</strong>
\t\t\t</div>
\t\t\t<!-- Copyright -->
\t\t</div>
\t\t<!-- Footer Links -->

\t</div>
\t<!-- Footer Links -->


</footer>
<!-- Footer -->
#}", "partials/_footer.html.twig", "/home/quinella/Downloads/jarditou/templates/partials/_footer.html.twig");
    }
}
