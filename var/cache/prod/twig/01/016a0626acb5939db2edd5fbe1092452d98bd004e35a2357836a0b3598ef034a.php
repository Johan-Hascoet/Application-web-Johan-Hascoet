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

/* planque/detail.html.twig */
class __TwigTemplate_5ba03f9be2dcdc78813a03f831ac1ab0a8d4d130270171d31980ade127595945 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "planque/detail.html.twig", 1);
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
    <div class=\"col-10 text-center\">
        <div class=\"pull-right\">
        </div>
        
        <h1 class=\"my-5\">Détails de la planque : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "code", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
        <hr class=\"my-3\">

        <div class=\"row my-5 justify-content-evenly\">
            <div class=\"col-5 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Infos planque</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>Adresse : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "adresse", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                <p>Code postal : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "CP", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
                <p>Ville : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "CP", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                <p>Pays : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "pays", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                <p>Type : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "type", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-4 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Missions</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "missions", [], "any", false, false, false, 36));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "titre", [], "any", false, false, false, 36), "html", null, true);
            echo "</a> <br/>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo " Aucune mission ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
            </div>
        </div>

        <a href =\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planque-modification", ["id" => twig_get_attribute($this->env, $this->source, ($context["detailPlanque"] ?? null), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\" class =\"my-5 btn btn-primary\">Modifier planque</a>

    </div>
</div>

</html>
";
    }

    public function getTemplateName()
    {
        return "planque/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  117 => 36,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  79 => 16,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "planque/detail.html.twig", "C:\\xampp\\apps\\test\\templates\\planque\\detail.html.twig");
    }
}
