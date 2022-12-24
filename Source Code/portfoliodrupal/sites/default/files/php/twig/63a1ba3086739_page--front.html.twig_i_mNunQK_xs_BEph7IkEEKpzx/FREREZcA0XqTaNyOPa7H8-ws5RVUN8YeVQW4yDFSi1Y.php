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

/* themes/contrib/yg_creative/templates/layout/page--front.html.twig */
class __TwigTemplate_88df6b3011dfb3887a30b06d65130a9f extends \Twig\Template
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
        echo "<!-- start header section -->
    <header id=\"header\">
      <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
          ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fa fa-bars\"></i>
          </button>
            ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
          </nav>
      </div>
    </header>
<!-- End header section -->
";
        // line 15
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
";
        // line 17
        echo "
<!-- FOOTER SECTION-->
<section id=\"footer\">
  <div class=\"container\">
    <div class=\"row footer-menu-social\">
      <div class=\"col-md-8 footer-menu wow fadeInDown\">
        <ul>
          ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
        </ul>
      </div>
      </div>
      <div class=\"row\">
      <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInDown\" data-wow-delay=\"0.3s\">
          ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_about", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInDown\" data-wow-delay=\"0.6s\">
        <h6>";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["find_us_title"] ?? null), 33, $this->source), "html", null, true);
        echo "</h6>
        <p class=\"find_us_area\">";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["find_us_area"] ?? null), 34, $this->source), "html", null, true);
        echo "</p>
      </div>
      <div class=\"col-md-3 col-sm-12 footer-columns lets-talk wow fadeInDown\" data-wow-delay=\"0.9s\">
        <h6>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lets_talk_title"] ?? null), 37, $this->source), "html", null, true);
        echo "</h6>
        <p><a href=\"tel:";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lets_talk_phone_no"] ?? null), 38, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lets_talk_phone_no"] ?? null), 38, $this->source), "html", null, true);
        echo "</a></p>
        <p><a href=\"mailto:";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lets_talk_email"] ?? null), 39, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lets_talk_email"] ?? null), 39, $this->source), "html", null, true);
        echo "</a></p>
      </div>
      <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInDown\" data-wow-delay=\"0.9s\">
        <h6>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_link_title"] ?? null), 42, $this->source), "html", null, true);
        echo "</h6>
        <div class=\"social\">
          <ul>
            ";
        // line 45
        if (($context["linkedin"] ?? null)) {
            // line 46
            echo "              <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 46, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
            ";
        }
        // line 48
        echo "            ";
        if (($context["instagram"] ?? null)) {
            // line 49
            echo "              <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 49, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a></li>
            ";
        }
        // line 51
        echo "            ";
        if (($context["googleplus"] ?? null)) {
            // line 52
            echo "              <li>
                <a href=\"";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["googleplus"] ?? null), 53, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus\"></i></a>
              </li>
            ";
        }
        // line 56
        echo "            ";
        if (($context["facebook"] ?? null)) {
            // line 57
            echo "              <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 57, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-facebook-f\"></i></a></li>
            ";
        }
        // line 59
        echo "            ";
        if (($context["twitter"] ?? null)) {
            // line 60
            echo "              <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 60, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a></li>
            ";
        }
        // line 62
        echo "          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- copyright -->
<section id=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">  
      <div class=\"col-md-6 mx-auto text-center wow fadeInDown\" data-wow-delay=\"0.3s\"> 
        <p>© 2018 <span>YG Creative</span>. All Rights Reserved. </p>
        <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>  
      </div>
    </div>
  </div>
</section>
<!-- End Copyright -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_creative/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 62,  164 => 60,  161 => 59,  155 => 57,  152 => 56,  146 => 53,  143 => 52,  140 => 51,  134 => 49,  131 => 48,  125 => 46,  123 => 45,  117 => 42,  109 => 39,  103 => 38,  99 => 37,  93 => 34,  89 => 33,  83 => 30,  74 => 24,  65 => 17,  60 => 15,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_creative/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\yg_creative\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
