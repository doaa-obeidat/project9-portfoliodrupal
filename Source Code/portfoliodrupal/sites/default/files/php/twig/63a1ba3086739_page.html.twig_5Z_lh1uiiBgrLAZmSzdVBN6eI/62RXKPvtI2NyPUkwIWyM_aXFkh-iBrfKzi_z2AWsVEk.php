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

/* themes/contrib/advocate_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_47805d430b9a30a6ec6422a1caa3686d extends \Twig\Template
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
<!-- Start: Top Bar -->
<div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm\">
        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 66)) {
            // line 67
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 69
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 69)) {
            // line 70
            echo "          <i class=\"fa fa-envelope\"></i>
          ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 73
        echo "      </div>
      ";
        // line 74
        if (($context["show_social_icon"] ?? null)) {
            // line 75
            echo "        <div class=\"col-sm\">
          <p class=\"social-media\">
            Follow us 
            ";
            // line 78
            if (($context["facebook_url"] ?? null)) {
                // line 79
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 79, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 81
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 82
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 82, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 84
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 85, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 87
            echo "            ";
            if (($context["instagram_url"] ?? null)) {
                // line 88
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 88, $this->source), "html", null, true);
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
            ";
            }
            // line 90
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 91
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 91, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 93
            echo "          </p>
        </div>
      ";
        }
        // line 96
        echo "    </div>
  </div>
</div>
<!-- End: Top Bar -->


<!-- Start: Header -->

<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"navbar-header col-md\">
        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 108)) {
            // line 109
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 111
        echo "        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 114)) {
            // line 115
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 117
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 117)) {
            // line 118
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 120
        echo "      </div>
    </div>
  </div>
</div>
<!-- End: Header -->


<!-- Start: Slides -->
";
        // line 128
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 129
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 133
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 133, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 139
        echo "<!-- End: Slides -->


<!-- Start: Top widget -->
";
        // line 143
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 143) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 143)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 143))) {
            // line 144
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
      ";
            // line 146
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 146)) {
                // line 147
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 148
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 151
            echo "        <div class=\"row topwidget-list clearfix\">
          ";
            // line 152
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 152)) {
                // line 153
                echo "            <div class=\"col-sm-6 first\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 155
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 155)) {
                // line 156
                echo "            <div class=\"col-sm-3 second\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 158
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 158)) {
                // line 159
                echo "            <div class=\"col-sm-3 third\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 161
            echo "        </div>
    </div>
  </div>
";
        }
        // line 165
        echo "<!--End: Top widget -->

    
<!--Start: Highlighted -->
";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 169)) {
            // line 170
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 176
        echo "<!--End: Highlighted -->


<!--Start: Top Message -->
";
        // line 180
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 180)) {
            // line 181
            echo "  <div class=\"container\">
    <div class=\"top-message\">
      ";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 187
        echo "<!--End: Top Message -->


<!--Start: Title -->
";
        // line 191
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 191) &&  !($context["is_front"] ?? null))) {
            // line 192
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 200
        echo "<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">
      <!--Start: Breadcrumb -->
      ";
        // line 207
        if ( !($context["is_front"] ?? null)) {
            // line 208
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 209
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 212
        echo "      <!--End: Breadcrumb -->
      <div class=\"row layout\">
        <!--- Start: Left SideBar -->
        ";
        // line 215
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 215)) {
            // line 216
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 216, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 222
        echo "        <!-- End Left SideBar -->
        <!--- Start Content -->
        ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 224)) {
            // line 225
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 225, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 227
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 231
        echo "        <!-- End: Content -->
        <!-- Start: Right SideBar -->
        ";
        // line 233
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 233)) {
            // line 234
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 234, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 236
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 240
        echo "        <!-- End: Right SideBar -->
      </div>
    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 249
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 249) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 249)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 249))) {
            // line 250
            echo "  <div class=\"features\">
    <div class=\"container\">
      ";
            // line 252
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 252)) {
                // line 253
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 254
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 257
            echo "      <div class=\"row features-list\">
        ";
            // line 258
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 258)) {
                // line 259
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 259, $this->source), "html", null, true);
                echo ">
            ";
                // line 260
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 260), 260, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 263
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 263)) {
                // line 264
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 264, $this->source), "html", null, true);
                echo ">
            ";
                // line 265
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 268
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 268)) {
                // line 269
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 269, $this->source), "html", null, true);
                echo ">
            ";
                // line 270
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 270), 270, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 273
            echo "      </div>
    </div>
  </div>
";
        }
        // line 277
        echo "<!--End: Features -->


<!-- Start: Updates widgets -->
";
        // line 281
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 281) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 281)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 281)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 281))) {
            // line 282
            echo "  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">
      ";
            // line 284
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 284)) {
                // line 285
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 286
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 289
            echo "      <div class=\"row updates-list\">
        ";
            // line 290
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 290)) {
                // line 291
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 291, $this->source), "html", null, true);
                echo ">
            ";
                // line 292
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 295
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 295)) {
                // line 296
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 296, $this->source), "html", null, true);
                echo ">
            ";
                // line 297
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 300
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 300)) {
                // line 301
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 301, $this->source), "html", null, true);
                echo ">
            ";
                // line 302
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 305
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 305)) {
                // line 306
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 306, $this->source), "html", null, true);
                echo ">
            ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
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
        echo "<!--End: Updates widgets -->


<!-- Start: Middle widgets -->
";
        // line 318
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 318) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 318)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 318)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 318))) {
            // line 319
            echo "  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">
      ";
            // line 321
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 321)) {
                // line 322
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 323
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 326
            echo "      <div class=\"row midwidget-list\">
        ";
            // line 327
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 327)) {
                // line 328
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 328, $this->source), "html", null, true);
                echo ">
            ";
                // line 329
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 332
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 332)) {
                // line 333
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 333, $this->source), "html", null, true);
                echo ">
            ";
                // line 334
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 337
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 337)) {
                // line 338
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 338, $this->source), "html", null, true);
                echo ">
            ";
                // line 339
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 342
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 342)) {
                // line 343
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 343, $this->source), "html", null, true);
                echo ">
            ";
                // line 344
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 344), 344, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 347
            echo "      </div>
    </div>
  </div>
";
        }
        // line 351
        echo "<!--End: Middle widgets -->


<!-- Start: Bottom widgets -->
";
        // line 355
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 355) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 355)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 355)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 355))) {
            // line 356
            echo "  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">
      ";
            // line 358
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 358)) {
                // line 359
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 360
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 363
            echo "      <div class=\"row bottom-widget-list\">
        ";
            // line 364
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 364)) {
                // line 365
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 365, $this->source), "html", null, true);
                echo ">
            ";
                // line 366
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 366), 366, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 369
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 369)) {
                // line 370
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 370, $this->source), "html", null, true);
                echo ">
            ";
                // line 371
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 371), 371, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 374
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 374)) {
                // line 375
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 375, $this->source), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 379
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 379)) {
                // line 380
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 380, $this->source), "html", null, true);
                echo ">
            ";
                // line 381
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 381), 381, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 384
            echo "      </div>
    </div>
  </div>
";
        }
        // line 388
        echo "<!--End: Bottom widgets -->


<!-- Start: Clients -->
";
        // line 392
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 392)) {
            echo " 
  <div class=\"clients\" id=\"clients\">
    ";
            // line 394
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 394)) {
                // line 395
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 396
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 396), 396, $this->source), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 399
            echo "    <div class=\"container\">
      ";
            // line 400
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 400), 400, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 404
        echo "<!--End: Clients -->


<!-- Start: Footer widgets -->
";
        // line 408
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 408) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 408)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 408))) {
            // line 409
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      ";
            // line 411
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 411)) {
                // line 412
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 413
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 416
            echo "      <div class=\"row\">
        ";
            // line 417
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 417)) {
                // line 418
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 418, $this->source), "html", null, true);
                echo ">
            ";
                // line 419
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 419), 419, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 422
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 422)) {
                // line 423
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 423, $this->source), "html", null, true);
                echo ">
            ";
                // line 424
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 424), 424, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 427
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 427)) {
                // line 428
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 428, $this->source), "html", null, true);
                echo ">
            ";
                // line 429
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 429), 429, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 432
            echo "      </div>
    </div>
  </div>
";
        }
        // line 436
        echo "<!--End: Footer widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <span>Copyright © ";
        // line 442
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 443
        if (($context["show_credit_link"] ?? null)) {
            // line 444
            echo "      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 446
        echo "  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/advocate_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  862 => 446,  858 => 444,  856 => 443,  852 => 442,  844 => 436,  838 => 432,  832 => 429,  827 => 428,  824 => 427,  818 => 424,  813 => 423,  810 => 422,  804 => 419,  799 => 418,  797 => 417,  794 => 416,  788 => 413,  785 => 412,  783 => 411,  779 => 409,  777 => 408,  771 => 404,  764 => 400,  761 => 399,  755 => 396,  752 => 395,  750 => 394,  745 => 392,  739 => 388,  733 => 384,  727 => 381,  722 => 380,  719 => 379,  713 => 376,  708 => 375,  705 => 374,  699 => 371,  694 => 370,  691 => 369,  685 => 366,  680 => 365,  678 => 364,  675 => 363,  669 => 360,  666 => 359,  664 => 358,  660 => 356,  658 => 355,  652 => 351,  646 => 347,  640 => 344,  635 => 343,  632 => 342,  626 => 339,  621 => 338,  618 => 337,  612 => 334,  607 => 333,  604 => 332,  598 => 329,  593 => 328,  591 => 327,  588 => 326,  582 => 323,  579 => 322,  577 => 321,  573 => 319,  571 => 318,  565 => 314,  559 => 310,  553 => 307,  548 => 306,  545 => 305,  539 => 302,  534 => 301,  531 => 300,  525 => 297,  520 => 296,  517 => 295,  511 => 292,  506 => 291,  504 => 290,  501 => 289,  495 => 286,  492 => 285,  490 => 284,  486 => 282,  484 => 281,  478 => 277,  472 => 273,  466 => 270,  461 => 269,  458 => 268,  452 => 265,  447 => 264,  444 => 263,  438 => 260,  433 => 259,  431 => 258,  428 => 257,  422 => 254,  419 => 253,  417 => 252,  413 => 250,  411 => 249,  400 => 240,  393 => 236,  387 => 234,  385 => 233,  381 => 231,  374 => 227,  368 => 225,  366 => 224,  362 => 222,  355 => 218,  349 => 216,  347 => 215,  342 => 212,  336 => 209,  333 => 208,  331 => 207,  322 => 200,  314 => 195,  309 => 192,  307 => 191,  301 => 187,  294 => 183,  290 => 181,  288 => 180,  282 => 176,  275 => 172,  271 => 170,  269 => 169,  263 => 165,  257 => 161,  251 => 159,  248 => 158,  242 => 156,  239 => 155,  233 => 153,  231 => 152,  228 => 151,  222 => 148,  219 => 147,  217 => 146,  213 => 144,  211 => 143,  205 => 139,  199 => 135,  190 => 133,  186 => 132,  181 => 129,  179 => 128,  169 => 120,  163 => 118,  160 => 117,  154 => 115,  152 => 114,  147 => 111,  141 => 109,  139 => 108,  125 => 96,  120 => 93,  114 => 91,  111 => 90,  105 => 88,  102 => 87,  96 => 85,  93 => 84,  87 => 82,  84 => 81,  78 => 79,  76 => 78,  71 => 75,  69 => 74,  66 => 73,  61 => 71,  58 => 70,  55 => 69,  49 => 67,  47 => 66,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/advocate_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\advocate_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 66, "for" => 132);
        static $filters = array("escape" => 67, "raw" => 133, "date" => 442);
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
