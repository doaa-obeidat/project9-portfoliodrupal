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

/* themes/contrib/yg_insurance/templates/page.html.twig */
class __TwigTemplate_f5955e68db4af6beea5754090e2ed283 extends \Twig\Template
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
        echo "<nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"wrapper container\">
  <div class=\"row\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
      <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 6, $this->source), "html", null, true);
        echo "\" alt=\"logo\"></a>
      </div>    
        ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "   
  </div>
  </div>
</nav>


 <a id=\"main-content\"></a>
          ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "

<div id=\"footer\">
  <div class=\"container text-center\">
    <div class=\"call\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["call_us"] ?? null), 19, $this->source), "html", null, true);
        echo "</div>
    <p>YG Insurance Drupal Theme ?? 2018</p>
    <p><a href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["privacy_url"] ?? null), 21, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["privacy_policy"] ?? null), 21, $this->source), "html", null, true);
        echo "</a> | <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["careers_url"] ?? null), 21, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["careers"] ?? null), 21, $this->source), "html", null, true);
        echo "</a> | <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["News_url"] ?? null), 21, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["News"] ?? null), 21, $this->source), "html", null, true);
        echo "</a></p>
    <p>Theme By <a href=\"https://www.drupaldevelopersstudio.com\" target=\"_blank\">Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com\" target=\"_blank\">Young Globes</a></p>
    <div class=\"social\">
    ";
        // line 24
        if (($context["facebook"] ?? null)) {
            // line 25
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 25, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a> 
    ";
        }
        // line 27
        echo "    ";
        if (($context["twitter"] ?? null)) {
            // line 28
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 28, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a> 
    ";
        }
        // line 30
        echo "    ";
        if (($context["youtube"] ?? null)) {
            // line 31
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 31, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-youtube\"></i></a>
    ";
        }
        // line 33
        echo "    </div>
  </div>
</div>
<a id=\"back-to-top\" href=\"#home\" class=\"btn btn-custom btn-lg page-scroll\" role=\"button\" title=\"Go To Top\"><span class=\"glyphicon glyphicon-chevron-up\"></span></a>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_insurance/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  111 => 31,  108 => 30,  102 => 28,  99 => 27,  93 => 25,  91 => 24,  75 => 21,  70 => 19,  63 => 15,  53 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_insurance/templates/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\yg_insurance\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24);
        static $filters = array("escape" => 6);
        static $functions = array("path" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path']
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
