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

/* themes/custom/mytheme/templates/page.html.twig */
class __TwigTemplate_868a77bcf5e10d060f5e49a70407f80bececcb9eaf300008773532c165b8d524 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <title></title>
</head>

<body>
";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mytheme/navbar"), "html", null, true);
        echo "

    <header class=\"header\"> 
        <nav class=\"menu\">
            ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
        </nav>
        ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " 
        <div class=\"heading\">
            <p>Digital Diary </p>
        </div>

    </header>

    <main class=\"main\"> 
        <div class=\"content\">
            ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 26)) {
            // line 27
            echo "        <div class=\"sidebar\"> 
        </div>
        ";
        }
        // line 29
        echo " 
    </main>

    <footer>
        ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
    </footer>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  85 => 29,  80 => 27,  78 => 26,  73 => 24,  61 => 15,  56 => 13,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mytheme/templates/page.html.twig", "/var/www/html/drupal9_0/themes/custom/mytheme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 9);
        static $functions = array("attach_library" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
