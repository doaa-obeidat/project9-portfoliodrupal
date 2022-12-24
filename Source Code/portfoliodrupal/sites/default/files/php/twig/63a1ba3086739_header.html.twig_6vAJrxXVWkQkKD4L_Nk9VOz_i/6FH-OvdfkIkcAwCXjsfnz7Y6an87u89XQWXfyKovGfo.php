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

/* @bond/includes/header.html.twig */
class __TwigTemplate_78b0a20272b1fa75245f36bd08a2633d extends \Twig\Template
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
        echo "<!-- =============================== header ===============================-->
";
        // line 2
        $context["header_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 4
        $context["header_classes"] = [0 => "top-header", 1 => "navbar", 2 => "navbar-expand", 3 => twig_get_attribute($this->env, $this->source,         // line 8
($context["bond"] ?? null), "header_link_style", [], "any", false, false, true, 8), 4 => "header-menu", 5 => twig_get_attribute($this->env, $this->source,         // line 10
($context["bond"] ?? null), "header_type", [], "any", false, false, true, 10), 6 => twig_get_attribute($this->env, $this->source,         // line 11
($context["bond"] ?? null), "header_position", [], "any", false, false, true, 11)];
        // line 14
        echo "
<nav ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header_attribute"] ?? null), "addClass", [0 => ($context["header_classes"] ?? null)], "method", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["header_attribute"] ?? null), "setAttribute", [0 => "data-fixed", 1 => twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "header_type_sticky", [], "any", false, false, true, 15)], "method", false, false, true, 15), "setAttribute", [0 => "data-resize", 1 => twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "header_type_sticky_resize", [], "any", false, false, true, 15)], "method", false, false, true, 15), "setAttribute", [0 => "data-bgcolor", 1 => twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "header_color", [], "any", false, false, true, 15)], "method", false, false, true, 15), 15, $this->source), "html", null, true);
        echo ">
  <div class=\"container\">
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 17)) {
            // line 18
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 20
        echo "    <!-- end of navbar-toggler -->
    <div class=\"d-flex align-items-center justify-content-end\" id=\"navigation-group\">

      <div class=\"navbar-right mr-4 d-none d-md-block\">
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_navigation", [], "any", false, false, true, 24)) {
            // line 25
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_navigation", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 27
        echo "      </div>

      <div class=\"navbar-right m-account\">

        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 31)) {
            // line 32
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 34
        echo "
      </div>
      <!-- end of navbar-right -->
    </div>
    <!-- end of collapse -->
  </div>
  <!-- end of container -->
</nav>
<!-- end of nav -->
";
    }

    public function getTemplateName()
    {
        return "@bond/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  89 => 32,  87 => 31,  81 => 27,  75 => 25,  73 => 24,  67 => 20,  61 => 18,  59 => 17,  52 => 15,  49 => 14,  47 => 11,  46 => 10,  45 => 8,  44 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bond/includes/header.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\bond\\templates\\includes\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 17);
        static $filters = array("escape" => 15);
        static $functions = array("create_attribute" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['create_attribute']
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
