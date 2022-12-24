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

/* themes/contrib/product_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_81a8d63e0653d624299a8d5a76049923 extends \Twig\Template
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
    <div class=\"container-\">
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
                echo "            <div class=\"col-sm second\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 114
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 114)) {
                // line 115
                echo "            <div class=\"col-sm third\">";
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


<!--Start: Top Message -->
";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 136)) {
            // line 137
            echo "  <div class=\"top-message widgets\">
    <div class=\"container\">
      ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 143
        echo "<!--End: Top Message -->


<!--Start: Title -->
";
        // line 147
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 147) &&  !($context["is_front"] ?? null))) {
            // line 148
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 156
        echo "<!--End: Title -->


<div class=\"main-content widgets\">
  <div class=\"container\">
    <div class=\"\">
      <!--Start: Breadcrumb -->
      ";
        // line 163
        if ( !($context["is_front"] ?? null)) {
            // line 164
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 168
        echo "      <!--End: Breadcrumb -->
      <div class=\"row layout\">
        <!--- Start: Left SideBar -->
        ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 171)) {
            // line 172
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 172, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 178
        echo "        <!-- End Left SideBar -->
        <!--- Start Content -->
        ";
        // line 180
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 180)) {
            // line 181
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 181, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 187
        echo "        <!-- End: Content -->
        <!-- Start: Right SideBar -->
        ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 189)) {
            // line 190
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 190, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 196
        echo "        <!-- End: Right SideBar -->
      </div>
    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 205
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 205) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 205)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 205))) {
            // line 206
            echo "  <div class=\"features widgets\">
    <div class=\"container-\">
      ";
            // line 208
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 208)) {
                // line 209
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 210
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 213
            echo "      <div class=\"row features-list\">
        ";
            // line 214
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 214)) {
                // line 215
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 215, $this->source), "html", null, true);
                echo ">
            ";
                // line 216
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 219
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 219)) {
                // line 220
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 220, $this->source), "html", null, true);
                echo ">
            ";
                // line 221
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 224
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 224)) {
                // line 225
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 225, $this->source), "html", null, true);
                echo ">
            ";
                // line 226
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 229
            echo "      </div>
    </div>
  </div>
";
        }
        // line 233
        echo "<!--End: Features -->


<!-- Start: Updates widgets -->
";
        // line 237
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 237) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 237)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 237)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 237))) {
            // line 238
            echo "  <div class=\"updates widgets\" id=\"updates\">    
    <div class=\"container\">
      ";
            // line 240
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 240)) {
                // line 241
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 242
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 245
            echo "      <div class=\"row updates-list\">
        ";
            // line 246
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 246)) {
                // line 247
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 247, $this->source), "html", null, true);
                echo ">
            ";
                // line 248
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 251
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 251)) {
                // line 252
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 252, $this->source), "html", null, true);
                echo ">
            ";
                // line 253
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 253), 253, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 256
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 256)) {
                // line 257
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 257, $this->source), "html", null, true);
                echo ">
            ";
                // line 258
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 261
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 261)) {
                // line 262
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 262, $this->source), "html", null, true);
                echo ">
            ";
                // line 263
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 266
            echo "      </div>
    </div>
  </div>
";
        }
        // line 270
        echo "<!--End: Updates widgets -->


<!-- Start: Middle widgets -->
";
        // line 274
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 274) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 274)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 274)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 274))) {
            // line 275
            echo "  <div class=\"midwidget widgets\" id=\"midwidget\">    
    <div class=\"container\">
      ";
            // line 277
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 277)) {
                // line 278
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 279
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 282
            echo "      <div class=\"row midwidget-list\">
        ";
            // line 283
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 283)) {
                // line 284
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 284, $this->source), "html", null, true);
                echo ">
            ";
                // line 285
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 288
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 288)) {
                // line 289
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 289, $this->source), "html", null, true);
                echo ">
            ";
                // line 290
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 293
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 293)) {
                // line 294
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 294, $this->source), "html", null, true);
                echo ">
            ";
                // line 295
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 298
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 298)) {
                // line 299
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 299, $this->source), "html", null, true);
                echo ">
            ";
                // line 300
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 303
            echo "      </div>
    </div>
  </div>
";
        }
        // line 307
        echo "<!--End: Middle widgets -->


<!-- Start: Bottom widgets -->
";
        // line 311
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 311) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 311)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 311)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 311))) {
            // line 312
            echo "  <div class=\"bottom-widget widgets\" id=\"bottom-widget\">    
    <div class=\"container\">
      ";
            // line 314
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 314)) {
                // line 315
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 316
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 316), 316, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 319
            echo "      <div class=\"row bottom-widget-list\">
        ";
            // line 320
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 320)) {
                // line 321
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 321, $this->source), "html", null, true);
                echo ">
            ";
                // line 322
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 322), 322, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 325
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 325)) {
                // line 326
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 326, $this->source), "html", null, true);
                echo ">
            ";
                // line 327
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 327), 327, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 330
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 330)) {
                // line 331
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 331, $this->source), "html", null, true);
                echo ">
            ";
                // line 332
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 335
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 335)) {
                // line 336
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 336, $this->source), "html", null, true);
                echo ">
            ";
                // line 337
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 337), 337, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 340
            echo "      </div>
    </div>
  </div>
";
        }
        // line 344
        echo "<!--End: Bottom widgets -->


<!-- Start: Clients -->
";
        // line 348
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 348)) {
            echo " 
  <div class=\"clients widgets\" id=\"clients\">
    ";
            // line 350
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 350)) {
                // line 351
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 352
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 355
            echo "    <div class=\"container\">
      ";
            // line 356
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 360
        echo "<!--End: Clients -->


<!-- Start: Footer widgets -->
";
        // line 364
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 364) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 364)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 364)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 364)) || ($context["show_social_icon"] ?? null))) {
            // line 365
            echo "  <div class=\"footer widgets\" id=\"footer\">
    <div class=\"container\">
      ";
            // line 367
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 367)) {
                // line 368
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 369
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 369), 369, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 372
            echo "      <div class=\"row\">
        ";
            // line 373
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 373) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 373)) || ($context["show_social_icon"] ?? null))) {
                // line 374
                echo "          <div class=\"col-md\">
            ";
                // line 375
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 375), 375, $this->source), "html", null, true);
                echo "
            <div class=\"search-field clearfix\">
              ";
                // line 377
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 377), 377, $this->source), "html", null, true);
                echo "
            </div>
            ";
                // line 379
                if (($context["show_social_icon"] ?? null)) {
                    // line 380
                    echo "                <div class=\"social-media\">
                  Follow us 
                  ";
                    // line 382
                    if (($context["facebook_url"] ?? null)) {
                        // line 383
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 383, $this->source), "html", null, true);
                        echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                  ";
                    }
                    // line 385
                    echo "                  ";
                    if (($context["twitter_url"] ?? null)) {
                        // line 386
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 386, $this->source), "html", null, true);
                        echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                  ";
                    }
                    // line 388
                    echo "                  ";
                    if (($context["linkedin_url"] ?? null)) {
                        // line 389
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 389, $this->source), "html", null, true);
                        echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                  ";
                    }
                    // line 391
                    echo "                  ";
                    if (($context["instagram_url"] ?? null)) {
                        // line 392
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 392, $this->source), "html", null, true);
                        echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                  ";
                    }
                    // line 394
                    echo "                  ";
                    if (($context["rss_url"] ?? null)) {
                        // line 395
                        echo "                    <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 395, $this->source), "html", null, true);
                        echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                  ";
                    }
                    // line 397
                    echo "                </div>
              ";
                }
                // line 399
                echo "          </div>
        ";
            }
            // line 401
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 401)) {
                // line 402
                echo "          <div class=\"col-md\">
            ";
                // line 403
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 403), 403, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 406
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 406)) {
                // line 407
                echo "          <div class=\"col-md\">
            ";
                // line 408
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 408), 408, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 411
            echo "      </div>
    </div>
  </div>
";
        }
        // line 415
        echo "<!--End: Footer widgets -->


<!-- Start: Copyright -->
<div class=\"copyright widgets\">
  <div class=\"container\">
    <span>Copyright © ";
        // line 421
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 422
        if (($context["show_credit_link"] ?? null)) {
            // line 423
            echo "      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 425
        echo "  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/product_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  818 => 425,  814 => 423,  812 => 422,  808 => 421,  800 => 415,  794 => 411,  788 => 408,  785 => 407,  782 => 406,  776 => 403,  773 => 402,  770 => 401,  766 => 399,  762 => 397,  756 => 395,  753 => 394,  747 => 392,  744 => 391,  738 => 389,  735 => 388,  729 => 386,  726 => 385,  720 => 383,  718 => 382,  714 => 380,  712 => 379,  707 => 377,  702 => 375,  699 => 374,  697 => 373,  694 => 372,  688 => 369,  685 => 368,  683 => 367,  679 => 365,  677 => 364,  671 => 360,  664 => 356,  661 => 355,  655 => 352,  652 => 351,  650 => 350,  645 => 348,  639 => 344,  633 => 340,  627 => 337,  622 => 336,  619 => 335,  613 => 332,  608 => 331,  605 => 330,  599 => 327,  594 => 326,  591 => 325,  585 => 322,  580 => 321,  578 => 320,  575 => 319,  569 => 316,  566 => 315,  564 => 314,  560 => 312,  558 => 311,  552 => 307,  546 => 303,  540 => 300,  535 => 299,  532 => 298,  526 => 295,  521 => 294,  518 => 293,  512 => 290,  507 => 289,  504 => 288,  498 => 285,  493 => 284,  491 => 283,  488 => 282,  482 => 279,  479 => 278,  477 => 277,  473 => 275,  471 => 274,  465 => 270,  459 => 266,  453 => 263,  448 => 262,  445 => 261,  439 => 258,  434 => 257,  431 => 256,  425 => 253,  420 => 252,  417 => 251,  411 => 248,  406 => 247,  404 => 246,  401 => 245,  395 => 242,  392 => 241,  390 => 240,  386 => 238,  384 => 237,  378 => 233,  372 => 229,  366 => 226,  361 => 225,  358 => 224,  352 => 221,  347 => 220,  344 => 219,  338 => 216,  333 => 215,  331 => 214,  328 => 213,  322 => 210,  319 => 209,  317 => 208,  313 => 206,  311 => 205,  300 => 196,  293 => 192,  287 => 190,  285 => 189,  281 => 187,  274 => 183,  268 => 181,  266 => 180,  262 => 178,  255 => 174,  249 => 172,  247 => 171,  242 => 168,  236 => 165,  233 => 164,  231 => 163,  222 => 156,  214 => 151,  209 => 148,  207 => 147,  201 => 143,  194 => 139,  190 => 137,  188 => 136,  182 => 132,  175 => 128,  171 => 126,  169 => 125,  163 => 121,  157 => 117,  151 => 115,  148 => 114,  142 => 112,  139 => 111,  133 => 109,  131 => 108,  128 => 107,  122 => 104,  119 => 103,  117 => 102,  113 => 100,  111 => 99,  105 => 95,  99 => 91,  90 => 89,  86 => 88,  81 => 85,  79 => 84,  69 => 76,  63 => 74,  61 => 73,  56 => 70,  50 => 68,  48 => 67,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/product_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\product_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "for" => 88);
        static $filters = array("escape" => 68, "raw" => 89, "date" => 421);
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
