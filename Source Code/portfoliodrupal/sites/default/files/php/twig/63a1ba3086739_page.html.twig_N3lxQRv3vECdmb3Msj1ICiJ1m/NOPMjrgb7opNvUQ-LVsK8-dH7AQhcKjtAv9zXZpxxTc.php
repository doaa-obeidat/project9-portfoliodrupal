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

/* themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_1adea0848d48974fbc6d81315c677139 extends \Twig\Template
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

  ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 64)) {
            // line 65
            echo "    <div class=\"top-email\">
      <i class=\"fa fa-envelope\"></i>
      ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 70
        echo "  
  ";
        // line 71
        if (($context["show_social_icon"] ?? null)) {
            // line 72
            echo "    <div class=\"top-social-media social-media\">
      Follow us 
      ";
            // line 74
            if (($context["facebook_url"] ?? null)) {
                // line 75
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 75, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
      ";
            }
            // line 77
            echo "      ";
            if (($context["twitter_url"] ?? null)) {
                // line 78
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 78, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
      ";
            }
            // line 80
            echo "      ";
            if (($context["linkedin_url"] ?? null)) {
                // line 81
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 81, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
      ";
            }
            // line 83
            echo "      ";
            if (($context["instagram_url"] ?? null)) {
                // line 84
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 84, $this->source), "html", null, true);
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
      ";
            }
            // line 86
            echo "      ";
            if (($context["rss_url"] ?? null)) {
                // line 87
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 87, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
      ";
            }
            // line 89
            echo "    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 92)) {
            // line 93
            echo "    <div class=\"top-menu\">
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 97
        echo "
</div>
<!-- End: Region -->


<!-- Start: Header -->
<div class=\"header\">
  <div class=\"container-\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111)) {
            // line 112
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 114
        echo "      </div>

      ";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 116) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 116))) {
            // line 117
            echo "        <div class=\"col-md-9\">
          ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 118)) {
                // line 119
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 121
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 121)) {
                // line 122
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 124
            echo "        </div>
      ";
        }
        // line 126
        echo "
    </div>
  </div>
</div>
<!-- End: Region -->


<!-- Start: Slides -->
";
        // line 134
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 135
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 139
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 139, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 145
        echo "<!-- End: Region -->


<!--Start: Top Message -->
";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 149)) {
            // line 150
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 156
        echo "<!-- End: Region -->


<!-- Start: Top widget -->
";
        // line 160
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 160) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 160)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 160))) {
            // line 161
            echo "  
  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">
      ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 165)) {
                // line 166
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 170
            echo "
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 172
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 172)) {
                // line 173
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 173, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 175
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 175)) {
                // line 176
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 176, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 178
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 178)) {
                // line 179
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 179, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 181
            echo "        </div>
    </div>
  </div>

";
        }
        // line 186
        echo "<!-- End: Region -->

    
<!--Start: Highlighted -->
";
        // line 190
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 190)) {
            // line 191
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 197
        echo "<!--End: Highlighted -->


<!--Start: Title -->
";
        // line 201
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 201) &&  !($context["is_front"] ?? null))) {
            // line 202
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 210
        echo "<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 217
        if ( !($context["is_front"] ?? null)) {
            // line 218
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 222
        echo "
      <div class=\"row layout\">

        ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 225)) {
            // line 226
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 226, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 228
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 232
        echo "
        ";
        // line 233
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 233)) {
            // line 234
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 234, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 236
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 240
        echo "        
        ";
        // line 241
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 241)) {
            // line 242
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 242, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 248
        echo "        
      </div>
    
    </div>
  </div>
</div>
<!-- End: Region -->


<!-- Start: Features -->
";
        // line 258
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 258) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 258)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 258))) {
            // line 259
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 263
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 263)) {
                // line 264
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 265
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 268
            echo "
      <div class=\"row features-list\">
        ";
            // line 270
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 270)) {
                // line 271
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 271, $this->source), "html", null, true);
                echo ">
            ";
                // line 272
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 275
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 275)) {
                // line 276
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 276, $this->source), "html", null, true);
                echo ">
            ";
                // line 277
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 280
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 280)) {
                // line 281
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 281, $this->source), "html", null, true);
                echo ">
            ";
                // line 282
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 285
            echo "      </div>
    </div>
  </div>
";
        }
        // line 289
        echo "<!-- End: Region -->


<!-- Start: Updates widgets -->
";
        // line 293
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 293) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 293)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 293))) {
            // line 294
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 298
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 298)) {
                // line 299
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 300
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 303
            echo "
      <div class=\"row updates-list\">
        ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 305)) {
                // line 306
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 306, $this->source), "html", null, true);
                echo ">
            ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 310
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 310)) {
                // line 311
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 311, $this->source), "html", null, true);
                echo ">
            ";
                // line 312
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 314
            echo "       
        ";
            // line 315
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 315)) {
                // line 316
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 316, $this->source), "html", null, true);
                echo ">
            ";
                // line 317
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 319
            echo "       
        ";
            // line 320
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 320)) {
                // line 321
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 321, $this->source), "html", null, true);
                echo ">
            ";
                // line 322
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 322), 322, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 325
            echo "      </div>
    </div>
  </div>
";
        }
        // line 329
        echo "<!-- End: Region -->


<!-- Start: Middle widgets -->
";
        // line 333
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 333) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 333)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 333)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 333))) {
            // line 334
            echo "
  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      ";
            // line 338
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 338)) {
                // line 339
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 340
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 340), 340, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 343
            echo "
      <div class=\"row midwidget-list\">
        ";
            // line 345
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 345)) {
                // line 346
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 346, $this->source), "html", null, true);
                echo ">
            ";
                // line 347
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 347), 347, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 350
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 350)) {
                // line 351
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 351, $this->source), "html", null, true);
                echo ">
            ";
                // line 352
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 355
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 355)) {
                // line 356
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 356, $this->source), "html", null, true);
                echo ">
            ";
                // line 357
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 357), 357, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 360
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 360)) {
                // line 361
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 361, $this->source), "html", null, true);
                echo ">
            ";
                // line 362
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 362), 362, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 365
            echo "      </div>
    </div>
  </div>
";
        }
        // line 369
        echo "<!-- End: Region -->


<!-- Start: Clients -->
";
        // line 373
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 373)) {
            echo " 
  <div class=\"clients\" id=\"clients\">
    <div class=\"container\">
      ";
            // line 376
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 376)) {
                // line 377
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 378
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 378), 378, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 381
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 381), 381, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 385
        echo "<!-- End: Region -->


<!-- Start: Bottom widgets -->
";
        // line 389
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 389) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 389)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 389)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 389))) {
            // line 390
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 394
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 394)) {
                // line 395
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 396
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 396), 396, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 399
            echo "
      <div class=\"row bottom-widget-list\">
        ";
            // line 401
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 401)) {
                // line 402
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 402, $this->source), "html", null, true);
                echo ">
            ";
                // line 403
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 403), 403, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 406
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 406)) {
                // line 407
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 407, $this->source), "html", null, true);
                echo ">
            ";
                // line 408
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 408), 408, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 410
            echo "      
        ";
            // line 411
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 411)) {
                // line 412
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 412, $this->source), "html", null, true);
                echo ">
            ";
                // line 413
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 416
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 416)) {
                // line 417
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 417, $this->source), "html", null, true);
                echo ">
            ";
                // line 418
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 421
            echo "      </div>
    </div>
  </div>
";
        }
        // line 425
        echo "<!-- End: Region -->


<!-- Start: Footer widgets -->
";
        // line 429
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 429) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 429)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 429))) {
            // line 430
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 434
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 434)) {
                // line 435
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 436
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 436), 436, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 439
            echo "
      <div class=\"row\">
        ";
            // line 441
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 441)) {
                // line 442
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 442, $this->source), "html", null, true);
                echo ">
            ";
                // line 443
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 443), 443, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 446
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 446)) {
                // line 447
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 447, $this->source), "html", null, true);
                echo ">
            ";
                // line 448
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 448), 448, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 451
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 451)) {
                // line 452
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 452, $this->source), "html", null, true);
                echo ">
            ";
                // line 453
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 453), 453, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 456
            echo "      </div>
    </div>
  </div>
";
        }
        // line 460
        echo "<!-- End: Region -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <span>Copyright © ";
        // line 466
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 467
        if (($context["show_credit_link"] ?? null)) {
            // line 468
            echo "      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 470
        echo "  </div>
</div>
<!-- End: Region -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  904 => 470,  900 => 468,  898 => 467,  894 => 466,  886 => 460,  880 => 456,  874 => 453,  869 => 452,  866 => 451,  860 => 448,  855 => 447,  852 => 446,  846 => 443,  841 => 442,  839 => 441,  835 => 439,  829 => 436,  826 => 435,  824 => 434,  818 => 430,  816 => 429,  810 => 425,  804 => 421,  798 => 418,  793 => 417,  790 => 416,  784 => 413,  779 => 412,  777 => 411,  774 => 410,  768 => 408,  763 => 407,  760 => 406,  754 => 403,  749 => 402,  747 => 401,  743 => 399,  737 => 396,  734 => 395,  732 => 394,  726 => 390,  724 => 389,  718 => 385,  710 => 381,  704 => 378,  701 => 377,  699 => 376,  693 => 373,  687 => 369,  681 => 365,  675 => 362,  670 => 361,  667 => 360,  661 => 357,  656 => 356,  653 => 355,  647 => 352,  642 => 351,  639 => 350,  633 => 347,  628 => 346,  626 => 345,  622 => 343,  616 => 340,  613 => 339,  611 => 338,  605 => 334,  603 => 333,  597 => 329,  591 => 325,  585 => 322,  580 => 321,  578 => 320,  575 => 319,  569 => 317,  564 => 316,  562 => 315,  559 => 314,  553 => 312,  548 => 311,  545 => 310,  539 => 307,  534 => 306,  532 => 305,  528 => 303,  522 => 300,  519 => 299,  517 => 298,  511 => 294,  509 => 293,  503 => 289,  497 => 285,  491 => 282,  486 => 281,  483 => 280,  477 => 277,  472 => 276,  469 => 275,  463 => 272,  458 => 271,  456 => 270,  452 => 268,  446 => 265,  443 => 264,  441 => 263,  435 => 259,  433 => 258,  421 => 248,  414 => 244,  408 => 242,  406 => 241,  403 => 240,  396 => 236,  390 => 234,  388 => 233,  385 => 232,  378 => 228,  372 => 226,  370 => 225,  365 => 222,  359 => 219,  356 => 218,  354 => 217,  345 => 210,  337 => 205,  332 => 202,  330 => 201,  324 => 197,  317 => 193,  313 => 191,  311 => 190,  305 => 186,  298 => 181,  290 => 179,  287 => 178,  279 => 176,  276 => 175,  268 => 173,  266 => 172,  262 => 170,  256 => 167,  253 => 166,  251 => 165,  245 => 161,  243 => 160,  237 => 156,  230 => 152,  226 => 150,  224 => 149,  218 => 145,  212 => 141,  203 => 139,  199 => 138,  194 => 135,  192 => 134,  182 => 126,  178 => 124,  172 => 122,  169 => 121,  163 => 119,  161 => 118,  158 => 117,  156 => 116,  152 => 114,  146 => 112,  144 => 111,  128 => 97,  122 => 94,  119 => 93,  117 => 92,  114 => 91,  110 => 89,  104 => 87,  101 => 86,  95 => 84,  92 => 83,  86 => 81,  83 => 80,  77 => 78,  74 => 77,  68 => 75,  66 => 74,  62 => 72,  60 => 71,  57 => 70,  51 => 67,  47 => 65,  45 => 64,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/freelancer_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\freelancer_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 64, "for" => 138);
        static $filters = array("escape" => 67, "raw" => 139, "date" => 466);
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
