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

/* themes/contrib/bond/templates/menu/menu--main.html.twig */
class __TwigTemplate_4501ca1259406f6f258acdfc5478faf5 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "


";
        // line 63
        echo "
        ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 69, $this->source))), 2 => "navbar-nav"]))], 69, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 23
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 24
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 25
                echo "    <ul";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => (((($context["menu_level"] ?? null) == 0)) ? (($context["classes"] ?? null)) : ("dropdown-menu dropdown-list"))], "method", false, false, true, 25), 25, $this->source), "html", null, true);
                echo ">
      ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 27
                    echo "        ";
                    // line 28
                    $context["item_classes"] = [0 => (((                    // line 29
($context["menu_level"] ?? null) == 0)) ? ("nav-item") : ("")), 1 => ((((twig_get_attribute($this->env, $this->source,                     // line 30
$context["item"], "is_expanded", [], "any", false, false, true, 30) && (($context["menu_level"] ?? null) > 0)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 30))) ? ("dropdown dropdown-submenu") : ("")), 2 => ((((twig_get_attribute($this->env, $this->source,                     // line 31
$context["item"], "is_expanded", [], "any", false, false, true, 31) && (($context["menu_level"] ?? null) == 0)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 31))) ? ("dropdown") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 32
$context["item"], "in_active_trail", [], "any", false, false, true, 32)) ? ("active") : (""))];
                    // line 35
                    echo "        ";
                    if ((((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 35)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 35))) {
                        // line 36
                        echo "          <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 36), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                        echo ">
              <a href=\"";
                        // line 37
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        echo "</a>
        ";
                    } elseif ((((                    // line 38
($context["menu_level"] ?? null) == 0) &&  !twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 38)) &&  !twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 38))) {
                        // line 39
                        echo "          <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 39), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                        echo ">
              <a href=\"";
                        // line 40
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                        echo "\" class=\"nav-link text-dustyGray font-weight-bold\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                        echo "</a>
        ";
                    } else {
                        // line 42
                        echo "          <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                        echo ">
            <a href=\"";
                        // line 43
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                        echo "\" class=\"dropdown-item\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                        echo "</a>
        ";
                    }
                    // line 45
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 45)) {
                        // line 46
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 46), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 46), (($context["menu_level"] ?? null) + 1), ($context["classes"] ?? null)], 46, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 48
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      <li class=\"search d-flex align-content-center flex-wrap ml-4\">
        <form>
          <div class=\"position-relative\">
            <input type=\"search\" class=\"form-control radius-rounded\" id=\"search\">
            <button class=\"btn btn-search position-absolute radius-rounded\">
              <span class=\"fa fa-search text-ghost\"></span>
            </button>
          </div>
        </form>
      </li>
    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bond/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 50,  139 => 48,  133 => 46,  130 => 45,  123 => 43,  118 => 42,  111 => 40,  106 => 39,  104 => 38,  98 => 37,  93 => 36,  90 => 35,  88 => 32,  87 => 31,  86 => 30,  85 => 29,  84 => 28,  82 => 27,  78 => 26,  73 => 25,  70 => 24,  54 => 23,  48 => 69,  45 => 63,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bond/templates/menu/menu--main.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\bond\\templates\\menu\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 23, "if" => 24, "for" => 26, "set" => 28);
        static $filters = array("clean_class" => 69, "escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'for', 'set', 'import'],
                ['clean_class', 'escape'],
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
