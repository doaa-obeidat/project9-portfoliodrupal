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

/* themes/contrib/profile_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_1df6cc423f14ab951c211a2e4e00fc75 extends \Twig\Template
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
        // line 60
        echo "

<!-- Start: Header -->
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"navbar-header col-md\">
        ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 67)) {
            // line 68
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 70
        echo "        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 73)) {
            // line 74
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 76
        echo "      </div>
    </div>
  </div>
</div>
<!-- End: Header -->


<!-- Start: Slides -->
";
        // line 84
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 85
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 89
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 89, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 95
        echo "<!-- End: Slides -->


<!-- Start: Top widget -->
";
        // line 99
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 99) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 99)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 99))) {
            // line 100
            echo "  <div class=\"topwidget widgets\" id=\"topwidget\">
    <div class=\"container\">
      ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 102)) {
                // line 103
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 107
            echo "        <div class=\"row topwidget-list clearfix\">
          ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 108)) {
                // line 109
                echo "            <div class=\"col-sm first\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 111
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 111)) {
                // line 112
                echo "            <div class=\"col-sm-3 second\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 114
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 114)) {
                // line 115
                echo "            <div class=\"col-sm-3 third\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 117
            echo "        </div>
    </div>
  </div>
";
        }
        // line 121
        echo "<!--End: Top widget -->

    
<!--Start: Highlighted -->
";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 125)) {
            // line 126
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 132
        echo "<!--End: Highlighted -->


<!--Start: Title -->
";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 136) &&  !($context["is_front"] ?? null))) {
            // line 137
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 145
        echo "<!--End: Title -->


<div class=\"main-content widgets\">
  <div class=\"container\">
    <div class=\"\">
      <!--Start: Breadcrumb -->
      ";
        // line 152
        if ( !($context["is_front"] ?? null)) {
            // line 153
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 157
        echo "      <!--End: Breadcrumb -->
      <div class=\"row layout\">
        <!--- Start: Left SideBar -->
        ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160)) {
            // line 161
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 161, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 167
        echo "        <!-- End Left SideBar -->
        <!--- Start Content -->
        ";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 169)) {
            // line 170
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 170, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 176
        echo "        <!-- End: Content -->
        <!-- Start: Right SideBar -->
        ";
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 178)) {
            // line 179
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 179, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 185
        echo "        <!-- End: Right SideBar -->
      </div>
    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 194
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 194) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 194)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 194))) {
            // line 195
            echo "  <div class=\"features widgets\">
    <div class=\"container\">
      ";
            // line 197
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 197)) {
                // line 198
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 199
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 202
            echo "      <div class=\"row features-list\">
        ";
            // line 203
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 203)) {
                // line 204
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 204, $this->source), "html", null, true);
                echo ">
            ";
                // line 205
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 208
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 208)) {
                // line 209
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 209, $this->source), "html", null, true);
                echo ">
            ";
                // line 210
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 213
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 213)) {
                // line 214
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 214, $this->source), "html", null, true);
                echo ">
            ";
                // line 215
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 218
            echo "      </div>
    </div>
  </div>
";
        }
        // line 222
        echo "<!--End: Features -->


<!-- Start: Updates widgets -->
";
        // line 226
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 226) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 226)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 226)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 226))) {
            // line 227
            echo "  <div class=\"updates widgets\" id=\"updates\">    
    <div class=\"container\">
      ";
            // line 229
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 229)) {
                // line 230
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 231
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 234
            echo "      <div class=\"row updates-list\">
        ";
            // line 235
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 235)) {
                // line 236
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 236, $this->source), "html", null, true);
                echo ">
            ";
                // line 237
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 237), 237, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 240
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 240)) {
                // line 241
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 241, $this->source), "html", null, true);
                echo ">
            ";
                // line 242
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 245
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 245)) {
                // line 246
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 246, $this->source), "html", null, true);
                echo ">
            ";
                // line 247
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 250
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 250)) {
                // line 251
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 251, $this->source), "html", null, true);
                echo ">
            ";
                // line 252
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 255
            echo "      </div>
    </div>
  </div>
";
        }
        // line 259
        echo "<!--End: Updates widgets -->


<!-- Start: Footer widgets -->
";
        // line 263
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 263) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 263)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 263)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 263)) || ($context["show_social_icon"] ?? null))) {
            // line 264
            echo "  <div class=\"footer widgets\" id=\"footer\">
    <div class=\"container\">
      ";
            // line 266
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 266)) {
                // line 267
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 268
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 271
            echo "      <div class=\"row\">
        ";
            // line 272
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 272) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 272)) || ($context["show_social_icon"] ?? null))) {
                // line 273
                echo "          <div class=\"col-md\">
            ";
                // line 274
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 274), 274, $this->source), "html", null, true);
                echo "
            <div class=\"search-field clearfix\">
              ";
                // line 276
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
                echo "
            </div>
            ";
                // line 278
                if (($context["show_social_icon"] ?? null)) {
                    // line 279
                    echo "                <div class=\"social-media\">
                  Follow us 
                  ";
                    // line 281
                    if (($context["facebook_url"] ?? null)) {
                        // line 282
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 282, $this->source), "html", null, true);
                        echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                  ";
                    }
                    // line 284
                    echo "                  ";
                    if (($context["twitter_url"] ?? null)) {
                        // line 285
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 285, $this->source), "html", null, true);
                        echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                  ";
                    }
                    // line 287
                    echo "                  ";
                    if (($context["linkedin_url"] ?? null)) {
                        // line 288
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 288, $this->source), "html", null, true);
                        echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                  ";
                    }
                    // line 290
                    echo "                  ";
                    if (($context["instagram_url"] ?? null)) {
                        // line 291
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 291, $this->source), "html", null, true);
                        echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                  ";
                    }
                    // line 293
                    echo "                  ";
                    if (($context["rss_url"] ?? null)) {
                        // line 294
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 294, $this->source), "html", null, true);
                        echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                  ";
                    }
                    // line 296
                    echo "                </div>
              ";
                }
                // line 298
                echo "          </div>
        ";
            }
            // line 300
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 300)) {
                // line 301
                echo "          <div class=\"col-md\">
            ";
                // line 302
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 305
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 305)) {
                // line 306
                echo "          <div class=\"col-md\">
            ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 310
            echo "      </div>
    </div>
  </div>
";
        }
        // line 314
        echo "<!--End: Footer widgets -->


<!-- Start: Copyright -->
<div class=\"copyright widgets\">
  <div class=\"container\">
    <span>Copyright © ";
        // line 320
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 321
        if (($context["show_credit_link"] ?? null)) {
            // line 322
            echo "      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 324
        echo "  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/profile_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 324,  589 => 322,  587 => 321,  583 => 320,  575 => 314,  569 => 310,  563 => 307,  560 => 306,  557 => 305,  551 => 302,  548 => 301,  545 => 300,  541 => 298,  537 => 296,  531 => 294,  528 => 293,  522 => 291,  519 => 290,  513 => 288,  510 => 287,  504 => 285,  501 => 284,  495 => 282,  493 => 281,  489 => 279,  487 => 278,  482 => 276,  477 => 274,  474 => 273,  472 => 272,  469 => 271,  463 => 268,  460 => 267,  458 => 266,  454 => 264,  452 => 263,  446 => 259,  440 => 255,  434 => 252,  429 => 251,  426 => 250,  420 => 247,  415 => 246,  412 => 245,  406 => 242,  401 => 241,  398 => 240,  392 => 237,  387 => 236,  385 => 235,  382 => 234,  376 => 231,  373 => 230,  371 => 229,  367 => 227,  365 => 226,  359 => 222,  353 => 218,  347 => 215,  342 => 214,  339 => 213,  333 => 210,  328 => 209,  325 => 208,  319 => 205,  314 => 204,  312 => 203,  309 => 202,  303 => 199,  300 => 198,  298 => 197,  294 => 195,  292 => 194,  281 => 185,  274 => 181,  268 => 179,  266 => 178,  262 => 176,  255 => 172,  249 => 170,  247 => 169,  243 => 167,  236 => 163,  230 => 161,  228 => 160,  223 => 157,  217 => 154,  214 => 153,  212 => 152,  203 => 145,  195 => 140,  190 => 137,  188 => 136,  182 => 132,  175 => 128,  171 => 126,  169 => 125,  163 => 121,  157 => 117,  151 => 115,  148 => 114,  142 => 112,  139 => 111,  133 => 109,  131 => 108,  128 => 107,  122 => 104,  119 => 103,  117 => 102,  113 => 100,  111 => 99,  105 => 95,  99 => 91,  90 => 89,  86 => 88,  81 => 85,  79 => 84,  69 => 76,  63 => 74,  61 => 73,  56 => 70,  50 => 68,  48 => 67,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/profile_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\profile_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "for" => 88);
        static $filters = array("escape" => 68, "raw" => 89, "date" => 320);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
