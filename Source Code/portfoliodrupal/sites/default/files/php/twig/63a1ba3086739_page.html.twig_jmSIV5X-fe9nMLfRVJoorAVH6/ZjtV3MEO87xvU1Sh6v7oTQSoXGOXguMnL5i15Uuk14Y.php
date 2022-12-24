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

/* themes/contrib/dark_page/templates/layout/page.html.twig */
class __TwigTemplate_1815f05c93a97678b718efb261b1647d extends \Twig\Template
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
        // line 42
        echo "

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-center header-transparent\">
    <div class=\"container-fluid\">
      <div class=\"row justify-content-center align-items-center\">
        <div class=\"col-xl-11 d-flex align-items-center justify-content-between\">
        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_logo", [], "any", false, false, true, 49)) {
            // line 50
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_logo", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 52
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 52)) {
            // line 53
            echo "          <nav id=\"navbar\" class=\"navbar\">
             ";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "            
            <i class=\"fa fa-bars mobile-nav-toggle\"></i>
          </nav><!-- .navbar -->
          ";
        }
        // line 58
        echo "        </div>
        
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
    ";
        // line 65
        if (($context["slideshow_display"] ?? null)) {
            // line 66
            echo "  <section id=\"hero\">
    <div class=\"hero-container\">
      <div id=\"heroCarousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
        <ol id=\"hero-carousel-indicators\" class=\"carousel-indicators\"></ol>
        <div class=\"carousel-inner\" role=\"listbox\">
             ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slide"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 72
                echo "             ";
                if (preg_match("/^\\d+\$/", $context["key"])) {
                    // line 73
                    echo "               ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 73)) {
                        // line 74
                        echo "               ";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "image", [], "any", false, false, true, 74)) {
                            // line 75
                            echo "          <div class=\"carousel-item active\" style=\"background-image: url(";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "image", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                            echo ")\">
          ";
                        }
                        // line 77
                        echo "            <div class=\"carousel-container\">
              <div class=\"container\">
              ";
                        // line 79
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "image", [], "any", false, false, true, 79)) {
                            // line 80
                            echo "                <h2 class=\"animate__animated animate__fadeInDown\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                            echo "</h2>
              ";
                        }
                        // line 82
                        echo "                ";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 82)) {
                            // line 83
                            echo "                <p class=\"animate__animated animate__fadeInUp\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                            echo "</p>
              ";
                        }
                        // line 85
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 85) || ($context["slide_url"] ?? null))) {
                            // line 86
                            echo "                <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide_url"] ?? null), 86, $this->source), "html", null, true);
                            echo "\" class=\"btn-get-started scrollto animate__animated animate__fadeInUp\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 88
                        echo "              </div>
            </div>
          </div> 
           ";
                    } else {
                        // line 92
                        echo "           ";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "image", [], "any", false, false, true, 92)) {
                            // line 93
                            echo "          <div class=\"carousel-item active\" style=\"background-image: url(";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "image", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                            echo ")\">
          ";
                        }
                        // line 95
                        echo "            <div class=\"carousel-container\">
              <div class=\"container\">
              ";
                        // line 97
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 97)) {
                            // line 98
                            echo "                <h2 class=\"animate__animated animate__fadeInDown\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                            echo "</h2>
                ";
                        }
                        // line 100
                        echo "                ";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 100)) {
                            // line 101
                            echo "                <p class=\"animate__animated animate__fadeInUp\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                            echo "</p>
                ";
                        }
                        // line 103
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 103) || ($context["slide_url"] ?? null))) {
                            // line 104
                            echo "                <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide_url"] ?? null), 104, $this->source), "html", null, true);
                            echo "\" class=\"btn-get-started scrollto animate__animated animate__fadeInUp\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 106
                        echo "              </div>
            </div>
          </div> 
          ";
                    }
                    // line 110
                    echo "          ";
                }
                // line 111
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>

        <a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon fa fa-chevron-left\" aria-hidden=\"true\"></span>
        </a>
        <a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon fa fa-chevron-right\" aria-hidden=\"true\"></span>
        </a>
      </div>
    </div>
  </section>
  ";
        }
        // line 124
        echo "  <!-- End Hero Section -->
 <div class=\"container\">
   ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "
 </div>

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">
        ";
        // line 134
        if (($context["show_footer_first_details"] ?? null)) {
            // line 135
            echo "          <div class=\"col-lg-3 col-md-6 footer-info\">
          ";
            // line 136
            if (($context["footer_company_logo"] ?? null)) {
                echo " 
          <img class=\"footer_logo\" src= \"";
                // line 137
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_company_logo"] ?? null), 137, $this->source), "html", null, true);
                echo "\" />     
            ";
            }
            // line 139
            echo "            ";
            if (($context["footer_comp_desc"] ?? null)) {
                echo "      
            <p>";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_comp_desc"] ?? null), 140, $this->source), "html", null, true);
                echo "</p> 
            ";
            }
            // line 141
            echo "        
          </div>
          ";
        }
        // line 144
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 144)) {
            // line 145
            echo "          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
            ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
            </ul>
          </div>
          ";
        }
        // line 152
        echo "          <div class=\"col-lg-3 col-md-6 footer-contact\">  
          ";
        // line 153
        if (($context["show_contact_details"] ?? null)) {
            // line 154
            echo "          ";
            if (($context["footer_head"] ?? null)) {
                // line 155
                echo "            <h4>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_head"] ?? null), 155, $this->source), "html", null, true);
                echo "</h4>
           ";
            }
            // line 156
            echo "          
            <p>
            ";
            // line 158
            if (($context["location"] ?? null)) {
                // line 159
                echo "             ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["location"] ?? null), 159, $this->source), "html", null, true);
                echo "
             ";
            }
            // line 161
            echo "             <br>
           ";
            // line 162
            if (($context["contact"] ?? null)) {
                // line 163
                echo "              <strong>Phone: </strong>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact"] ?? null), 163, $this->source), "html", null, true);
                echo "<br>
             ";
            }
            // line 165
            echo "              ";
            if (($context["emails"] ?? null)) {
                // line 166
                echo "              <strong>Email: </strong>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["emails"] ?? null), 166, $this->source), "html", null, true);
                echo "<br>
              ";
            }
            // line 168
            echo "            </p>
           ";
        }
        // line 170
        echo "            ";
        if (($context["show_social_icon"] ?? null)) {
            // line 171
            echo "            <div class=\"social-links\">
              ";
            // line 172
            if (($context["twitter_url"] ?? null)) {
                // line 173
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 173, $this->source), "html", null, true);
                echo "\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
              ";
            }
            // line 175
            echo "              ";
            if (($context["facebook_url"] ?? null)) {
                // line 176
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 176, $this->source), "html", null, true);
                echo "\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
              ";
            }
            // line 178
            echo "              ";
            if (($context["instagram_url"] ?? null)) {
                // line 179
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 179, $this->source), "html", null, true);
                echo "\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></i></a>
              ";
            }
            // line 181
            echo "              ";
            if (($context["youtube_url"] ?? null)) {
                // line 182
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 182, $this->source), "html", null, true);
                echo "\" class=\"youtube\"><i class=\"fa fa-youtube\"></i></a>
              ";
            }
            // line 184
            echo "              ";
            if (($context["linkedin_url"] ?? null)) {
                // line 185
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 185, $this->source), "html", null, true);
                echo "\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i></a>
              ";
            }
            // line 187
            echo "            </div>
           ";
        }
        // line 189
        echo "          </div>
            ";
        // line 190
        if (($context["show_newsletter_details"] ?? null)) {
            // line 191
            echo "          <div class=\"col-lg-3 col-md-6 footer-newsletter\">
            ";
            // line 192
            if (($context["footer_news_head"] ?? null)) {
                // line 193
                echo "            <h4>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_news_head"] ?? null), 193, $this->source), "html", null, true);
                echo "</h4>
            ";
            }
            // line 195
            echo "            ";
            if (($context["footer_news_desc"] ?? null)) {
                // line 196
                echo "            <p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_news_desc"] ?? null), 196, $this->source), "html", null, true);
                echo "</p>
            ";
            }
            // line 198
            echo "            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
            </form>
          </div>
          ";
        }
        // line 203
        echo "        </div>
      </div>
    </div>
  ";
        // line 206
        if (($context["footer_copyright"] ?? null)) {
            // line 207
            echo "    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong>DarkPage</strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
      ";
            // line 212
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_copyright"] ?? null), 212, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
        }
        // line 216
        echo "  </footer><!-- End Footer -->
  ";
        // line 217
        if (($context["arrow_up"] ?? null)) {
            // line 218
            echo "  <a href=\"#\" class=\"back-to-top scroll-icon-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["arrow_up"] ?? null), 218, $this->source), "html", null, true);
            echo " d-flex align-items-center justify-content-center\"><i class=\"fa fa-arrow-up\"></i></a> 
  ";
        }
        // line 220
        echo "  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id=\"preloader\"></div> -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/dark_page/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 220,  456 => 218,  454 => 217,  451 => 216,  444 => 212,  437 => 207,  435 => 206,  430 => 203,  423 => 198,  417 => 196,  414 => 195,  408 => 193,  406 => 192,  403 => 191,  401 => 190,  398 => 189,  394 => 187,  388 => 185,  385 => 184,  379 => 182,  376 => 181,  370 => 179,  367 => 178,  361 => 176,  358 => 175,  352 => 173,  350 => 172,  347 => 171,  344 => 170,  340 => 168,  334 => 166,  331 => 165,  325 => 163,  323 => 162,  320 => 161,  314 => 159,  312 => 158,  308 => 156,  302 => 155,  299 => 154,  297 => 153,  294 => 152,  287 => 148,  282 => 145,  279 => 144,  274 => 141,  269 => 140,  264 => 139,  259 => 137,  255 => 136,  252 => 135,  250 => 134,  239 => 126,  235 => 124,  221 => 112,  207 => 111,  204 => 110,  198 => 106,  190 => 104,  187 => 103,  181 => 101,  178 => 100,  172 => 98,  170 => 97,  166 => 95,  160 => 93,  157 => 92,  151 => 88,  143 => 86,  140 => 85,  134 => 83,  131 => 82,  125 => 80,  123 => 79,  119 => 77,  113 => 75,  110 => 74,  107 => 73,  104 => 72,  87 => 71,  80 => 66,  78 => 65,  69 => 58,  62 => 54,  59 => 53,  56 => 52,  50 => 50,  48 => 49,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dark_page/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\dark_page\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 49, "for" => 71);
        static $filters = array("escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
