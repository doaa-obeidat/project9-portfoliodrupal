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

/* themes/contrib/dark_awesome/templates/page/page.html.twig */
class __TwigTemplate_a06f07860cc64baa576eadf32271e8fe extends \Twig\Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "
<!-- Start: Header -->
<header class=\"header clear\">
\t<div class=\"header-circle header-circle1\"></div>
\t<div class=\"header-circle header-circle2\"></div>
\t<div class=\"header-circle header-circle3\"></div>
\t<div class=\"header-circle header-circle4\"></div>
\t<div class=\"header-circle header-circle5\"></div>
\t<div class=\"header-circle header-circle6\"></div>
\t<div class=\"container header-main\">
\t\t<div class=\"site-brand\">
\t\t\t<div class=\"block-region region-site-branding\">
\t\t\t\t<div id=\"block-dark-awesome-branding\" class=\"block\">
\t\t\t\t\t<div class=\"block-content\">
\t\t\t\t\t\t<div class=\"site-branding\">
\t\t\t\t\t\t\t";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_logo", [], "any", false, false, true, 59)) {
            // line 60
            echo "\t\t\t\t\t\t\t<div class=\"site-logo\">
\t\t\t\t\t\t\t\t";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_logo", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--/.block-content -->
\t\t\t</div>
\t\t</div>
\t\t<!--/.site-branding -->
\t\t<div class=\"header-main-right\">
\t\t\t<div class=\"mobile-menu\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
\t\t\t<div class=\"primary-menu-wrapper\">
\t\t\t\t<div class=\"menu-wrap\">
\t\t\t\t\t<div class=\"close-mobile-menu\">x</div>
\t\t\t\t\t<div class=\"block-region region-primary-menu\">
\t\t\t\t\t\t";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 77)) {
            // line 78
            echo "\t\t\t\t\t\t<nav role=\"navigation\" aria-labelledby=\"block-dark-awesome-main-menu-menu\" id=\"block-dark-awesome-main-menu\"
\t\t\t\t\t\t\tclass=\"block block-menu\">
\t\t\t\t\t\t\t<h2 class=\"visually-hidden block-title\" id=\"block-dark-awesome-main-menu-menu\">Main navigation</h2>
\t\t\t\t\t\t\t";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /.menu-wrap -->
\t\t\t</div> <!-- /.primary-menu-wrapper -->
\t\t\t<div class=\"full-page-search\">
\t\t\t\t<div class=\"search-icon\">
\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t</div>
\t\t\t\t<!--/.search icon -->
\t\t\t\t<div class=\"search-box\">
\t\t\t\t\t<div class=\"search-box-close\"></div>
\t\t\t\t\t<div class=\"search-box-content\">
\t\t\t\t\t\t<div class=\"block-region region-search-box\">
\t\t\t\t\t\t\t";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 96)) {
            // line 97
            echo "\t\t\t\t\t\t\t<div class=\"search-block-form block\" data-drupal-selector=\"search-block-form\"
\t\t\t\t\t\t\t\tid=\"block-dark-awesome-search\" role=\"search\">
\t\t\t\t\t\t\t\t";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t\t<!--/.block-content -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search-box-close\"></div>
\t\t\t\t</div> <!-- /.search-box -->
\t\t\t</div>
\t\t\t<!--/.full-page-search -->
\t\t</div> <!-- /.header-right -->
\t</div> <!-- /.container -->
\t";
        // line 111
        if (($context["slideshow_display"] ?? null)) {
            // line 112
            echo "\t<section class=\"slider\">
\t\t<div class=\"container slider-container\">
\t\t\t<div class=\"slider-text\">
\t\t\t\t<ul class=\"js-rotating\">
\t\t\t\t\t";
            // line 116
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
                // line 117
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 117)) {
                    // line 118
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t";
                    // line 119
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 119)) {
                        // line 120
                        echo "\t\t\t\t\t\t<h1>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "</h1>
\t\t\t\t\t\t";
                    }
                    // line 122
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 122)) {
                        // line 123
                        echo "\t\t\t\t\t\t<p>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_url", [], "any", false, false, true, 125) || twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 125))) {
                        // line 126
                        echo "\t\t\t\t\t\t<a class=\"button-link\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t\t\t</li>
\t\t\t\t\t";
                } else {
                    // line 130
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t";
                    // line 131
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 131)) {
                        // line 132
                        echo "\t\t\t\t\t\t<h1>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                        echo "</h1>
\t\t\t\t\t\t";
                    }
                    // line 134
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 134)) {
                        // line 135
                        echo "\t\t\t\t\t\t<p>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_url", [], "any", false, false, true, 137) || twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 137))) {
                        // line 138
                        echo "\t\t\t\t\t\t<a class=\"button-link\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 142
                echo "\t\t\t\t\t";
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
            // line 143
            echo "\t\t\t\t</ul>
\t\t\t\t<!--/.home-slider -->
\t\t\t</div><!-- /slider-text -->
\t\t\t";
            // line 146
            if (($context["show_header_image_details"] ?? null)) {
                // line 147
                echo "\t\t\t<div class=\"slider-image\">
\t\t\t\t";
                // line 148
                if (($context["header_image"] ?? null)) {
                    // line 149
                    echo "\t\t\t\t<img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_image"] ?? null), 149, $this->source), "html", null, true);
                    echo "\" />
\t\t\t\t";
                }
                // line 151
                echo "\t\t\t</div><!-- /slider-image -->
\t\t\t";
            }
            // line 153
            echo "\t\t</div>
\t\t<!--/.container -->
\t</section>
\t";
        }
        // line 157
        echo "</header>


";
        // line 160
        $this->displayBlock('main', $context, $blocks);
        // line 188
        echo "<footer class=\"footer block-section clear\">
\t<section id=\"footer-blocks\">
\t\t<div class=\"container footer-container clear\">
\t\t\t";
        // line 191
        if (($context["show_footer_first_details"] ?? null)) {
            // line 192
            echo "\t\t\t<div class=\"footer-block\">
\t\t\t\t<div class=\"block-region region-footer-first\">
\t\t\t\t\t<div id=\"block-footerabout\" class=\"block\">
\t\t\t\t\t\t<div class=\"block-content\">
\t\t\t\t\t\t\t<div class=\"field field--name-body field--type-text-with-summary field--label-hidden field-item\">
\t\t\t\t\t\t\t\t";
            // line 197
            if (($context["footer_image"] ?? null)) {
                // line 198
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_image"] ?? null), 198, $this->source), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t";
            }
            // line 200
            echo "\t\t\t\t\t\t\t\t";
            if (($context["footer_text"] ?? null)) {
                // line 201
                echo "\t\t\t\t\t\t\t\t<p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_text"] ?? null), 201, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 203
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/.block-content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 210
        echo "\t\t\t<!--/footer-first -->
\t\t\t<div class=\"footer-block\">
\t\t\t\t<div class=\"block-region region-footer-second\">
\t\t\t\t\t";
        // line 213
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 213)) {
            // line 214
            echo "\t\t\t\t\t<div id=\"block-footersupport\" class=\"block\">
\t\t\t\t\t\t";
            // line 215
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 218
        echo "\t\t\t\t\t<!--/.block-content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--/footer-second -->

\t\t\t<div class=\"footer-block\">
\t\t\t\t<div class=\"block-region region-footer-third\">
\t\t\t\t\t";
        // line 225
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 225)) {
            // line 226
            echo "\t\t\t\t\t<div id=\"block-usefullinks\" class=\"block\">
\t\t\t\t\t\t";
            // line 227
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 230
        echo "\t\t\t\t\t<!--/.block-content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--/footer-three -->
\t\t\t";
        // line 234
        if (($context["show_contact_details"] ?? null)) {
            // line 235
            echo "\t\t\t<div class=\"footer-block last-footer-block\">
\t\t\t\t<div class=\"block-region region-footer-fourth\">
\t\t\t\t\t<div id=\"block-footercontactus\" class=\"block\">
\t\t\t\t\t\t";
            // line 238
            if (($context["footer_contact"] ?? null)) {
                // line 239
                echo "\t\t\t\t\t\t<h2 class=\"block-title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_contact"] ?? null), 239, $this->source), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t";
            }
            // line 241
            echo "\t\t\t\t\t\t<div class=\"block-content\">
\t\t\t\t\t\t\t<div class=\"field field--name-body field--type-text-with-summary field--label-hidden field-item\">
\t\t\t\t\t\t\t\t";
            // line 243
            if (($context["location"] ?? null)) {
                // line 244
                echo "\t\t\t\t\t\t\t\t<p><i class=\"fa fa-map-marker theme-color\" aria-hidden=\"true\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["location"] ?? null), 244, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 246
            echo "\t\t\t\t\t\t\t\t";
            if (($context["phone"] ?? null)) {
                // line 247
                echo "\t\t\t\t\t\t\t\t<p><i class=\"fa fa-mobile theme-color\" aria-hidden=\"true\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 247, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 249
            echo "\t\t\t\t\t\t\t\t";
            if (($context["emails"] ?? null)) {
                // line 250
                echo "\t\t\t\t\t\t\t\t<p><i class=\"fa fa-envelope-o theme-color\" aria-hidden=\"true\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["emails"] ?? null), 250, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 252
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/.block-content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 259
        echo "\t\t\t<!--/footer-fourth -->
\t\t</div>
\t\t<!--/container -->
\t</section>
\t<!--/footer-blocks -->

\t<!-- /footer-bottom -->
\t<section id=\"footer-bottom-last\">
\t\t<div class=\"footer-bottom-last container clear\">
\t\t\t";
        // line 268
        if (($context["footer_copyright"] ?? null)) {
            // line 269
            echo "\t\t\t<div class=\"copyright\">
\t\t\t\t";
            // line 270
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_copyright"] ?? null), 270, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 273
        echo "\t\t\t";
        if (($context["show_social_icon"] ?? null)) {
            // line 274
            echo "\t\t\t<div class=\"footer-social-icons\">
\t\t\t\t<ul class=\"social-icons\">
\t\t\t\t\t";
            // line 276
            if (($context["facebook_url"] ?? null)) {
                // line 277
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 277, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 280
            echo "\t\t\t\t\t";
            if (($context["twitter_url"] ?? null)) {
                // line 281
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 281, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 284
            echo "\t\t\t\t\t";
            if (($context["instagram_url"] ?? null)) {
                // line 285
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 285, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t";
            }
            // line 287
            echo "\t\t\t\t\t";
            if (($context["linkedin_url"] ?? null)) {
                // line 288
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 288, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t";
            }
            // line 290
            echo "\t\t\t\t\t";
            if (($context["youtube_url"] ?? null)) {
                // line 291
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 291, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
\t\t\t\t\t";
            }
            // line 293
            echo "\t\t\t\t\t";
            if (($context["vimeo_url"] ?? null)) {
                // line 294
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo_url"] ?? null), 294, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-vimeo\"></i></a></li>
\t\t\t\t\t";
            }
            // line 296
            echo "\t\t\t\t\t";
            if (($context["telegram_url"] ?? null)) {
                // line 297
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null), 297, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-telegram\"></i></a></li>
\t\t\t\t\t";
            }
            // line 299
            echo "\t\t\t\t\t";
            if (($context["whatsapp_url"] ?? null)) {
                // line 300
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsapp_url"] ?? null), 300, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-whatsapp\"></i></a></li>
\t\t\t\t\t";
            }
            // line 302
            echo "\t\t\t\t\t";
            if (($context["github_url"] ?? null)) {
                // line 303
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["github_url"] ?? null), 303, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-github\"></i></a></li>
\t\t\t\t\t";
            }
            // line 305
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        }
        // line 308
        echo "\t\t</div>
\t\t<!--/.text_right -->
\t\t</div> <!-- /.container -->
\t</section> <!-- /footer-bottom-last -->
\t<!-- end condition if copyright or social icons -->
</footer>
";
        // line 314
        if (($context["show_scroller_details"] ?? null)) {
            // line 315
            echo "<div class=\"scrolltop  arrow-up ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["arrow_up"] ?? null), 315, $this->source), "html", null, true);
            echo "\">
\t<div class=\"scrolltop-icon\">&#x2191;</div>
</div>
";
        }
        // line 319
        echo "<!-- End: Footer -->
";
    }

    // line 160
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "<div class=\"container\">
\t<div class=\"row main-show\">
\t\t";
        // line 164
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 164)) {
            // line 165
            echo "\t\t";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 170
            echo "\t\t";
        }
        // line 171
        echo "
\t\t";
        // line 173
        $context["content_classes"] = [0 => ((twig_get_attribute($this->env, $this->source,         // line 174
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 174)) ? ("with-sidefirst") : ("")), 1 => ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 175
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 175))) ? ("main-area") : (""))];
        // line 178
        echo "\t\t<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 178), 178, $this->source), "html", null, true);
        echo ">
\t\t\t";
        // line 180
        echo "\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 184
        echo "\t</div>
</div>
</div>
";
    }

    // line 165
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "\t\t<div class=\"sidefirst\">
\t\t\t";
        // line 167
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t";
    }

    // line 180
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "\t\t\t<a id=\"main-content\"></a>
\t\t\t";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/contrib/dark_awesome/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 182,  614 => 181,  610 => 180,  603 => 167,  600 => 166,  596 => 165,  589 => 184,  586 => 180,  581 => 178,  579 => 175,  578 => 174,  577 => 173,  574 => 171,  571 => 170,  568 => 165,  565 => 164,  561 => 161,  557 => 160,  552 => 319,  544 => 315,  542 => 314,  534 => 308,  529 => 305,  523 => 303,  520 => 302,  514 => 300,  511 => 299,  505 => 297,  502 => 296,  496 => 294,  493 => 293,  487 => 291,  484 => 290,  478 => 288,  475 => 287,  469 => 285,  466 => 284,  459 => 281,  456 => 280,  449 => 277,  447 => 276,  443 => 274,  440 => 273,  434 => 270,  431 => 269,  429 => 268,  418 => 259,  409 => 252,  403 => 250,  400 => 249,  394 => 247,  391 => 246,  385 => 244,  383 => 243,  379 => 241,  373 => 239,  371 => 238,  366 => 235,  364 => 234,  358 => 230,  352 => 227,  349 => 226,  347 => 225,  338 => 218,  332 => 215,  329 => 214,  327 => 213,  322 => 210,  313 => 203,  307 => 201,  304 => 200,  298 => 198,  296 => 197,  289 => 192,  287 => 191,  282 => 188,  280 => 160,  275 => 157,  269 => 153,  265 => 151,  259 => 149,  257 => 148,  254 => 147,  252 => 146,  247 => 143,  233 => 142,  229 => 140,  221 => 138,  218 => 137,  212 => 135,  209 => 134,  203 => 132,  201 => 131,  198 => 130,  194 => 128,  186 => 126,  183 => 125,  177 => 123,  174 => 122,  168 => 120,  166 => 119,  163 => 118,  160 => 117,  143 => 116,  137 => 112,  135 => 111,  124 => 102,  118 => 99,  114 => 97,  112 => 96,  98 => 84,  92 => 81,  87 => 78,  85 => 77,  70 => 64,  64 => 61,  61 => 60,  59 => 59,  42 => 44,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/dark_awesome/templates/page/page.html.twig", "C:\\xampp\\htdocs\\portfoliodrupal\\themes\\contrib\\dark_awesome\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 59, "for" => 116, "block" => 160, "set" => 173);
        static $filters = array("escape" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'block', 'set'],
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
