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

/* themes/contrib/particles_orange/templates/layout/page.html.twig */
class __TwigTemplate_db289c53bd5dc6db25c265e6ead53db6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div id=\"page\">
\t<div id=\"top\"></div>
    <header id=\"masthead\" role=\"banner\" class=\"site-header\">
      <div class=\"container\">
        <div class=\"row\">
          ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 55)) {
            // line 56
            echo "          <div id=\"logo\" class=\"col-sm-4 site-branding\">
            ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 60
        echo "          <div class=\"col-sm-8 mainmenu\">
            <nav id=\"navigation\" role=\"navigation\">
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
                <!--End Navigation -->
                <div id=\"main-menu\">
                  ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_navigation", [], "any", false, false, true, 70)) {
            // line 71
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_navigation", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
                  ";
        }
        // line 73
        echo "                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    ";
        // line 81
        if (($context["is_front"] ?? null)) {
            // line 82
            echo "    ";
            if (($context["banner_display"] ?? null)) {
                // line 83
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("particles_orange/particle-style"), "html", null, true);
                echo "
      <div class=\"site-banner\">
        <div class=\"container-fluid\">
          <img class=\"img-bann\" src=\"";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_image"] ?? null), 86, $this->source), "html", null, true);
                echo "\"/>
          ";
                // line 87
                if ((((($context["banner_head"] ?? null) || ($context["banner_desc"] ?? null)) || ($context["banner_url"] ?? null)) || ($context["banner_url_text"] ?? null))) {
                    // line 88
                    echo "          <div class=\"flex-caption\">
            <h2>";
                    // line 89
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(($context["banner_head"] ?? null), 89, $this->source)), "html", null, true);
                    echo "</h2>
            <p>";
                    // line 90
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(($context["banner_desc"] ?? null), 90, $this->source)), "html", null, true);
                    echo "</p>
            <a class=\"frmore\" href=\"";
                    // line 91
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(($context["banner_url"] ?? null), 91, $this->source)), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["banner_url_text"] ?? null), 91, $this->source)));
                    echo "</a>
          </div>
          <div id=\"particleCanvas-Orange\" class=\"e-particles-orange\"></div>
          <div id=\"particleCanvas-Blue\" class=\"e-particles-blue\"></div>
          ";
                }
                // line 96
                echo "        </div>
      </div>
    ";
            }
            // line 99
            echo "    ";
        }
        // line 100
        echo "
    ";
        // line 102
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 102)) {
            // line 103
            echo "    <div id=\"top-banner\">
      ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 107
        echo "
  ";
        // line 109
        echo "  ";
        $this->displayBlock('main', $context, $blocks);
        // line 172
        echo "

  <div id=\"bottom\">
    ";
        // line 175
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 175) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 175)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 175)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 175))) {
            // line 176
            echo "    <div class=\"container\">
      <div class=\"row\">
        ";
            // line 178
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 178)) {
                // line 179
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null), 179, $this->source)), "html", null, true);
                echo "\">
          ";
                // line 180
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 183
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 183)) {
                // line 184
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null), 184, $this->source)), "html", null, true);
                echo "\">
          ";
                // line 185
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 188
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 188)) {
                // line 189
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null), 189, $this->source)), "html", null, true);
                echo "\">
          ";
                // line 190
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 193
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 193)) {
                // line 194
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null), 194, $this->source)), "html", null, true);
                echo "\">
          ";
                // line 195
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 198
            echo "      </div>
    </div>
    ";
        }
        // line 201
        echo "  </div>
  <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"container\">
      ";
        // line 204
        if (($context["display_scroller"] ?? null)) {
            // line 205
            echo "      ";
            if ((($context["scroller"] ?? null) == "Right")) {
                // line 206
                echo "      <div class=\"scroll-top scroll-right\" style=\"display: block;\">
        <a href=\"#\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>
      </div>
      ";
            } elseif ((            // line 209
($context["scroller"] ?? null) == "Left")) {
                // line 210
                echo "      <div class=\"scroll-top scroll-left\" style=\"display: block;\">
        <a href=\"#\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>
      </div>
      ";
            }
            // line 214
            echo "      ";
        }
        // line 215
        echo "      <div class=\"row\">
        ";
        // line 216
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 216)) {
            // line 217
            echo "        <div id=\"footer-block\">
          ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 221
        echo "        <div class=\"bottom-footer\">
          <div class=\"social-icons\">
            ";
        // line 223
        if (($context["show_social_icon"] ?? null)) {
            // line 224
            echo "            <div class=\"social-media\">
              ";
            // line 225
            if (($context["facebook_url"] ?? null)) {
                // line 226
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 226, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
            }
            // line 228
            echo "              ";
            if (($context["instagram_url"] ?? null)) {
                // line 229
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 229, $this->source), "html", null, true);
                echo "\"  class=\"instagram\" target=\"_blank\" ><i class=\"fa fa-instagram\"></i></a>
              ";
            }
            // line 231
            echo "              ";
            if (($context["twitter_url"] ?? null)) {
                // line 232
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 232, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
            }
            // line 234
            echo "              ";
            if (($context["youtube_url"] ?? null)) {
                // line 235
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 235, $this->source), "html", null, true);
                echo "\" class=\"youtube\" target=\"_blank\" ><i class=\"fa fa-youtube-play\"></i></a>
              ";
            }
            // line 237
            echo "              ";
            if (($context["linkedin_url"] ?? null)) {
                // line 238
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 238, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
            }
            // line 240
            echo "            </div>
            ";
        }
        // line 242
        echo "          </div>
          <div class=\"copyright-text\">
            ";
        // line 244
        if (($context["show_copyright"] ?? null)) {
            // line 245
            echo "            <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 245, $this->source), "html", null, true);
            echo "</p>
            ";
        }
        // line 247
        echo "          </div>
        </div>
      </div>
    </div>
  </footer>
</div>";
    }

    // line 109
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "  <div role=\"main\" class=\"container js-quickedit-main-content main-container ";
        if ((($context["banner_display"] ?? null) == "0")) {
            echo "ban-hide";
        }
        echo "\">
    <div class=\"row\">

      ";
        // line 114
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 114)) {
            // line 115
            echo "      ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 120
            echo "      ";
        }
        // line 121
        echo "
      ";
        // line 123
        echo "      ";
        // line 124
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 125
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 125) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 125))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 126
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 126) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 126)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 127
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 127) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 127)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 128
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128)))) ? ("col-sm-12") : (""))];
        // line 131
        echo "      <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 131), 131, $this->source), "html", null, true);
        echo ">

        ";
        // line 134
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134)) {
            // line 135
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 138
            echo "        ";
        }
        // line 139
        echo "
        ";
        // line 141
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 142
            echo "        ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 145
            echo "        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 149
            echo "        ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 152
            echo "        ";
        }
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 159
        echo "      </section>

      ";
        // line 162
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 162)) {
            // line 163
            echo "      ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 168
            echo "      ";
        }
        // line 169
        echo "    </div>
  </div>
  ";
    }

    // line 115
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "
      </aside>
      ";
    }

    // line 135
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "        <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "</div>
        ";
    }

    // line 142
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 143, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 149
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "        <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 150, $this->source), "html", null, true);
        echo "</ul>
        ";
    }

    // line 155
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "        <a id=\"main-content\"></a>
        ";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 163
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
        // line 165
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
        echo "
      </aside>
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/particles_orange/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 165,  512 => 164,  508 => 163,  502 => 157,  499 => 156,  495 => 155,  488 => 150,  484 => 149,  477 => 143,  473 => 142,  466 => 136,  462 => 135,  455 => 117,  452 => 116,  448 => 115,  442 => 169,  439 => 168,  436 => 163,  433 => 162,  429 => 159,  426 => 155,  423 => 153,  420 => 152,  417 => 149,  414 => 148,  411 => 146,  408 => 145,  405 => 142,  402 => 141,  399 => 139,  396 => 138,  393 => 135,  390 => 134,  384 => 131,  382 => 128,  381 => 127,  380 => 126,  379 => 125,  378 => 124,  376 => 123,  373 => 121,  370 => 120,  367 => 115,  364 => 114,  355 => 110,  351 => 109,  342 => 247,  336 => 245,  334 => 244,  330 => 242,  326 => 240,  320 => 238,  317 => 237,  311 => 235,  308 => 234,  302 => 232,  299 => 231,  293 => 229,  290 => 228,  284 => 226,  282 => 225,  279 => 224,  277 => 223,  273 => 221,  267 => 218,  264 => 217,  262 => 216,  259 => 215,  256 => 214,  250 => 210,  248 => 209,  243 => 206,  240 => 205,  238 => 204,  233 => 201,  228 => 198,  222 => 195,  217 => 194,  214 => 193,  208 => 190,  203 => 189,  200 => 188,  194 => 185,  189 => 184,  186 => 183,  180 => 180,  175 => 179,  173 => 178,  169 => 176,  167 => 175,  162 => 172,  159 => 109,  156 => 107,  150 => 104,  147 => 103,  144 => 102,  141 => 100,  138 => 99,  133 => 96,  123 => 91,  119 => 90,  115 => 89,  112 => 88,  110 => 87,  106 => 86,  99 => 83,  96 => 82,  94 => 81,  84 => 73,  78 => 71,  76 => 70,  64 => 60,  58 => 57,  55 => 56,  53 => 55,  46 => 50,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/particles_orange/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\particles_orange\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 55, "block" => 109, "set" => 124);
        static $filters = array("escape" => 57, "striptags" => 89, "t" => 91);
        static $functions = array("attach_library" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 'striptags', 't'],
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
