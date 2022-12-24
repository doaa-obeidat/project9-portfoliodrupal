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

/* themes/contrib/architects_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_3c1352b92dac7044efae446d9a18615c extends \Twig\Template
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

<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>
      <!-- End: Header -->

      ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 77)) {
            // line 78
            echo "        <div class=\"col-md-9\">
          ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 79)) {
                // line 80
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 82
            echo "        </div>
      ";
        }
        // line 84
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 92
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 93
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 97
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 97, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 103
        echo "

<!-- Start: Top widget -->
";
        // line 106
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 106) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 106)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 106))) {
            // line 107
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">

      ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 110)) {
                // line 111
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 112
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 115
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 119)) {
                // line 120
                echo "            <div class=\"col-sm\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 121
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 125)) {
                // line 126
                echo "            <div class=\"col-sm\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 127
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 131)) {
                // line 132
                echo "            <div class=\"col-sm\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 133
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 140
        echo "<!--End: widget -->

    
<!--Start: Highlighted -->
";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 144)) {
            // line 145
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 151
        echo "<!--End: Highlighted -->


<!--Start: Top Message -->
";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 155)) {
            // line 156
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 162
        echo "<!--End: widget -->


<!--Start: Title -->
";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 166) &&  !($context["is_front"] ?? null))) {
            // line 167
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 175
        echo "<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->
      ";
        // line 182
        if ( !($context["is_front"] ?? null)) {
            // line 183
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 187
        echo "      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 192)) {
            // line 193
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 193, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 199
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 202)) {
            // line 203
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 203, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 209
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 212
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 212)) {
            // line 213
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 213, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 215
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 219
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Features -->
";
        // line 230
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 230) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 230)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 230))) {
            // line 231
            echo "  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 234
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 234)) {
                // line 235
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 236
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 239
            echo "
      <div class=\"row\">

        ";
            // line 242
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 242)) {
                // line 243
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 243, $this->source), "html", null, true);
                echo ">
            ";
                // line 244
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 247
            echo "        
        ";
            // line 248
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 248)) {
                // line 249
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 249, $this->source), "html", null, true);
                echo ">
            ";
                // line 250
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 253
            echo "
        ";
            // line 254
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 254)) {
                // line 255
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 255, $this->source), "html", null, true);
                echo ">
            ";
                // line 256
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 259
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 264
        echo "<!--End: Features -->


<!-- Start: Clients -->
";
        // line 268
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 268)) {
            echo " 
  <div class=\"clients\" id=\"clients\">

    ";
            // line 271
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 271)) {
                // line 272
                echo "      <div class=\"custom-block-title\" >
        ";
                // line 273
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 276
            echo "
    <div class=\"container\">
      ";
            // line 278
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 282
        echo "<!--End: Clients -->


<!-- Start: Updates widgets -->
";
        // line 286
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 286) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 286)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 286))) {
            // line 287
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 291
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 291)) {
                // line 292
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 293
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 296
            echo "
      <div class=\"row\">
        
        ";
            // line 299
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 299)) {
                // line 300
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 300, $this->source), "html", null, true);
                echo ">
            ";
                // line 301
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 304
            echo "        
        ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 305)) {
                // line 306
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 306, $this->source), "html", null, true);
                echo ">
            ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 310
            echo "        
        ";
            // line 311
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 311)) {
                // line 312
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 312, $this->source), "html", null, true);
                echo ">
            ";
                // line 313
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 316
            echo "
        ";
            // line 317
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 317)) {
                // line 318
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 318, $this->source), "html", null, true);
                echo ">
            ";
                // line 319
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 319), 319, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 322
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 328
        echo "<!--End: widgets -->


<!-- Start: Services widgets -->
";
        // line 332
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 332) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 332)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 332)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 332))) {
            // line 333
            echo "
  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      ";
            // line 337
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 337)) {
                // line 338
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 339
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 342
            echo "
      <div class=\"row team-list\">
      
        ";
            // line 345
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 345)) {
                // line 346
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 346, $this->source), "html", null, true);
                echo ">
            ";
                // line 347
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 347), 347, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 350
            echo "        
        ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 351)) {
                // line 352
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 352, $this->source), "html", null, true);
                echo ">
            ";
                // line 353
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 356
            echo "             
        ";
            // line 357
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 357)) {
                // line 358
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 358, $this->source), "html", null, true);
                echo ">
            ";
                // line 359
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 362
            echo "        
        ";
            // line 363
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 363)) {
                // line 364
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 364, $this->source), "html", null, true);
                echo ">
            ";
                // line 365
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 365), 365, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 368
            echo "        
      </div>
    </div>
  </div>

";
        }
        // line 374
        echo "<!--End: widgets -->


<!-- Start: Bottom widgets -->
";
        // line 378
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 378) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 378)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 378)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 378))) {
            // line 379
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 383
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 383)) {
                // line 384
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 385
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 385), 385, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 388
            echo "
      <div class=\"row\">
            
        ";
            // line 391
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 391)) {
                // line 392
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 392, $this->source), "html", null, true);
                echo ">
            ";
                // line 393
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 396
            echo "        
        ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 397)) {
                // line 398
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 398, $this->source), "html", null, true);
                echo ">
            ";
                // line 399
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 399), 399, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 402
            echo "
        ";
            // line 403
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 403)) {
                // line 404
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 404, $this->source), "html", null, true);
                echo ">
            ";
                // line 405
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 408
            echo "        
        ";
            // line 409
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 409)) {
                // line 410
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 410, $this->source), "html", null, true);
                echo ">
            ";
                // line 411
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 414
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 420
        echo "<!--End: widgets -->


<!-- Start: Footer widgets -->
";
        // line 424
        if ((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 424) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 424)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 424)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 424)) || ($context["show_social_icon"] ?? null)) || ($context["show_credit_link"] ?? null))) {
            // line 425
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 428
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 428)) {
                // line 429
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 430
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 430), 430, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 433
            echo "
      <div class=\"row\">

        ";
            // line 436
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 436)) {
                // line 437
                echo "          <div class=\"col-sm\">
            ";
                // line 438
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 438), 438, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 441
            echo "
        ";
            // line 442
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 442)) {
                // line 443
                echo "          <div class=\"col-sm\">
            ";
                // line 444
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 444), 444, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 447
            echo "        
        ";
            // line 448
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 448)) {
                // line 449
                echo "          <div class=\"col-sm\">
            ";
                // line 450
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 450), 450, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 453
            echo "
        ";
            // line 454
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 454) || ($context["show_social_icon"] ?? null)) || ($context["show_credit_link"] ?? null))) {
                // line 455
                echo "          <div class=\"col-sm\">

            ";
                // line 457
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 457)) {
                    // line 458
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 460
                echo "            
            ";
                // line 461
                if (($context["show_social_icon"] ?? null)) {
                    // line 462
                    echo "              <h2>Follow us</h2>
              <p class=\"social-media\">
                ";
                    // line 464
                    if (($context["facebook_url"] ?? null)) {
                        // line 465
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 465, $this->source), "html", null, true);
                        echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                ";
                    }
                    // line 467
                    echo "                ";
                    if (($context["twitter_url"] ?? null)) {
                        // line 468
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 468, $this->source), "html", null, true);
                        echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                ";
                    }
                    // line 470
                    echo "                ";
                    if (($context["linkedin_url"] ?? null)) {
                        // line 471
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 471, $this->source), "html", null, true);
                        echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                    }
                    // line 473
                    echo "                ";
                    if (($context["instagram_url"] ?? null)) {
                        // line 474
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 474, $this->source), "html", null, true);
                        echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                ";
                    }
                    // line 476
                    echo "                ";
                    if (($context["rss_url"] ?? null)) {
                        // line 477
                        echo "                  <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 477, $this->source), "html", null, true);
                        echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                    }
                    // line 479
                    echo "              </p>
            ";
                }
                // line 481
                echo "          </div>
        ";
            }
            // line 483
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 488
        echo "<!--End: widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">
    <div class=\"container\">
      <span>Copyright © ";
        // line 494
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 495
        if (($context["show_credit_link"] ?? null)) {
            // line 496
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 498
        echo "  </div>
</div>
<!-- End: Copyright -->


";
    }

    public function getTemplateName()
    {
        return "themes/contrib/architects_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  923 => 498,  919 => 496,  917 => 495,  913 => 494,  905 => 488,  898 => 483,  894 => 481,  890 => 479,  884 => 477,  881 => 476,  875 => 474,  872 => 473,  866 => 471,  863 => 470,  857 => 468,  854 => 467,  848 => 465,  846 => 464,  842 => 462,  840 => 461,  837 => 460,  831 => 458,  829 => 457,  825 => 455,  823 => 454,  820 => 453,  814 => 450,  811 => 449,  809 => 448,  806 => 447,  800 => 444,  797 => 443,  795 => 442,  792 => 441,  786 => 438,  783 => 437,  781 => 436,  776 => 433,  770 => 430,  767 => 429,  765 => 428,  760 => 425,  758 => 424,  752 => 420,  744 => 414,  738 => 411,  733 => 410,  731 => 409,  728 => 408,  722 => 405,  717 => 404,  715 => 403,  712 => 402,  706 => 399,  701 => 398,  699 => 397,  696 => 396,  690 => 393,  685 => 392,  683 => 391,  678 => 388,  672 => 385,  669 => 384,  667 => 383,  661 => 379,  659 => 378,  653 => 374,  645 => 368,  639 => 365,  634 => 364,  632 => 363,  629 => 362,  623 => 359,  618 => 358,  616 => 357,  613 => 356,  607 => 353,  602 => 352,  600 => 351,  597 => 350,  591 => 347,  586 => 346,  584 => 345,  579 => 342,  573 => 339,  570 => 338,  568 => 337,  562 => 333,  560 => 332,  554 => 328,  546 => 322,  540 => 319,  535 => 318,  533 => 317,  530 => 316,  524 => 313,  519 => 312,  517 => 311,  514 => 310,  508 => 307,  503 => 306,  501 => 305,  498 => 304,  492 => 301,  487 => 300,  485 => 299,  480 => 296,  474 => 293,  471 => 292,  469 => 291,  463 => 287,  461 => 286,  455 => 282,  448 => 278,  444 => 276,  438 => 273,  435 => 272,  433 => 271,  427 => 268,  421 => 264,  414 => 259,  408 => 256,  403 => 255,  401 => 254,  398 => 253,  392 => 250,  387 => 249,  385 => 248,  382 => 247,  376 => 244,  371 => 243,  369 => 242,  364 => 239,  358 => 236,  355 => 235,  353 => 234,  348 => 231,  346 => 230,  333 => 219,  326 => 215,  320 => 213,  318 => 212,  313 => 209,  306 => 205,  300 => 203,  298 => 202,  293 => 199,  286 => 195,  280 => 193,  278 => 192,  271 => 187,  265 => 184,  262 => 183,  260 => 182,  251 => 175,  243 => 170,  238 => 167,  236 => 166,  230 => 162,  223 => 158,  219 => 156,  217 => 155,  211 => 151,  204 => 147,  200 => 145,  198 => 144,  192 => 140,  183 => 133,  177 => 132,  175 => 131,  169 => 127,  163 => 126,  161 => 125,  155 => 121,  149 => 120,  147 => 119,  141 => 115,  135 => 112,  132 => 111,  130 => 110,  125 => 107,  123 => 106,  118 => 103,  112 => 99,  103 => 97,  99 => 96,  94 => 93,  92 => 92,  82 => 84,  78 => 82,  72 => 80,  70 => 79,  67 => 78,  65 => 77,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/architects_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\architects_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 96);
        static $filters = array("escape" => 72, "raw" => 97, "date" => 494);
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
