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

/* @Framework/Form/form_help.html.php */
class __TwigTemplate_3c14512051b7e4a716a0c4c48f6d0c89c6c935d19ade529ee58e1116b46e5f21 extends \Twig\Template
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
        // line 1
        echo "<?php if (!empty(\$help)): ?>
    <?php \$help_attr['class'] = isset(\$help_attr['class']) ? trim(\$help_attr['class'].' help-text') : 'help-text'; ?>
    <?php \$help = false !== \$translation_domain ? \$view['translator']->trans(\$help, \$help_translation_parameters, \$translation_domain) : \$help; ?>
    <?php \$help = false === \$help_html ? \$view->escape(\$help) : \$help ?>
    <p id=\"<?php echo \$view->escape(\$id); ?>_help\" <?php echo ' '.\$view['form']->block(\$form, 'attributes', ['attr' => \$help_attr]); ?>><?php echo \$help; ?></p>
<?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_help.html.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Framework/Form/form_help.html.php", "C:\\xampp\\apps\\test\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_help.html.php");
    }
}
