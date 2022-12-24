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

/* themes/contrib/bond/templates/node/node--view--frontpage.html.twig */
class __TwigTemplate_0773a5c56f97d3ddd5effe79f81d6e95 extends \Twig\Template
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
        // line 75
        echo "
";
        // line 76
        $context["node_has_image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 76), "entity", [], "any", false, false, true, 76), "uri", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76);
        // line 77
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 77, $this->source), "html", null, true);
        echo ">
  <div class=\"article-inner-wrapper\">
    ";
        // line 79
        if (($context["node_has_image"] ?? null)) {
            // line 80
            echo "      <div class=\"d-block d-sm-flex d-lg-block\">
        <div class=\"article-media\">
          ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"article-media--title d-lg-none p-sm-3\">
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 85, $this->source), "html", null, true);
            echo "
          ";
            // line 86
            if ( !($context["page"] ?? null)) {
                // line 87
                echo "            <h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 87, $this->source), "html", null, true);
                echo ">
              <a href=\"";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 88, $this->source), "html", null, true);
                echo "\" rel=\"bookmark\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 88, $this->source), "html", null, true);
                echo "</a>
            </h2>
          ";
            }
            // line 91
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 91, $this->source), "html", null, true);
            echo "
          ";
            // line 92
            if ((($context["display_submitted"] ?? null) &&  !($context["page"] ?? null))) {
                // line 93
                echo "          <footer class=\"article-author-info\">
            ";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 94, $this->source), "html", null, true);
                echo "
            <div";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 95, $this->source), "html", null, true);
                echo ">
              ";
                // line 96
                echo t("by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 97
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 97, $this->source), "html", null, true);
                echo "
            </div>
          </footer>
          ";
            }
            // line 101
            echo "        </div>
      </div>
    ";
        }
        // line 104
        echo "    <div class=\"article-info\">
      <div class=\"";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["node_has_image"] ?? null)) ? ("d-none d-lg-block") : ("")));
        echo "\">
        ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 106, $this->source), "html", null, true);
        echo "
        ";
        // line 107
        if ( !($context["page"] ?? null)) {
            // line 108
            echo "          <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 108, $this->source), "html", null, true);
            echo ">
            <a href=\"";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 109, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 109, $this->source), "html", null, true);
            echo "</a>
          </h2>
        ";
        }
        // line 112
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 112, $this->source), "html", null, true);
        echo "
        ";
        // line 113
        if ((($context["display_submitted"] ?? null) &&  !($context["page"] ?? null))) {
            // line 114
            echo "          <footer class=\"article-author-info\">
            ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 115, $this->source), "html", null, true);
            echo "
            <div";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 116, $this->source), "html", null, true);
            echo ">
              ";
            // line 117
            echo t("by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 118
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 118, $this->source), "html", null, true);
            echo "
            </div>
          </footer>
        ";
        }
        // line 122
        echo "      </div>
      <div";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 123, $this->source), "html", null, true);
        echo ">
        ";
        // line 124
        if (($context["node_has_image"] ?? null)) {
            // line 125
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 125, $this->source), "field_image"), "html", null, true);
            echo "
        ";
        } else {
            // line 127
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 127, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 129
        echo "      </div>
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bond/templates/node/node--view--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 129,  183 => 127,  177 => 125,  175 => 124,  171 => 123,  168 => 122,  160 => 118,  158 => 117,  154 => 116,  150 => 115,  147 => 114,  145 => 113,  140 => 112,  132 => 109,  127 => 108,  125 => 107,  121 => 106,  117 => 105,  114 => 104,  109 => 101,  101 => 97,  99 => 96,  95 => 95,  91 => 94,  88 => 93,  86 => 92,  81 => 91,  73 => 88,  68 => 87,  66 => 86,  62 => 85,  56 => 82,  52 => 80,  50 => 79,  44 => 77,  42 => 76,  39 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bond/templates/node/node--view--frontpage.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\bond\\templates\\node\\node--view--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 76, "if" => 79, "trans" => 96);
        static $filters = array("escape" => 77, "without" => 125);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'without'],
                []
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
