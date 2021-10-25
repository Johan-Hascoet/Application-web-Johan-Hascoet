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

/* mission/index.html.twig */
class __TwigTemplate_e1d4aeb4a3e637dd491c35989f63b7c9fcfabea6e7e7ea38677eccb06d966293 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("basetemplate.html.twig", "mission/index.html.twig", 1);
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
        echo "<div>
    <div class=\"pull-right\">
    </div>
    
    <div class=\"row justify-content-around\">
        <div class=\"col-10 text-center\">
            <h1>Missions</h1>
            <hr class=\"my-5\">
            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                <a href =\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-ajout");
            echo "\" class =\"btn btn-dark my-5\">Ajouter une mission</a>
            ";
        }
        // line 22
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-12 shadow rounded table-hover p-5\">
            <table id=\"table\" class=\"table table-striped table-light text-center\">
                <thead class=\"table-dark\">
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Nom de code</th>
                        <th>Pays</th>
                        <th>Statut</th>
                        <th>Spécialité</th>
                        <th>Date de Début</th>
                        <th>Date de Fin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeMissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 43
            echo "                    <tr>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "titre", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "nomCode", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "pays", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "statut", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mission"], "Specialite", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "dateDebut", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "dateFin", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-primary\" title=\"Détails\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-details", ["id" => twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-card-checklist\" viewBox=\"0 0 16 16\">
                                    <path d=\"M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z\"/>
                                    <path d=\"M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z\"/>
                                </svg>
                            </a>
                            ";
            // line 59
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 60
                echo "                            <a class=\"suppression btn btn-danger\" title=\"Supprimer\" data-playground-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-trash-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z\"/>
                                </svg>
                            </a>
                            ";
            }
            // line 66
            echo "                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </tbody>
            </table>
        </div>
    </div>

</div>
<script>
    \$(document).ready(function(){
        \$(\".suppression\").click(function(){
            var id = \$(this).attr(\"data-playground-id\");
            var url = '";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission-suppression", ["id" => 0]);
        echo "';
            var url = url.replace(\"0\",id);
            \$.ajax({
                url: url,
                type: 'delete',
                success:function(data){
                    console.log(data)
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
            \$(this).closest(\"tr\").hide();
        });
    });
</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "mission/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 79,  181 => 69,  173 => 66,  163 => 60,  161 => 59,  152 => 53,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  116 => 43,  112 => 42,  90 => 22,  84 => 20,  82 => 19,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mission/index.html.twig", "C:\\xampp\\apps\\test\\templates\\mission\\index.html.twig");
    }
}
