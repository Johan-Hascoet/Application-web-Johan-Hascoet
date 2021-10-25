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

/* basetemplate.html.twig */
class __TwigTemplate_b41264657349c2cb36e3b711a04b4505c70960c6a724459ca9c30eb631a51556 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'JS' => [$this, 'block_JS'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body >
        <div class=\"row justify-content-between\">
            <div class=\"col-2 text-white min-vh-100 border-end bg-dark\">
                <h3 class=\"text-center my-5\">Menu</h3>
                <hr class=\"my-5\">
                <nav class=\"nav nav-pills flex-column\">
                    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission");
        echo "\" class=\"nav-link my-3 text-white\">Missions</a>
                </nav>
                ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "                <nav class=\"nav nav-pills flex-column\">
                    <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent");
            echo "\" class=\"nav-link my-3 text-white\">Agents</a>
                    <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\" class=\"nav-link my-3 text-white\">Contacts</a>
                    <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cible");
            echo "\" class=\"nav-link my-3 text-white\">Cibles</a>
                    <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque");
            echo "\" class=\"nav-link my-3 text-white\">Planques</a>
                    <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nationnalite");
            echo "\" class=\"nav-link my-3 text-white\">Nationnalitées</a>
                    <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays");
            echo "\" class=\"nav-link my-3 text-white\">Pays</a>
                    <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specialite");
            echo "\" class=\"nav-link my-3 text-white\">Specialitées</a>
                </nav>
                ";
        }
        // line 37
        echo "                <hr class=\"my-5\">
                ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <div class=\"text-center\">
                        <a class=\"btn btn-light\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                            Déconnexion
                        </a>
                    </div>
                ";
        } else {
            // line 45
            echo "                    <div class=\"text-center\">
                        <a id=\"loginn\" class=\"btn btn-light\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                            Connexion
                        </a>
                    </div>
                ";
        }
        // line 51
        echo "            </div>

            <div class=\"col-10 bg-light\">
                <div class=\"row justify-content-around\">
                    <div class=\"col-11\">
                        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "                        ";
        $this->displayBlock('JS', $context, $blocks);
        // line 67
        echo "                    </div>
                </div>
            </div> 

        </div>  
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/fh-3.1.9/r-2.2.9/sc-2.0.4/sp-1.3.0/datatables.min.css\"/>
            <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/fh-3.1.9/r-2.2.9/sc-2.0.4/sp-1.3.0/datatables.min.js\"></script>
            <script type=\"text/javascript\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js\"></script>
        ";
    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "
                        ";
    }

    // line 59
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                            <script type=\"text/javascript\">
                                \$(document).ready( function () {
                                    \$('#table').DataTable();
                                } );
                                
                            </script>
                        ";
    }

    public function getTemplateName()
    {
        return "basetemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 60,  190 => 59,  185 => 57,  181 => 56,  174 => 14,  163 => 7,  159 => 6,  152 => 5,  141 => 67,  138 => 59,  136 => 56,  129 => 51,  121 => 46,  118 => 45,  110 => 40,  107 => 39,  105 => 38,  102 => 37,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  69 => 27,  67 => 26,  62 => 24,  53 => 17,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basetemplate.html.twig", "C:\\xampp\\apps\\test\\templates\\basetemplate.html.twig");
    }
}
