<?php

/* __string_template__bb18e6452bd23918d5607d6502b14f92e513d542a8da727452210546b031130c */
class __TwigTemplate_5a8af6d7cc7e08532b888f7312a88ad1b86b23acf8d71213a741d575d259ceed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" prefix=\"og: http://ogp.me/ns#\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<base href=\"";
        // line 7
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\">
\t<title>";
        // line 8
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
\t<meta name=\"mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"theme-color\" content=\"";
        // line 10
        echo (isset($context["color_browser_bar"]) ? $context["color_browser_bar"] : null);
        echo "\">
\t<meta name=\"application-name\" content=\"";
        // line 11
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"";
        // line 13
        echo (isset($context["color_browser_bar"]) ? $context["color_browser_bar"] : null);
        echo "\">
\t<meta name=\"apple-mobile-web-app-title\" content=\"";
        // line 14
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\">
\t<meta name=\"msapplication-TileColor\" content=\"";
        // line 15
        echo (isset($context["color_browser_bar"]) ? $context["color_browser_bar"] : null);
        echo "\">
\t<meta name=\"SKYPE_TOOLBAR\" content=\"SKYPE_TOOLBAR_PARSER_COMPATIBLE\">
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t";
        // line 18
        if ((isset($context["description"]) ? $context["description"] : null)) {
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\">";
        }
        // line 19
        echo "\t";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\">";
        }
        // line 20
        echo "\t<!-- Facebook share -->
\t<meta property=\"og:site_name\" content=\"";
        // line 21
        echo (isset($context["facebook_site_name"]) ? $context["facebook_site_name"] : null);
        echo "\">
\t<meta property=\"og:url\" content=\"";
        // line 22
        echo (isset($context["facebook_share_url"]) ? $context["facebook_share_url"] : null);
        echo "\">
\t<meta property=\"og:type\" content=\"";
        // line 23
        echo (isset($context["facebook_share_type"]) ? $context["facebook_share_type"] : null);
        echo "\">
\t<meta property=\"og:locale\" content=\"";
        // line 24
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
\t<meta property=\"og:title\" content=\"";
        // line 25
        echo (isset($context["facebook_share_title"]) ? $context["facebook_share_title"] : null);
        echo "\">
\t<meta property=\"og:description\" content=\"";
        // line 26
        echo (isset($context["facebook_share_description"]) ? $context["facebook_share_description"] : null);
        echo "\">
\t<meta property=\"og:image\" content=\"";
        // line 27
        echo (isset($context["facebook_share_image"]) ? $context["facebook_share_image"] : null);
        echo "\">
\t<meta property=\"og:image:width\" content=\"";
        // line 28
        echo (isset($context["facebook_share_image_width"]) ? $context["facebook_share_image_width"] : null);
        echo "\">
\t<meta property=\"og:image:height\" content=\"";
        // line 29
        echo (isset($context["facebook_share_image_height"]) ? $context["facebook_share_image_height"] : null);
        echo "\">
\t";
        // line 30
        if (((isset($context["facebook_share_type"]) ? $context["facebook_share_type"] : null) == "product")) {
            // line 31
            echo "\t<meta property=\"product:price:amount\" content=\"";
            echo (isset($context["facebook_product_price_amount"]) ? $context["facebook_product_price_amount"] : null);
            echo "\">
\t<meta property=\"product:price:currency\" content=\"";
            // line 32
            echo (isset($context["facebook_product_price_currency"]) ? $context["facebook_product_price_currency"] : null);
            echo "\">
\t";
        }
        // line 34
        echo "\t<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"Organization\",
\t\t\"name\": \"";
        // line 38
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\",
\t\t\"url\": \"";
        // line 39
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\",
\t\t";
        // line 40
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 41
            echo "\t\t\"logo\": \"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\",
\t\t";
        }
        // line 43
        echo "\t\t\"contactPoint\": [
\t\t\t{
\t\t\t\t\"@type\": \"ContactPoint\",
\t\t\t\t\"telephone\": \"";
        // line 46
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\",
\t\t\t\t\"contactType\": \"sales\",
\t\t\t\t\"areaServed\": [\"";
        // line 48
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\"]
\t\t\t}
\t\t]
\t\t";
        // line 51
        if ((isset($context["social_links"]) ? $context["social_links"] : null)) {
            // line 52
            echo "\t\t,\"sameAs\": [
\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["social_links"]) ? $context["social_links"] : null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 54
                echo "\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["social_links"]) ? $context["social_links"] : null)) - 1))) {
                    // line 55
                    echo "\t\t\t\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["social_links"]) ? $context["social_links"] : null), $context["i"], array(), "array"), "link", array());
                    echo "\",
\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["social_links"]) ? $context["social_links"] : null), $context["i"], array(), "array"), "link", array());
                    echo "\"
\t\t\t";
                }
                // line 59
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t]
\t\t";
        }
        // line 62
        echo "\t}
\t</script>
\t<style>";
        // line 64
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "</style>
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" ";
            if (($this->getAttribute($context["link"], "type", array()) || $this->getAttribute($context["link"], "sizes", array()))) {
                echo "type=\"";
                echo $this->getAttribute($context["link"], "type", array());
                echo "\" sizes=\"";
                echo $this->getAttribute($context["link"], "sizes", array());
                echo "\" ";
            }
            echo ">";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo $context["analytic"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t<!--[if lt IE 9]>
\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t<![endif]-->
</head>
<body class=\"";
        // line 72
        echo (isset($context["color_background"]) ? $context["color_background"] : null);
        echo "\">
\t<header class=\"href-underline\">
\t\t<div class=\"row hide-on-small-only ";
        // line 74
        echo (isset($context["color_top_menu"]) ? $context["color_top_menu"] : null);
        echo "\">
\t\t\t<nav class=\"container transparent z-depth-0 top-menu\">
\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t";
        // line 77
        if (((isset($context["language"]) ? $context["language"] : null) || (isset($context["currency"]) ? $context["currency"] : null))) {
            // line 78
            echo "\t\t\t\t\t<ul class=\"left\">
\t\t\t\t\t\t";
            // line 79
            if ((isset($context["language"]) ? $context["language"] : null)) {
                echo "<li><a class=\"waves-effect waves-light modal-trigger\" href=\"#modal-language\" rel=\"nofollow\"><i class=\"material-icons\">language</i></a></li>";
            }
            // line 80
            echo "\t\t\t\t\t\t";
            if ((isset($context["currency"]) ? $context["currency"] : null)) {
                echo "<li><a class=\"waves-effect waves-light modal-trigger\" href=\"#modal-currency\" rel=\"nofollow\"><i class=\"material-icons\">monetization_on</i></a></li>";
            }
            // line 81
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t<ul class=\"right\">
\t\t\t\t\t\t";
        // line 84
        if ((isset($context["blog"]) ? $context["blog"] : null)) {
            echo "<li><a class=\"waves-effect waves-light ";
            echo (isset($context["color_top_menu_text"]) ? $context["color_top_menu_text"] : null);
            echo "\" href=\"";
            echo (isset($context["blog"]) ? $context["blog"] : null);
            echo "\">";
            echo (isset($context["text_blog"]) ? $context["text_blog"] : null);
            echo "</a></li>";
        }
        // line 85
        echo "\t\t\t\t\t\t<li><a class=\"waves-effect waves-light ";
        echo (isset($context["color_top_menu_text"]) ? $context["color_top_menu_text"] : null);
        echo "\" href=\"";
        echo (isset($context["delivery"]) ? $context["delivery"] : null);
        echo "\">";
        echo (isset($context["text_delivery"]) ? $context["text_delivery"] : null);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"waves-effect waves-light ";
        // line 86
        echo (isset($context["color_top_menu_text"]) ? $context["color_top_menu_text"] : null);
        echo "\" href=\"";
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"waves-effect waves-light ";
        // line 87
        echo (isset($context["color_top_menu_text"]) ? $context["color_top_menu_text"] : null);
        echo "\" href=\"";
        echo (isset($context["about"]) ? $context["about"] : null);
        echo "\">";
        echo (isset($context["text_about"]) ? $context["text_about"] : null);
        echo "</a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"dropdown-lk\" class=\"dropdown-trigger waves-effect waves-light ";
        // line 89
        echo (isset($context["color_top_menu_text"]) ? $context["color_top_menu_text"] : null);
        echo "\" href=\"";
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" data-target=\"dropdown-top-lk\" rel=\"nofollow\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
\t\t\t\t\t\t\t<ul id=\"dropdown-top-lk\" class=\"dropdown-content\">
\t\t\t\t\t\t\t\t";
        // line 91
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 92
            echo "\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 94
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 96
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 98
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 101
            echo "\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 103
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" rel=\"nofollow\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<div class=\"row top-container ";
        // line 111
        echo (isset($context["color_header"]) ? $context["color_header"] : null);
        echo "\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"valign-wrapper\">
\t\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t\t";
        // line 115
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 116
            echo "\t\t\t\t\t\t<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">
\t\t\t\t\t\t\t<img id=\"logo-img\" class=\"responsive-img lazyload\" src=\"";
            // line 117
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 120
            echo "\t\t\t\t\t\t<strong><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\" class=\"";
            echo (isset($context["color_header_text"]) ? $context["color_header_text"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></strong>
\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col m8 right-align hide-on-small-only ";
        // line 123
        echo (isset($context["color_header_text"]) ? $context["color_header_text"] : null);
        echo "\">
\t\t\t\t\t\t<a class=\"href-underline text-bold flow-text block ";
        // line 124
        echo (isset($context["color_header_text"]) ? $context["color_header_text"] : null);
        echo "\" href=\"tel:";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</a>
\t\t\t\t\t\t<ul class=\"right contact-info\">
\t\t\t\t\t\t\t<li><a href=\"mailto:";
        // line 126
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" class=\"";
        echo (isset($context["color_header_text"]) ? $context["color_header_text"] : null);
        echo "\"><i class=\"material-icons left\">email</i>";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 127
        if ((isset($context["callback_status"]) ? $context["callback_status"] : null)) {
            echo "<li><a href=\"#callback__modal\" class=\"modal-trigger activator ";
            echo (isset($context["color_header_text"]) ? $context["color_header_text"] : null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons left\">phone_in_talk</i>";
            echo (isset($context["callback_title"]) ? $context["callback_title"] : null);
            echo "</a></li>";
        }
        // line 128
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 129
            echo "\t\t\t\t\t\t\t<li><i class=\"material-icons left\">access_time</i>";
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "</li>
\t\t\t\t\t\t\t";
        }
        // line 131
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"fixed-nav-wrapper\">
\t\t\t<nav id=\"header-navigation\" class=\"hide-on-small-only pin-top ";
        // line 137
        echo (isset($context["color_navigation"]) ? $context["color_navigation"] : null);
        echo "\">
\t\t\t\t<div class=\"nav-wrapper container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"col m3\">
\t\t\t\t\t\t\t";
        // line 142
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"col m9\">
\t\t\t\t\t\t\t";
        // line 145
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<button type=\"button\" data-target=\"slide-out\" id=\"btn-side-menu\" class=\"sidenav-trigger hide-on-med-and-up btn-floating btn-large waves-effect waves-circle waves-light z-depth-4 ";
        // line 151
        echo (isset($context["color_nav_btn"]) ? $context["color_nav_btn"] : null);
        echo "\"><i class=\"material-icons ";
        echo (isset($context["color_nav_btn_text"]) ? $context["color_nav_btn_text"] : null);
        echo "\">menu</i></button>
\t\t\t<ul id=\"slide-out\" class=\"sidenav\"><li class=\"progress\"><div class=\"indeterminate\"></div></li></ul>
\t\t</div>
\t</header>
\t";
        // line 155
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t";
        // line 156
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
\t";
        // line 157
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
\t";
        // line 158
        echo (isset($context["callback_module"]) ? $context["callback_module"] : null);
        echo "
\t<a id=\"compare-btn\" href=\"";
        // line 159
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" class=\"btn-floating btn-large waves-effect waves-light scale-transition pulse ";
        echo (isset($context["color_compare"]) ? $context["color_compare"] : null);
        echo " ";
        echo ((((isset($context["text_compare"]) ? $context["text_compare"] : null) == "0")) ? ("scale-out") : (""));
        echo "\" title=\"";
        echo (isset($context["text_comparison_list"]) ? $context["text_comparison_list"] : null);
        echo "\" rel=\"nofollow\">
\t\t<i class=\"material-icons ";
        // line 160
        echo (isset($context["color_compare_text"]) ? $context["color_compare_text"] : null);
        echo "\">compare_arrows</i>
\t\t<small id=\"compare-total\" class=\"btn-floating z-depth-1 pulse ";
        // line 161
        echo (isset($context["color_compare_total"]) ? $context["color_compare_total"] : null);
        echo " ";
        echo (isset($context["color_compare_total_text"]) ? $context["color_compare_total_text"] : null);
        echo "\">";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</small>
\t</a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "__string_template__bb18e6452bd23918d5607d6502b14f92e513d542a8da727452210546b031130c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 161,  522 => 160,  512 => 159,  508 => 158,  504 => 157,  500 => 156,  496 => 155,  487 => 151,  478 => 145,  472 => 142,  464 => 137,  456 => 131,  450 => 129,  447 => 128,  439 => 127,  431 => 126,  422 => 124,  418 => 123,  415 => 122,  405 => 120,  393 => 117,  388 => 116,  386 => 115,  379 => 111,  371 => 105,  364 => 103,  356 => 101,  348 => 98,  341 => 96,  334 => 94,  326 => 92,  324 => 91,  315 => 89,  306 => 87,  298 => 86,  289 => 85,  279 => 84,  276 => 83,  272 => 81,  267 => 80,  263 => 79,  260 => 78,  258 => 77,  252 => 74,  247 => 72,  241 => 68,  231 => 67,  210 => 66,  205 => 64,  201 => 62,  197 => 60,  191 => 59,  185 => 57,  179 => 55,  176 => 54,  172 => 53,  169 => 52,  167 => 51,  161 => 48,  156 => 46,  151 => 43,  145 => 41,  143 => 40,  139 => 39,  135 => 38,  129 => 34,  124 => 32,  119 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  78 => 20,  71 => 19,  65 => 18,  59 => 15,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  37 => 8,  33 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" prefix="og: http://ogp.me/ns#">*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 	<base href="{{ base }}">*/
/* 	<title>{{ title }}</title>*/
/* 	<meta name="mobile-web-app-capable" content="yes">*/
/* 	<meta name="theme-color" content="{{ color_browser_bar }}">*/
/* 	<meta name="application-name" content="{{ name }}">*/
/* 	<meta name="apple-mobile-web-app-capable" content="yes">*/
/* 	<meta name="apple-mobile-web-app-status-bar-style" content="{{ color_browser_bar }}">*/
/* 	<meta name="apple-mobile-web-app-title" content="{{ name }}">*/
/* 	<meta name="msapplication-TileColor" content="{{ color_browser_bar }}">*/
/* 	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">*/
/* 	<meta name="format-detection" content="telephone=no">*/
/* 	{% if description %}<meta name="description" content="{{ description }}">{% endif %}*/
/* 	{% if keywords %}<meta name="keywords" content="{{ keywords }}">{% endif %}*/
/* 	<!-- Facebook share -->*/
/* 	<meta property="og:site_name" content="{{ facebook_site_name }}">*/
/* 	<meta property="og:url" content="{{ facebook_share_url }}">*/
/* 	<meta property="og:type" content="{{ facebook_share_type }}">*/
/* 	<meta property="og:locale" content="{{ lang }}">*/
/* 	<meta property="og:title" content="{{ facebook_share_title }}">*/
/* 	<meta property="og:description" content="{{ facebook_share_description }}">*/
/* 	<meta property="og:image" content="{{ facebook_share_image }}">*/
/* 	<meta property="og:image:width" content="{{ facebook_share_image_width }}">*/
/* 	<meta property="og:image:height" content="{{ facebook_share_image_height }}">*/
/* 	{% if facebook_share_type == 'product' %}*/
/* 	<meta property="product:price:amount" content="{{ facebook_product_price_amount }}">*/
/* 	<meta property="product:price:currency" content="{{ facebook_product_price_currency }}">*/
/* 	{% endif %}*/
/* 	<script type="application/ld+json">*/
/* 	{*/
/* 		"@context": "http://schema.org",*/
/* 		"@type": "Organization",*/
/* 		"name": "{{ name }}",*/
/* 		"url": "{{ base }}",*/
/* 		{% if logo %}*/
/* 		"logo": "{{ logo }}",*/
/* 		{% endif %}*/
/* 		"contactPoint": [*/
/* 			{*/
/* 				"@type": "ContactPoint",*/
/* 				"telephone": "{{ telephone }}",*/
/* 				"contactType": "sales",*/
/* 				"areaServed": ["{{ lang }}"]*/
/* 			}*/
/* 		]*/
/* 		{% if social_links %}*/
/* 		,"sameAs": [*/
/* 		{% for i in range(0, social_links|length - 1) %}*/
/* 			{% if i < (social_links|length - 1) %}*/
/* 			"{{ social_links[i].link }}",*/
/* 			{% else %}*/
/* 			"{{ social_links[i].link }}"*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		]*/
/* 		{% endif %}*/
/* 	}*/
/* 	</script>*/
/* 	<style>{{ css }}</style>*/
/*   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* 	{% for link in links %}<link href="{{ link.href }}" rel="{{ link.rel }}" {% if link.type or link.sizes %}type="{{ link.type }}" sizes="{{ link.sizes }}" {% endif %}>{% endfor %}*/
/* 	{% for analytic in analytics %}{{ analytic }}{% endfor %}*/
/* 	<!--[if lt IE 9]>*/
/* 		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/* 	<![endif]-->*/
/* </head>*/
/* <body class="{{ color_background }}">*/
/* 	<header class="href-underline">*/
/* 		<div class="row hide-on-small-only {{ color_top_menu }}">*/
/* 			<nav class="container transparent z-depth-0 top-menu">*/
/* 				<div class="nav-wrapper">*/
/* 					{% if language or currency %}*/
/* 					<ul class="left">*/
/* 						{% if language %}<li><a class="waves-effect waves-light modal-trigger" href="#modal-language" rel="nofollow"><i class="material-icons">language</i></a></li>{% endif %}*/
/* 						{% if currency %}<li><a class="waves-effect waves-light modal-trigger" href="#modal-currency" rel="nofollow"><i class="material-icons">monetization_on</i></a></li>{% endif %}*/
/* 					</ul>*/
/* 					{% endif %}*/
/* 					<ul class="right">*/
/* 						{% if blog %}<li><a class="waves-effect waves-light {{ color_top_menu_text }}" href="{{ blog }}">{{ text_blog }}</a></li>{% endif %}*/
/* 						<li><a class="waves-effect waves-light {{ color_top_menu_text }}" href="{{ delivery }}">{{ text_delivery }}</a></li>*/
/* 						<li><a class="waves-effect waves-light {{ color_top_menu_text }}" href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 						<li><a class="waves-effect waves-light {{ color_top_menu_text }}" href="{{ about }}">{{ text_about }}</a></li>*/
/* 						<li>*/
/* 							<a id="dropdown-lk" class="dropdown-trigger waves-effect waves-light {{ color_top_menu_text }}" href="{{ account }}" data-target="dropdown-top-lk" rel="nofollow">{{ text_account }}</a>*/
/* 							<ul id="dropdown-top-lk" class="dropdown-content">*/
/* 								{% if logged %}*/
/* 								<li><a class="waves-effect" href="{{ account }}" rel="nofollow">{{ text_account }}</a></li>*/
/* 								<li class="divider"></li>*/
/* 								<li><a class="waves-effect" href="{{ wishlist }}" rel="nofollow">{{ text_wishlist }}</a></li>*/
/* 								<li class="divider"></li>*/
/* 								<li><a class="waves-effect" href="{{ order }}" rel="nofollow">{{ text_order }}</a></li>*/
/* 								<li class="divider"></li>*/
/* 								<li><a class="waves-effect" href="{{ logout }}" rel="nofollow">{{ text_logout }}</a></li>*/
/* 								<li class="divider"></li>*/
/* 								{% else %}*/
/* 								<li><a class="waves-effect" href="{{ register }}" rel="nofollow">{{ text_register }}</a></li>*/
/* 								<li class="divider"></li>*/
/* 								<li><a class="waves-effect" href="{{ login }}" rel="nofollow">{{ text_login }}</a></li>*/
/* 								{% endif %}*/
/* 							</ul>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</nav>*/
/* 		</div>*/
/* 		<div class="row top-container {{ color_header }}">*/
/* 			<div class="container">*/
/* 				<div class="valign-wrapper">*/
/* 					<div class="col s12 m4">*/
/* 						{% if logo %}*/
/* 						<a href="{{ home }}">*/
/* 							<img id="logo-img" class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ logo }}" title="{{ name }}" alt="{{ name }}">*/
/* 						</a>*/
/* 						{% else %}*/
/* 						<strong><a href="{{ home }}" class="{{ color_header_text }}">{{ name }}</a></strong>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="col m8 right-align hide-on-small-only {{ color_header_text }}">*/
/* 						<a class="href-underline text-bold flow-text block {{ color_header_text }}" href="tel:{{ telephone }}">{{ telephone }}</a>*/
/* 						<ul class="right contact-info">*/
/* 							<li><a href="mailto:{{ email }}" class="{{ color_header_text }}"><i class="material-icons left">email</i>{{ email }}</a></li>*/
/* 							{% if callback_status %}<li><a href="#callback__modal" class="modal-trigger activator {{ color_header_text }}" rel="nofollow"><i class="material-icons left">phone_in_talk</i>{{ callback_title }}</a></li>{% endif %}*/
/* 							{% if open %}*/
/* 							<li><i class="material-icons left">access_time</i>{{ open }}</li>*/
/* 							{% endif %}*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div id="fixed-nav-wrapper">*/
/* 			<nav id="header-navigation" class="hide-on-small-only pin-top {{ color_navigation }}">*/
/* 				<div class="nav-wrapper container">*/
/* 					<div class="row">*/
/* 						<ul>*/
/* 							<li class="col m3">*/
/* 							{{ menu }}*/
/* 							</li>*/
/* 							<li class="col m9">*/
/* 							{{ search }}*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</nav>*/
/* 			<button type="button" data-target="slide-out" id="btn-side-menu" class="sidenav-trigger hide-on-med-and-up btn-floating btn-large waves-effect waves-circle waves-light z-depth-4 {{ color_nav_btn }}"><i class="material-icons {{ color_nav_btn_text }}">menu</i></button>*/
/* 			<ul id="slide-out" class="sidenav"><li class="progress"><div class="indeterminate"></div></li></ul>*/
/* 		</div>*/
/* 	</header>*/
/* 	{{ cart }}*/
/* 	{{ language }}*/
/* 	{{ currency }}*/
/* 	{{ callback_module }}*/
/* 	<a id="compare-btn" href="{{ compare }}" class="btn-floating btn-large waves-effect waves-light scale-transition pulse {{ color_compare }} {{ text_compare == '0' ? 'scale-out' : '' }}" title="{{ text_comparison_list }}" rel="nofollow">*/
/* 		<i class="material-icons {{ color_compare_text }}">compare_arrows</i>*/
/* 		<small id="compare-total" class="btn-floating z-depth-1 pulse {{ color_compare_total }} {{ color_compare_total_text }}">{{ text_compare }}</small>*/
/* 	</a>*/
/* {% endspaceless %}*/