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

/* themes/contrib/bond/templates/menu/menu--account.html.twig */
class __TwigTemplate_a0a8c306814e4cdd129de9c129885359 extends \Twig\Template
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
        // line 70
        echo "
        ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 76, $this->source))), 2 => "navbar-nav"])), ($context["logged_in"] ?? null), ($context["user_picture"] ?? null)], 76, $context, $this->getSourceContext()));
    }

    // line 20
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, $__logged_in__ = null, $__user_picture__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "logged_in" => $__logged_in__,
            "user_picture" => $__user_picture__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 21
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 22
                echo "    <ul";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => (((($context["menu_level"] ?? null) == 0)) ? (($context["classes"] ?? null)) : ("dropdown-menu dropdown-list"))], "method", false, false, true, 22), 22, $this->source), "html", null, true);
                echo ">
      ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 24
                    echo "        ";
                    // line 25
                    $context["item_classes"] = [0 => (((                    // line 26
($context["menu_level"] ?? null) == 0)) ? ("nav-item") : ("")), 1 => ((((twig_get_attribute($this->env, $this->source,                     // line 27
$context["item"], "is_expanded", [], "any", false, false, true, 27) && (($context["menu_level"] ?? null) > 0)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 27))) ? ("dropdown dropdown-submenu") : ("")), 2 => ((((twig_get_attribute($this->env, $this->source,                     // line 28
$context["item"], "is_expanded", [], "any", false, false, true, 28) && (($context["menu_level"] ?? null) == 0)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 28))) ? ("dropdown") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 29
$context["item"], "in_active_trail", [], "any", false, false, true, 29)) ? ("active") : (""))];
                    // line 32
                    echo "        ";
                    if ((((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 32)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 32))) {
                        // line 33
                        echo "          <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 33), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                        echo ">
            <a href=\"";
                        // line 34
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                        echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                        echo "
          </a>
        ";
                    } elseif ((((                    // line 36
($context["menu_level"] ?? null) == 0) &&  !twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 36)) &&  !twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 36))) {
                        // line 37
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 37) == "My account")) {
                            // line 38
                            echo "            ";
                            $context["item_classes"] = [0 => "d-flex", 1 => "align-content-center", 2 => "flex-wrap", 3 => "mr-4"];
                            // line 41
                            echo "          ";
                        }
                        // line 42
                        echo "          <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                        echo ">
              ";
                        // line 43
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43) == "My account")) {
                            // line 44
                            echo "                ";
                            $context["user_classes"] = "fa fa-user-circle user text-allports nounderline rounded-circle shadow-sm";
                            // line 45
                            echo "                ";
                            if (($context["user_picture"] ?? null)) {
                                // line 46
                                echo "                  <a href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                                echo "\" class=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_classes"] ?? null), 46, $this->source), "html", null, true);
                                echo " user-picture\" style=\"background-image: url('";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 46, $this->source), "html", null, true);
                                echo "')\"></a>
                ";
                            } else {
                                // line 48
                                echo "                  <a href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                                echo "\" class=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_classes"] ?? null), 48, $this->source), "html", null, true);
                                echo "\"></a>
                ";
                            }
                            // line 50
                            echo "              ";
                        } else {
                            // line 51
                            echo "                <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                            echo "\" class=\"nav-link ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["logged_in"] ?? null)) ? ("d-none") : ("")));
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                            echo "</a>
              ";
                        }
                        // line 53
                        echo "          ";
                    } else {
                        // line 54
                        echo "            <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                        echo ">
              <a href=\"";
                        // line 55
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo "\" class=\"dropdown-item\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo "</a>
          ";
                    }
                    // line 57
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57)) {
                        // line 58
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 58), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 58), (($context["menu_level"] ?? null) + 1), ($context["classes"] ?? null)], 58, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 60
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "      ";
                if (($context["logged_in"] ?? null)) {
                    // line 63
                    echo "        <li class=\"d-flex align-content-center flex-wrap\">
          <a href=\"\" class=\"fa fa-th waffle nounderline text-allports\"></a>
        </li> 
      ";
                }
                // line 67
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bond/templates/menu/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 67,  189 => 63,  186 => 62,  179 => 60,  173 => 58,  170 => 57,  163 => 55,  158 => 54,  155 => 53,  145 => 51,  142 => 50,  134 => 48,  124 => 46,  121 => 45,  118 => 44,  116 => 43,  111 => 42,  108 => 41,  105 => 38,  102 => 37,  100 => 36,  93 => 34,  88 => 33,  85 => 32,  83 => 29,  82 => 28,  81 => 27,  80 => 26,  79 => 25,  77 => 24,  73 => 23,  68 => 22,  65 => 21,  47 => 20,  43 => 76,  40 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bond/templates/menu/menu--account.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\bond\\templates\\menu\\menu--account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 20, "if" => 21, "for" => 23, "set" => 25);
        static $filters = array("clean_class" => 76, "escape" => 22);
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
