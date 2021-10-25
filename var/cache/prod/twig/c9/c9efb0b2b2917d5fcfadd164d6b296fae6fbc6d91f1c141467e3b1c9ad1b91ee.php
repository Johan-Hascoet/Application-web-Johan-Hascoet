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

/* cible/modification.html.twig */
class __TwigTemplate_6725768c81a8f18e99a9e72d938f0c9cde1b51bf92151364310e9f5827f1fb5c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "cible/modification.html.twig", 1);
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

        <h1 class=\"text-center\">Modification Cible : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationCible"] ?? null), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationCible"] ?? null), "prenom", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
        <hr class=\"my-5\">

        ";
        // line 19
        echo twig_include($this->env, $context, "cible/formulaireCible.html.twig");
        echo "

        <p class=\"my-5\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cible-details", ["id" => twig_get_attribute($this->env, $this->source, ($context["modificationCible"] ?? null), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" class=\"link-secondary text-decoration-none\">← Retour</a></p>

    </div>
</html>

";
        // line 26
        $this->displayBlock('JS', $context, $blocks);
        // line 29
        echo "
";
    }

    // line 26
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("JS", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "cible/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  108 => 26,  103 => 29,  101 => 26,  93 => 21,  88 => 19,  80 => 16,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cible/modification.html.twig", "C:\\xampp\\apps\\test\\templates\\cible\\modification.html.twig");
    }
}
