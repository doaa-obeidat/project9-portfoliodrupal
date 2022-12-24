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

/* @bond/includes/footer.html.twig */
class __TwigTemplate_45aaa73400c682c2db625af67c8a65b2 extends \Twig\Template
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
        echo "<!-- =============================== footer ===============================-->

";
        // line 3
        $context["social_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 5
        $context["social_classes"] = [0 => "social-icons", 1 => "brand-bg-icons", 2 => "icon-lg", 3 => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["bond"] ?? null), "display_social_round_icons", [], "any", false, false, true, 9)) ? ("round-icons") : (""))];
        // line 12
        echo "
";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "header_position", [], "any", false, false, true, 13) == "header-left")) {
            // line 14
            echo "  <footer class=\"page-footer bg-mineShaft container\">
";
        } else {
            // line 16
            echo "  <footer class=\"page-footer bg-mineShaft\">
";
        }
        // line 18
        echo "
  ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 19)) {
            // line 20
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 23)) {
            // line 24
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 26
        echo "
  <div class=\"footer-bottom\">
    <div class=\"container py-5\">
      <div class=\"row\">

        <!-- end of col-md-7 -->
        <div class=\"col-md-7\">
          <div class=\"footer-logo mb-3\">
            <img src=\"/";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/logo-footer.svg\" alt=\"weknowinc\">
          </div>
          ";
        // line 36
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "social_profiles", [], "any", false, false, true, 36)) > 0)) {
            // line 37
            echo "            ";
            $this->loadTemplate("@bond/includes/social-icons.html.twig", "@bond/includes/footer.html.twig", 37)->display($context);
            // line 38
            echo "          ";
        } else {
            // line 39
            echo "            ";
            $this->loadTemplate("@bond/includes/social-icons-empty.html.twig", "@bond/includes/footer.html.twig", 39)->display($context);
            // line 40
            echo "          ";
        }
        // line 41
        echo "
          <!-- end of social-icons -->
        </div>
        <!-- end of col-md-7 -->
        <div class=\"col-md-5 d-flex align-items-end justify-content-md-end\">
          <div class=\"copyright text-white mb-2\">
            <p>";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["bond"] ?? null), "copyright_text", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</p>
          </div>
          <!-- end of copyright -->
        </div>
        <!-- end of col-md-3 -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of footer Bottom -->
</footer>
<!-- end of page-footer -->
";
    }

    public function getTemplateName()
    {
        return "@bond/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  112 => 41,  109 => 40,  106 => 39,  103 => 38,  100 => 37,  98 => 36,  93 => 34,  83 => 26,  77 => 24,  75 => 23,  72 => 22,  66 => 20,  64 => 19,  61 => 18,  57 => 16,  53 => 14,  51 => 13,  48 => 12,  46 => 9,  45 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bond/includes/footer.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\bond\\templates\\includes\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 13, "include" => 37);
        static $filters = array("escape" => 20, "length" => 36);
        static $functions = array("create_attribute" => 3, "active_theme_path" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['escape', 'length'],
                ['create_attribute', 'active_theme_path']
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
