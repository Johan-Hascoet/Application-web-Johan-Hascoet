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

/* mission/detail.html.twig */
class __TwigTemplate_886ca9f44e4625aea50cf8b5aa7607db041e69ec004d1f379ddf8e53deadd18f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "mission/detail.html.twig", 1);
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
        <h1 class=\"my-5\">Détails de la mission : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "titre", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
        <hr class=\"my-3\">
        
        <div class=\"row my-5 justify-content-evenly\">
            <div class=\"col-4 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Infos</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>Description de la mission : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
                <p>Nom de code de la mission : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "nomCode", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                <p>Pays de la mission : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "pays", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-4 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Etat</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>Spécialité de la mission : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "specialite", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
                <p>Statut de la mission : ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "statut", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
            </div>
        </div>

        <div class=\"row my-5 justify-content-evenly\">
            <div class=\"col-4 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Dates</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>Date de début de la mission : ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "dateDebut", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true);
        echo "</p>
                <p>Date de fin de la mission : ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "dateFin", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-4 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Contacts</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>Agents sur la mission : ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "agent", [], "any", false, false, false, 52));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "nom", [], "any", false, false, false, 52), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "prenom", [], "any", false, false, false, 52), "html", null, true);
            echo "<br/>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo " Aucun agent ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                <p>Contacts sur la mission : ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "contact", [], "any", false, false, false, 53));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 53), "html", null, true);
            echo "<br/>";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo " Aucun contact ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
            </div>
        </div>

        <div class=\"row my-5 justify-content-evenly\">
            <div class=\"col-4 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Planques disponibles</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "planque", [], "any", false, false, false, 63));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planque"]) {
            echo " 
                        Code de la planque : ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "code", [], "any", false, false, false, 64), "html", null, true);
            echo " <br/> 
                        Adresse : ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "adresse", [], "any", false, false, false, 65), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "CP", [], "any", false, false, false, 65), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "ville", [], "any", false, false, false, 65), "html", null, true);
            echo " <br/>
                        Type de planque : ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planque"], "type", [], "any", false, false, false, 66), "html", null, true);
            echo "
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo " Aucune planque ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
            </div>
            <div class=\"col-4 bg-light shadow rounded p-4\">
                <div class=\"text-center\">
                    <h4>Cibles</h4>
                    <hr class=\"bg-primary text-primary\">
                </div>
                <p>";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "Cible", [], "any", false, false, false, 74));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cible"]) {
            echo " 
                        Identité : ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "nom", [], "any", false, false, false, 75), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "prenom", [], "any", false, false, false, 75), "html", null, true);
            echo "<br/>
                        Nationnalité : ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cible"], "nationnalite", [], "any", false, false, false, 76), "nomNatio", [], "any", false, false, false, 76), "html", null, true);
            echo "<br/>
                        Nom de Code : ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "nomCode", [], "any", false, false, false, 77), "html", null, true);
            echo "<br/>
                        Née le : ";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cible"], "DateNaissance", [], "any", false, false, false, 78), "Y-m-d"), "html", null, true);
            echo "<br/><br/>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo " Aucune Cible ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cible'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
            </div>
        </div>
        ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 83
            echo "            <a href =\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-modification", ["id" => twig_get_attribute($this->env, $this->source, ($context["detailMission"] ?? null), "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" class =\"my-5 btn btn-primary\">Modifier cette mission</a>
        ";
        }
        // line 85
        echo "    </div>
</div>
</html>
";
    }

    public function getTemplateName()
    {
        return "mission/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 85,  268 => 83,  266 => 82,  256 => 79,  249 => 78,  245 => 77,  241 => 76,  235 => 75,  228 => 74,  214 => 67,  207 => 66,  199 => 65,  195 => 64,  188 => 63,  159 => 53,  139 => 52,  129 => 45,  125 => 44,  112 => 34,  108 => 33,  98 => 26,  94 => 25,  90 => 24,  78 => 15,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mission/detail.html.twig", "C:\\xampp\\apps\\test\\templates\\mission\\detail.html.twig");
    }
}
