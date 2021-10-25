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

/* nationnalite/modification.html.twig */
class __TwigTemplate_a3bbba764f95a2f8d3f455151fd5c94559e4d7658f2d5a7aedb0e0833ffad2e6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'JS' => [$this, 'block_JS'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basetemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "nationnalite/modification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"row justify-content-around\">
    <div class=\"col-10\">
        <div class=\"pull-right\">
        </div>

        <h1 class=\"text-center\">Modification Nationnalité : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationNationnalite"] ?? null), "nomNatio", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
        <hr class=\"my-5\">

        <p class=\"my-5\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nationnalite-details", ["id" => twig_get_attribute($this->env, $this->source, ($context["modificationNationnalite"] ?? null), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" class=\"link-secondary text-decoration-none\">← Retour</a></p>

        ";
        // line 21
        echo twig_include($this->env, $context, "nationnalite/formulaireNationnalite.html.twig");
        echo "

        <p class=\"my-5\"><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nationnalite-details", ["id" => twig_get_attribute($this->env, $this->source, ($context["modificationNationnalite"] ?? null), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class=\"link-secondary text-decoration-none\">← Retour</a></p>
        
    </div>
</html>

";
        // line 28
        $this->displayBlock('JS', $context, $blocks);
        // line 31
        echo "
";
    }

    // line 28
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("JS", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nationnalite/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  111 => 28,  106 => 31,  104 => 28,  96 => 23,  91 => 21,  86 => 19,  80 => 16,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nationnalite/modification.html.twig", "C:\\xampp\\apps\\test\\templates\\nationnalite\\modification.html.twig");
    }
}
