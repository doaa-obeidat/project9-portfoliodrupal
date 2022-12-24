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

/* themes/contrib/fashion_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_2be8f145b769785aa14a602ef3e74b5e extends \Twig\Template
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

      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 70)) {
            // line 71
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 73
        echo "      </div>

      ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 75)) {
            // line 76
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 78
        echo "
    </div>
  </div>
</div>
<!-- End: Widget -->


<!-- Start: Slides -->
";
        // line 86
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 87
            echo "  <div class=\"flexslider\">
    <ul class=\"slides\">
      ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 90
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 90, $this->source));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    </ul>
  </div>
";
        }
        // line 95
        echo "<!-- End: Widget -->


<!-- Start: Top widget -->
";
        // line 99
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 99) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 99)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 99))) {
            // line 100
            echo "  
  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">

      ";
            // line 104
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 104)) {
                // line 105
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 109
            echo "
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 111)) {
                // line 112
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 112, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 114
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 114)) {
                // line 115
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 115, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 117
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 117)) {
                // line 118
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 118, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 120
            echo "        </div>
    </div>
  </div>

";
        }
        // line 125
        echo "<!-- End: Widget -->

    
<!--Start: Highlighted -->
";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129)) {
            // line 130
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 136
        echo "<!-- End: Widget -->


<!--Start: Top Message -->
";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 140)) {
            // line 141
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 147
        echo "<!-- End: Widget -->


<!--Start: Title -->
";
        // line 151
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 151) &&  !($context["is_front"] ?? null))) {
            // line 152
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 160
        echo "<!-- End: Widget -->


<!-- Start: Main content -->
<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 168
        if ( !($context["is_front"] ?? null)) {
            // line 169
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 173
        echo "
      <div class=\"row layout\">

        ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 176)) {
            // line 177
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 177, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 183
        echo "
        ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 184)) {
            // line 185
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 185, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 191
        echo "        
        ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 192)) {
            // line 193
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 193, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 199
        echo "        
      </div>
    </div>
  </div>
</div>
<!-- End: Widget -->


<!-- Start: Features -->
";
        // line 208
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 208) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 208)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 208))) {
            // line 209
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 213
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 213)) {
                // line 214
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 215
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 218
            echo "
      <div class=\"row features-list\">
        ";
            // line 220
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 220)) {
                // line 221
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 221, $this->source), "html", null, true);
                echo ">
            ";
                // line 222
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 225
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 225)) {
                // line 226
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 226, $this->source), "html", null, true);
                echo ">
            ";
                // line 227
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 230
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 230)) {
                // line 231
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 231, $this->source), "html", null, true);
                echo ">
            ";
                // line 232
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 235
            echo "      </div>
    </div>
  </div>

";
        }
        // line 240
        echo "<!-- End: Widget -->


<!-- Start: Updates widgets -->
";
        // line 244
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 244) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 244)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 244))) {
            // line 245
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 249
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 249)) {
                // line 250
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 251
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 254
            echo "
      <div class=\"row updates-list\">
        ";
            // line 256
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 256)) {
                // line 257
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 257, $this->source), "html", null, true);
                echo ">
            ";
                // line 258
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 261
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 261)) {
                // line 262
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 262, $this->source), "html", null, true);
                echo ">
            ";
                // line 263
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 266
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 266)) {
                // line 267
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 267, $this->source), "html", null, true);
                echo ">
            ";
                // line 268
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 271
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 271)) {
                // line 272
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 272, $this->source), "html", null, true);
                echo ">
            ";
                // line 273
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 276
            echo "      </div>
    </div>
  </div>

";
        }
        // line 281
        echo "<!-- End: Widget -->


<!-- Start: Middle widgets -->
";
        // line 285
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 285) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 285)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 285)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 285))) {
            // line 286
            echo "
  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      ";
            // line 290
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 290)) {
                // line 291
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 292
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 295
            echo "
      <div class=\"row midwidget-list\">
        ";
            // line 297
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 297)) {
                // line 298
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 298, $this->source), "html", null, true);
                echo ">
            ";
                // line 299
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 302
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 302)) {
                // line 303
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 303, $this->source), "html", null, true);
                echo ">
            ";
                // line 304
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 307
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 307)) {
                // line 308
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 308, $this->source), "html", null, true);
                echo ">
            ";
                // line 309
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 309), 309, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 312
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 312)) {
                // line 313
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 313, $this->source), "html", null, true);
                echo ">
            ";
                // line 314
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 317
            echo "      </div>
    </div>
  </div>

";
        }
        // line 322
        echo "<!-- End: Widget -->


<!-- Start: Bottom widgets -->
";
        // line 326
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 326) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 326)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 326)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 326))) {
            // line 327
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 331
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 331)) {
                // line 332
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 333
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 336
            echo "
      <div class=\"row bottom-widget-list\">
        
        ";
            // line 339
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 339)) {
                // line 340
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 340, $this->source), "html", null, true);
                echo ">
            ";
                // line 341
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 344
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 344)) {
                // line 345
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 345, $this->source), "html", null, true);
                echo ">
            ";
                // line 346
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 349
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 349)) {
                // line 350
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 350, $this->source), "html", null, true);
                echo ">
            ";
                // line 351
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 351), 351, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 354
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 354)) {
                // line 355
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 355, $this->source), "html", null, true);
                echo ">
            ";
                // line 356
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 359
            echo "      </div>
    </div>
  </div>

";
        }
        // line 364
        echo "<!-- End: Widget -->


<!-- Start: Footer widgets -->
";
        // line 368
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 368) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 368)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 368))) {
            // line 369
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 373
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 373)) {
                // line 374
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 375
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 375), 375, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 378
            echo "
      <div class=\"row\">
        ";
            // line 380
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 380)) {
                // line 381
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 381, $this->source), "html", null, true);
                echo ">
            ";
                // line 382
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 382), 382, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 385
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 385)) {
                // line 386
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 386, $this->source), "html", null, true);
                echo ">
            ";
                // line 387
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 387), 387, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 390
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 390)) {
                // line 391
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 391, $this->source), "html", null, true);
                echo ">
            ";
                // line 392
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 392), 392, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 395
            echo "      </div>
    </div>
  </div>

";
        }
        // line 400
        echo "<!-- End: Widget -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">

    <span>Copyright © ";
        // line 407
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

    ";
        // line 409
        if (($context["show_social_icon"] ?? null)) {
            // line 410
            echo "      <span class=\"social-media\">
        Follow us 
        ";
            // line 412
            if (($context["facebook_url"] ?? null)) {
                // line 413
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 413, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
        ";
            }
            // line 415
            echo "        ";
            if (($context["twitter_url"] ?? null)) {
                // line 416
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 416, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 418
            echo "        ";
            if (($context["linkedin_url"] ?? null)) {
                // line 419
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 419, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
        ";
            }
            // line 421
            echo "        ";
            if (($context["instagram_url"] ?? null)) {
                // line 422
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 422, $this->source), "html", null, true);
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
        ";
            }
            // line 424
            echo "        ";
            if (($context["rss_url"] ?? null)) {
                // line 425
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 425, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
        ";
            }
            // line 427
            echo "      </span>
    ";
        }
        // line 429
        echo "
    ";
        // line 430
        if (($context["show_credit_link"] ?? null)) {
            // line 431
            echo "      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 433
        echo "
  </div>
</div>
<!-- End: Widget -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/fashion_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  819 => 433,  815 => 431,  813 => 430,  810 => 429,  806 => 427,  800 => 425,  797 => 424,  791 => 422,  788 => 421,  782 => 419,  779 => 418,  773 => 416,  770 => 415,  764 => 413,  762 => 412,  758 => 410,  756 => 409,  751 => 407,  742 => 400,  735 => 395,  729 => 392,  724 => 391,  721 => 390,  715 => 387,  710 => 386,  707 => 385,  701 => 382,  696 => 381,  694 => 380,  690 => 378,  684 => 375,  681 => 374,  679 => 373,  673 => 369,  671 => 368,  665 => 364,  658 => 359,  652 => 356,  647 => 355,  644 => 354,  638 => 351,  633 => 350,  630 => 349,  624 => 346,  619 => 345,  616 => 344,  610 => 341,  605 => 340,  603 => 339,  598 => 336,  592 => 333,  589 => 332,  587 => 331,  581 => 327,  579 => 326,  573 => 322,  566 => 317,  560 => 314,  555 => 313,  552 => 312,  546 => 309,  541 => 308,  538 => 307,  532 => 304,  527 => 303,  524 => 302,  518 => 299,  513 => 298,  511 => 297,  507 => 295,  501 => 292,  498 => 291,  496 => 290,  490 => 286,  488 => 285,  482 => 281,  475 => 276,  469 => 273,  464 => 272,  461 => 271,  455 => 268,  450 => 267,  447 => 266,  441 => 263,  436 => 262,  433 => 261,  427 => 258,  422 => 257,  420 => 256,  416 => 254,  410 => 251,  407 => 250,  405 => 249,  399 => 245,  397 => 244,  391 => 240,  384 => 235,  378 => 232,  373 => 231,  370 => 230,  364 => 227,  359 => 226,  356 => 225,  350 => 222,  345 => 221,  343 => 220,  339 => 218,  333 => 215,  330 => 214,  328 => 213,  322 => 209,  320 => 208,  309 => 199,  302 => 195,  296 => 193,  294 => 192,  291 => 191,  284 => 187,  278 => 185,  276 => 184,  273 => 183,  266 => 179,  260 => 177,  258 => 176,  253 => 173,  247 => 170,  244 => 169,  242 => 168,  232 => 160,  224 => 155,  219 => 152,  217 => 151,  211 => 147,  204 => 143,  200 => 141,  198 => 140,  192 => 136,  185 => 132,  181 => 130,  179 => 129,  173 => 125,  166 => 120,  158 => 118,  155 => 117,  147 => 115,  144 => 114,  136 => 112,  134 => 111,  130 => 109,  124 => 106,  121 => 105,  119 => 104,  113 => 100,  111 => 99,  105 => 95,  100 => 92,  91 => 90,  87 => 89,  83 => 87,  81 => 86,  71 => 78,  65 => 76,  63 => 75,  59 => 73,  53 => 71,  51 => 70,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/fashion_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\fashion_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 70, "for" => 89);
        static $filters = array("escape" => 71, "raw" => 90, "date" => 407);
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
