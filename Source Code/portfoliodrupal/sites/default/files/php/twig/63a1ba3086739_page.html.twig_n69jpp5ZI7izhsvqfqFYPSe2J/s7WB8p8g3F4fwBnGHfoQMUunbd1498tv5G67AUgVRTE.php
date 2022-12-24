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

/* themes/contrib/landingpage_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_873725215abfb16c77959a1f55d063b0 extends \Twig\Template
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
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78)) {
            // line 79
            echo "        <div class=\"col-md-9\">
          <div class=\"main-menu\">
            ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 85
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 93
        if (($context["is_front"] ?? null)) {
            // line 94
            echo "  <div class=\"hero-banner\">
    <ul class=\"slides\">
      ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 97
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 97, $this->source));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    </ul>
  </div>
";
        }
        // line 102
        echo "

";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_message", [], "any", false, false, true, 104)) {
            // line 105
            echo "  <div class=\"welcome-message\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_message", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 107
        echo "

<!-- Start: Top widget -->

";
        // line 111
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 111) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 111)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 111))) {
            // line 112
            echo "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 118)) {
                // line 119
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 119, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 120
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 124
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 124)) {
                // line 125
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 125, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 126
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 130)) {
                // line 131
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 131, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 132
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 139
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 145)) {
            // line 146
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 152
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 157) &&  !($context["is_front"] ?? null))) {
            // line 158
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 166
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 175
        if ( !($context["is_front"] ?? null)) {
            // line 176
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 180
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 186)) {
            // line 187
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 187, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 193
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 196)) {
            // line 197
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 197, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 199
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 203
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 206)) {
            // line 207
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 207, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 209
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 213
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Services widget -->

";
        // line 226
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 226) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 226)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 226))) {
            // line 227
            echo "  <div class=\"services\" id=\"services\">
    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Services widget first -->          
          ";
            // line 232
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 232)) {
                // line 233
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 233, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 234
            echo "          
          <!-- End: Services widget first --> 

          <!-- Start: Services widget second -->          
          ";
            // line 238
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 238)) {
                // line 239
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 239, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 240
            echo "          
          <!-- End: Services widget second --> 
          
          <!-- Start: Services widget third -->         
          ";
            // line 244
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 244)) {
                // line 245
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 245, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 246
            echo "          
          <!-- End: Services widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 253
        echo "
<!--End: Services widget -->


<!-- Start: Features -->

";
        // line 259
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 259) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 259)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 259))) {
            // line 260
            echo "
  <div class=\"features\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 266
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 266)) {
                // line 267
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 267, $this->source), "html", null, true);
                echo ">
            ";
                // line 268
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 271
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 274
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 274)) {
                // line 275
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 275, $this->source), "html", null, true);
                echo ">
            ";
                // line 276
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 279
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 282
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 282)) {
                // line 283
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 283, $this->source), "html", null, true);
                echo ">
            ";
                // line 284
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 284), 284, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 287
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 294
        echo "
<!--End: Features -->


<!-- Start: Team widgets -->

";
        // line 300
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 300) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 300)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 300)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 300))) {
            // line 301
            echo "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Team First -->          
        ";
            // line 307
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 307)) {
                // line 308
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 308, $this->source), "html", null, true);
                echo ">
            ";
                // line 309
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 309), 309, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 311
            echo "          
        <!-- End: Team First -->

        <!-- Start: Team Second -->
        ";
            // line 315
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 315)) {
                // line 316
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 316, $this->source), "html", null, true);
                echo ">
            ";
                // line 317
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 319
            echo "          
        <!-- End: Team Second -->

        <!-- Start: Team third -->          
        ";
            // line 323
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 323)) {
                // line 324
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 324, $this->source), "html", null, true);
                echo ">
            ";
                // line 325
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 325), 325, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 327
            echo "          
        <!-- End: Team Third -->

        <!-- Start: Team Forth -->
        ";
            // line 331
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 331)) {
                // line 332
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 332, $this->source), "html", null, true);
                echo ">
            ";
                // line 333
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 336
            echo "        <!-- End: Team Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 343
        echo "
<!--End: Team widgets -->


<!-- Start: Price table widgets -->

";
        // line 349
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 349) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 349)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 349))) {
            // line 350
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Price table First -->          
        ";
            // line 356
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 356)) {
                // line 357
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 357, $this->source), "html", null, true);
                echo ">
            ";
                // line 358
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 358), 358, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 360
            echo "          
        <!-- End: Price table First -->

        <!-- Start: Price table Second -->
        ";
            // line 364
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 364)) {
                // line 365
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 365, $this->source), "html", null, true);
                echo ">
            ";
                // line 366
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 366), 366, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 368
            echo "          
        <!-- End: Price table Second -->

        <!-- Start: Price table third -->          
        ";
            // line 372
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 372)) {
                // line 373
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 373, $this->source), "html", null, true);
                echo ">
            ";
                // line 374
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 374), 374, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 376
            echo "          
        <!-- End: Price table Third -->

        <!-- Start: Price table third -->          
        ";
            // line 380
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 380)) {
                // line 381
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 381, $this->source), "html", null, true);
                echo ">
            ";
                // line 382
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 382), 382, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 384
            echo "          
        <!-- End: Price table third -->

      </div>
    </div>
  </div>

";
        }
        // line 392
        echo "
<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->

";
        // line 398
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 398) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 398)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 398)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 398))) {
            // line 399
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 405
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 405)) {
                // line 406
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 406, $this->source), "html", null, true);
                echo ">
            ";
                // line 407
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 407), 407, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 409
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 413
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 413)) {
                // line 414
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 414, $this->source), "html", null, true);
                echo ">
            ";
                // line 415
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 415), 415, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 417
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 421
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 421)) {
                // line 422
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 422, $this->source), "html", null, true);
                echo ">
            ";
                // line 423
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 423), 423, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 425
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 429
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 429)) {
                // line 430
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 430, $this->source), "html", null, true);
                echo ">
            ";
                // line 431
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 431), 431, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 434
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 441
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 447
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 447) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 447)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 447))) {
            // line 448
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 455
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 455)) {
                // line 456
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 456, $this->source), "html", null, true);
                echo ">
              ";
                // line 457
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 457), 457, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 460
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 463
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 463)) {
                // line 464
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 464, $this->source), "html", null, true);
                echo ">
              ";
                // line 465
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 465), 465, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 468
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 471
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 471)) {
                // line 472
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_last_class"] ?? null), 472, $this->source), "html", null, true);
                echo ">
              ";
                // line 473
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 473), 473, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 476
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>

";
        }
        // line 484
        echo "
<!--End: Footer widgets -->


<!-- Start: Copyright -->

<div class=\"copyright\">

  <div class=\"container\">

    <div class=\"row\">
      
      ";
        // line 496
        if (($context["show_social_icon"] ?? null)) {
            // line 497
            echo "        <div class=\"col-md-6\">
          <p>Copyright © ";
            // line 498
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ". All rights reserved.</p>
          <p class=\"social-media\">
            ";
            // line 500
            if (($context["facebook_url"] ?? null)) {
                // line 501
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 501, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 503
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 504
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 504, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 506
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 507
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 507, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 509
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 510
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 510, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 512
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 513
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 513, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 515
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 516
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 516, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 518
            echo "          </p>
        </div>
      ";
        }
        // line 521
        echo "
      ";
        // line 522
        if (($context["show_credit_link"] ?? null)) {
            // line 523
            echo "        <div class=\"col-md-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 527
        echo "
    </div>

  </div>

</div>

<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/landingpage_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  934 => 527,  928 => 523,  926 => 522,  923 => 521,  918 => 518,  912 => 516,  909 => 515,  903 => 513,  900 => 512,  894 => 510,  891 => 509,  885 => 507,  882 => 506,  876 => 504,  873 => 503,  867 => 501,  865 => 500,  860 => 498,  857 => 497,  855 => 496,  841 => 484,  831 => 476,  825 => 473,  820 => 472,  818 => 471,  813 => 468,  807 => 465,  802 => 464,  800 => 463,  795 => 460,  789 => 457,  784 => 456,  782 => 455,  773 => 448,  771 => 447,  763 => 441,  754 => 434,  748 => 431,  743 => 430,  741 => 429,  735 => 425,  729 => 423,  724 => 422,  722 => 421,  716 => 417,  710 => 415,  705 => 414,  703 => 413,  697 => 409,  691 => 407,  686 => 406,  684 => 405,  676 => 399,  674 => 398,  666 => 392,  656 => 384,  650 => 382,  645 => 381,  643 => 380,  637 => 376,  631 => 374,  626 => 373,  624 => 372,  618 => 368,  612 => 366,  607 => 365,  605 => 364,  599 => 360,  593 => 358,  588 => 357,  586 => 356,  578 => 350,  576 => 349,  568 => 343,  559 => 336,  553 => 333,  548 => 332,  546 => 331,  540 => 327,  534 => 325,  529 => 324,  527 => 323,  521 => 319,  515 => 317,  510 => 316,  508 => 315,  502 => 311,  496 => 309,  491 => 308,  489 => 307,  481 => 301,  479 => 300,  471 => 294,  462 => 287,  456 => 284,  451 => 283,  449 => 282,  444 => 279,  438 => 276,  433 => 275,  431 => 274,  426 => 271,  420 => 268,  415 => 267,  413 => 266,  405 => 260,  403 => 259,  395 => 253,  386 => 246,  378 => 245,  376 => 244,  370 => 240,  362 => 239,  360 => 238,  354 => 234,  346 => 233,  344 => 232,  337 => 227,  335 => 226,  320 => 213,  313 => 209,  307 => 207,  305 => 206,  300 => 203,  293 => 199,  287 => 197,  285 => 196,  280 => 193,  273 => 189,  267 => 187,  265 => 186,  257 => 180,  251 => 177,  248 => 176,  246 => 175,  235 => 166,  227 => 161,  222 => 158,  220 => 157,  213 => 152,  206 => 148,  202 => 146,  200 => 145,  192 => 139,  183 => 132,  175 => 131,  173 => 130,  167 => 126,  159 => 125,  157 => 124,  151 => 120,  143 => 119,  141 => 118,  133 => 112,  131 => 111,  125 => 107,  119 => 105,  117 => 104,  113 => 102,  108 => 99,  99 => 97,  95 => 96,  91 => 94,  89 => 93,  79 => 85,  72 => 81,  68 => 79,  66 => 78,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/landingpage_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\landingpage_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 96);
        static $filters = array("escape" => 72, "raw" => 97, "date" => 498);
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
