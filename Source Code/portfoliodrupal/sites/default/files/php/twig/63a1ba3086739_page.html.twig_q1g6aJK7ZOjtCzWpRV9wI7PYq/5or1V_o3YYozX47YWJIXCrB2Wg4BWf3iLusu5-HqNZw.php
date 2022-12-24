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

/* themes/contrib/yg_photography/templates/layout/page.html.twig */
class __TwigTemplate_062f38c1ffc7e589e95a6e40a9d71456 extends \Twig\Template
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
        echo "<!-- End NavBar -->

<div class=\"main-menu-area fixed-top\" id=\"main-menu\">
  <div class=\"container\">
      <nav class=\"navbar navbar-expand-lg navbar-white site-navigation navbar-togglable\">
          ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"fa fa-bars\"></span>
          </button>
          ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
      </nav>
  </div>
</div>
<!-- End Navbar -->

";
        // line 16
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 17
        if (twig_in_filter("user", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null))))) {
            // line 18
            echo "<!-- Top Banner Section -->

<div class=\"top-banner\" style=\"background-image:url('";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_image"] ?? null), 20, $this->source), "html", null, true);
            echo "');\">
    <div class=\"container top-banner-caption text-center\">
      <h1>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["page"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 22, $this->source), "html", null, true);
            echo "</h1>
    </div>
</div>

<!-- End Top Banner Section -->
";
        }
        // line 28
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "

";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "instagram_feeds", [], "any", false, false, true, 31)) {
            // line 32
            echo "  <section id=\"instagram-feed\" class=\"wow fadeInUp text-center\"> 
        <div class=\"container\">
          ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "instagram_feeds", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
        </div>
  </section>
";
        }
        // line 38
        echo "

<!-- Start footer section -->
<footer class=\"dark-wrapper inverse-text\">
    <div class=\"sub-footer\">
      <div class=\"container inner text-center\"> 
        ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
        <p>© 2018<span><a href=\"#\"> YG Photography</a></span>. All rights reserved. Developed by <a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\">Drupal Developers Studio</a></p>
        <ul class=\"social social-bg social-s\">
            ";
        // line 47
        if (($context["twitter"] ?? null)) {
            // line 48
            echo "                  <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 48, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
            ";
        }
        // line 50
        echo "            ";
        if (($context["facebook"] ?? null)) {
            // line 51
            echo "                  <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 51, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-facebook-f\" aria-hidden=\"true\"></i></a></li>
            ";
        }
        // line 53
        echo "            ";
        if (($context["pinterest"] ?? null)) {
            // line 54
            echo "                    <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest"] ?? null), 54, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
            ";
        }
        // line 56
        echo "            ";
        if (($context["vimeo"] ?? null)) {
            // line 57
            echo "                  <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo"] ?? null), 57, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-vimeo\" aria-hidden=\"true\"></i></a></li>
            ";
        }
        // line 59
        echo "            ";
        if (($context["instagram"] ?? null)) {
            // line 60
            echo "                  <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 60, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
            ";
        }
        // line 62
        echo "        </ul>
      </div> 
    </div>
  </footer>
<!-- End footer Section -->  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_photography/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 62,  157 => 60,  154 => 59,  148 => 57,  145 => 56,  139 => 54,  136 => 53,  130 => 51,  127 => 50,  121 => 48,  119 => 47,  113 => 44,  105 => 38,  98 => 34,  94 => 32,  92 => 31,  87 => 29,  84 => 28,  75 => 22,  70 => 20,  66 => 18,  64 => 17,  62 => 16,  53 => 10,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_photography/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\yg_photography\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 17);
        static $filters = array("escape" => 6, "render" => 17);
        static $functions = array("url" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'render'],
                ['url']
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
