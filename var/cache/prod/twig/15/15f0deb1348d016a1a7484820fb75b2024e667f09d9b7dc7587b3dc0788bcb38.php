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

/* contact/modification.html.twig */
class __TwigTemplate_1f09cb58a31a4697c24060ded554f39e633ffa30c0e689a193318ff57d4fdd54 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "contact/modification.html.twig", 1);
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

        <h1 class=\"text-center\">Modification Contact : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationContact"] ?? null), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modificationContact"] ?? null), "prenom", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
        <hr class=\"my-5\">

        ";
        // line 19
        echo twig_include($this->env, $context, "contact/formulaireContact.html.twig");
        echo "

        <p class=\"my-5\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact-details", ["id" => twig_get_attribute($this->env, $this->source, ($context["modificationContact"] ?? null), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" class=\"link-secondary text-decoration-none\">← Retour</a></p>
        
    </div>
</div>
</html>

";
        // line 27
        $this->displayBlock('JS', $context, $blocks);
        // line 30
        echo "
";
    }

    // line 27
    public function block_JS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $this->displayParentBlock("JS", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "contact/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  109 => 27,  104 => 30,  102 => 27,  93 => 21,  88 => 19,  80 => 16,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/modification.html.twig", "C:\\xampp\\apps\\test\\templates\\contact\\modification.html.twig");
    }
}
