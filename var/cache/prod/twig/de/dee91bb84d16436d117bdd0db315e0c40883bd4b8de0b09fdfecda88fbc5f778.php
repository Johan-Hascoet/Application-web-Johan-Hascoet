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

/* agent/detail.html.twig */
class __TwigTemplate_2098aceeec8d7213292df9a1cd0bb44f1b711a486b218ba3e5f6bd9eeabf60ca extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "agent/detail.html.twig", 1);
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
        
        <h1 class=\"my-5\">Détails de l'agent : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailAgent"] ?? null), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailAgent"] ?? null), "prenom", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
        <hr class=\"my-3\">

        <div class=\"row my-5 justify-content-evenly\">
            <div class=\"col-5 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Infos Agent</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>Code d'identification : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailAgent"] ?? null), "codeIdentification", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                <p>Date de naissance : ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailAgent"] ?? null), "DateNaissance", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
        echo "</p>
                <p>Nationnalité : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailAgent"] ?? null), "Nationnalite", [], "any", false, false, false, 27), "nomNatio", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-4 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Etat</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>Specialitées : ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailAgent"] ?? null), "specialites", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["specialite"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                <p>Missions de l'agent : ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailAgent"] ?? null), "missions", [], "any", false, false, false, 35));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"text-decoration-none link-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "titre", [], "any", false, false, false, 35), "html", null, true);
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
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent-modification", ["id" => twig_get_attribute($this->env, $this->source, ($context["detailAgent"] ?? null), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" class =\"my-5 btn btn-primary\">Modifier Agent</a>
        
    </div>
</div>
</html>
";
    }

    public function getTemplateName()
    {
        return "agent/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  124 => 35,  111 => 34,  101 => 27,  97 => 26,  93 => 25,  79 => 16,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agent/detail.html.twig", "C:\\xampp\\apps\\test\\templates\\agent\\detail.html.twig");
    }
}
