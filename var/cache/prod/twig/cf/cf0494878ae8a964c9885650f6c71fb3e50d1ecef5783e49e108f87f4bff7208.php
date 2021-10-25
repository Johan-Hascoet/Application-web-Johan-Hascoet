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

/* pays/modification.html.twig */
class __TwigTemplate_8bafdfc3c0147f1a9e6775689fc2bea9e73a27df95803916d4c42cdafcab2aae extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "pays/modification.html.twig", 1);
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

        <h1 class=\"text-center\">Modification pays : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationPays"] ?? null), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
        <hr class=\"my-5\">

        ";
        // line 19
        echo twig_include($this->env, $context, "pays/formulairePays.html.twig");
        echo "

        <p class=\"my-5\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays");
        echo "\" class=\"link-secondary text-decoration-none\">← Retour</a></p>
    </div>
</html>

";
        // line 25
        $this->displayBlock('JS', $context, $blocks);
        // line 28
        echo "
";
    }

    // line 25
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("JS", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "pays/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 26,  105 => 25,  100 => 28,  98 => 25,  91 => 21,  86 => 19,  80 => 16,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pays/modification.html.twig", "C:\\xampp\\apps\\test\\templates\\pays\\modification.html.twig");
    }
}
