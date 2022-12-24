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

/* themes/contrib/bond/templates/system/page.html.twig */
class __TwigTemplate_9f3932ad4faa5885c9f1eb791e120f72 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["page_header_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 2
        $context["node_has_image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2), "uri", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        echo "
";
        // line 5
        $context["page_header_classes"] = [0 => "page-header-wrapper", 1 => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 7)) ? (("type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 7), 7, $this->source)))) : ("empty")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "field_image", [], "any", false, false, true, 8), "entity", [], "any", false, false, true, 8), "uri", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8)) ? (("has-" . "image")) : ("no-image")), 3 => (((twig_get_attribute($this->env, $this->source,         // line 9
($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 9) == "box-size")) ? ("container") : (""))];
        // line 12
        echo "
";
        // line 14
        $context["page_header_styles"] = [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["node"] ?? null), "field_image", [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "uri", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15)) ? ((("background-image: url(" . $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 15), "entity", [], "any", false, false, true, 15), "uri", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source))) . ");")) : (""))];
        // line 18
        echo "
";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "header_position", [], "any", false, false, true, 19) == "header-left")) {
            // line 20
            echo "  <div class=\"main-content-wrapper\">
";
        }
        // line 22
        echo "  ";
        $this->loadTemplate("@bond/includes/header.html.twig", "themes/contrib/bond/templates/system/page.html.twig", 22)->display($context);
        // line 23
        echo "
  <!-- If header position is left then add wrapper div -->
  ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "header_position", [], "any", false, false, true, 25) == "header-left")) {
            // line 26
            echo "    <div class=\"content-right\">
  ";
        }
        // line 28
        echo "  
  ";
        // line 29
        if (((twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 29) == "full-size") || (twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 29) == "box-size"))) {
            // line 30
            echo "    <div
      ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page_header_attribute"] ?? null), "addClass", [0 => ($context["page_header_classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
      ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page_header_attribute"] ?? null), "setAttribute", [0 => "style", 1 => ($context["page_header_styles"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo ">
    ";
        }
        // line 34
        echo "      ";
        if ( !($context["is_front"] ?? null)) {
            // line 35
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_header", [], "any", false, false, true, 35)) {
                // line 36
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_header", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 38
            echo "      ";
        }
        // line 39
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 39) == "full-size") || (twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 39) == "box-size"))) {
            // line 40
            echo "      </div>
    ";
        }
        // line 42
        echo "
    <!-- top Fluid section -->
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_fluid", [], "any", false, false, true, 44)) {
            // line 45
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_fluid", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 47
        echo "    <!-- end top fluid section -->

    ";
        // line 50
        $context["content_classes"] = [0 => ((twig_get_attribute($this->env, $this->source,         // line 51
($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 51)) ? ("col-md-9") : ("")), 1 => ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 52
($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 52))) ? ("col-md-12") : (""))];
        // line 55
        echo "
    <section class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
        echo ">

            <!-- page top section -->
            ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 62)) {
            // line 63
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 65
        echo "            <!-- page top section -->

    ";
        // line 67
        if ((($context["node_has_image"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 67) == "full-size") || (twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "page_header_style", [], "any", false, false, true, 67) == "box-size")))) {
            // line 68
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 68), 68, $this->source), "field_image"), "html", null, true);
            echo "
    ";
        } else {
            // line 70
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 72
        echo "
            <!-- page bottom section -->
            ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 74)) {
            // line 75
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 77
        echo "            <!-- page bottom section -->

          </div>

          ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 81)) {
            // line 82
            echo "            <div class=\"col-md-3 sidebar\">
              ";
            // line 83
            $this->displayBlock('sidebar_right', $context, $blocks);
            // line 88
            echo "            </div>
          ";
        }
        // line 90
        echo "
        </div>
      </div>
    </section>

    <!-- bottom Fluid section -->
    ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_fluid", [], "any", false, false, true, 96)) {
            // line 97
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_fluid", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 99
        echo "    <!-- bottom top fluid section -->

    ";
        // line 101
        $this->loadTemplate("@bond/includes/footer.html.twig", "themes/contrib/bond/templates/system/page.html.twig", 101)->display($context);
        // line 102
        echo "
  ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "header_position", [], "any", false, false, true, 103)) {
            // line 104
            echo "    </div>
  ";
        }
        // line 106
        echo "
";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "header_position", [], "any", false, false, true, 107) == "header-left")) {
            // line 108
            echo "  </div>
";
        }
    }

    // line 83
    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                <aside role=\"complementary\">
                  ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
                </aside>
              ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bond/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 85,  252 => 84,  248 => 83,  242 => 108,  240 => 107,  237 => 106,  233 => 104,  231 => 103,  228 => 102,  226 => 101,  222 => 99,  216 => 97,  214 => 96,  206 => 90,  202 => 88,  200 => 83,  197 => 82,  195 => 81,  189 => 77,  183 => 75,  181 => 74,  177 => 72,  171 => 70,  165 => 68,  163 => 67,  159 => 65,  153 => 63,  151 => 62,  145 => 59,  139 => 55,  137 => 52,  136 => 51,  135 => 50,  131 => 47,  125 => 45,  123 => 44,  119 => 42,  115 => 40,  112 => 39,  109 => 38,  103 => 36,  100 => 35,  97 => 34,  92 => 32,  88 => 31,  85 => 30,  83 => 29,  80 => 28,  76 => 26,  74 => 25,  70 => 23,  67 => 22,  63 => 20,  61 => 19,  58 => 18,  56 => 15,  55 => 14,  52 => 12,  50 => 9,  49 => 8,  48 => 7,  47 => 5,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bond/templates/system/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\bond\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 19, "include" => 22, "block" => 83);
        static $filters = array("clean_class" => 7, "escape" => 31, "without" => 68);
        static $functions = array("create_attribute" => 1, "file_url" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
                ['clean_class', 'escape', 'without'],
                ['create_attribute', 'file_url']
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
