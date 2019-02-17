<?php

/* materialize/template/product/product.twig */
class __TwigTemplate_8dbb7b8bee0e78aab485356a7105ae3d7ee766dbf63dd5ba1e5ef84c13d7cdf6 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 2
        ob_start();
        // line 3
        echo "<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"BreadcrumbList\",
\t\"itemListElement\": [
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t";
            if (($context["key"] < (twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) - 1))) {
                // line 10
                echo "\t\t";
                if (($context["key"] == 0)) {
                    // line 11
                    echo "\t\t";
                } else {
                    // line 12
                    echo "\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
                    // line 14
                    echo $context["key"];
                    echo ",
\t\t\t\"item\": {
\t\t\t\t\"@id\": \"";
                    // line 16
                    echo $this->getAttribute($context["breadcrumb"], "href", array());
                    echo "\",
\t\t\t\t\"name\": \"";
                    // line 17
                    echo $this->getAttribute($context["breadcrumb"], "text", array());
                    echo "\"
\t\t\t}
\t\t},
\t\t";
                }
                // line 21
                echo "\t\t";
            } else {
                // line 22
                echo "\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
                // line 24
                echo $context["key"];
                echo ",
\t\t\t\"item\": {
\t\t\t\t\"@id\": \"";
                // line 26
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\",
\t\t\t\t\"name\": \"";
                // line 27
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "\"
\t\t\t}
\t\t}
\t\t";
            }
            // line 31
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t]
}
</script>
";
        // line 35
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 36
            echo "\t";
            list($context["main"], $context["image"], $context["product_info"]) =             array("s12 m12 l6", "s12 m6 l12", "s12 m6 l12");
        } elseif ((        // line 37
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 38
            echo "\t";
            list($context["main"], $context["image"], $context["product_info"]) =             array("s12 l9", "s12 m6", "s12 m6");
        } else {
            // line 40
            echo "\t";
            list($context["main"], $context["image"], $context["product_info"]) =             array("s12", "s12 m6 xl5", "s12 m6 xl7");
        }
        // line 42
        echo "<main>
\t<div class=\"container\">
\t\t<nav id=\"breadcrumbs\" class=\"breadcrumb-wrapper transparent z-depth-0\">
\t\t\t<span class=\"breadcrumb-blur hide-on-med-and-up\"></span>
\t\t\t<div class=\"nav-wrapper breadcrumb-wrap href-underline\">
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 48
            echo "\t\t\t\t\t";
            if (($context["key"] < (twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) - 1))) {
                // line 49
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\" class=\"breadcrumb waves-effect black-text\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t<span class=\"breadcrumb blue-grey-text text-darken-3\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span>
\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t</div>
\t\t</nav>
\t\t<div class=\"row\">
\t\t\t";
        // line 57
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t\t<div class=\"col ";
        // line 58
        echo (isset($context["main"]) ? $context["main"] : null);
        echo "\" itemscope itemtype=\"http://schema.org/Product\">
\t\t\t\t<meta itemprop=\"url\" content=\"";
        // line 59
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\">
\t\t\t\t";
        // line 60
        if ((isset($context["product_image"]) ? $context["product_image"] : null)) {
            // line 61
            echo "\t\t\t\t<meta itemprop=\"image\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["images"]) ? $context["images"] : null), 0, array()), "popup", array());
            echo "\">
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col ";
        // line 65
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\">
\t\t\t\t\t\t<div class=\"card-panel center img-block\">
\t\t\t\t\t\t\t";
        // line 67
        if ((isset($context["labels"]) ? $context["labels"] : null)) {
            // line 68
            echo "\t\t\t\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                echo $this->getAttribute($context["label"], "color", array());
                echo " ";
                echo $this->getAttribute($context["label"], "color_text", array());
                echo "\">";
                echo $this->getAttribute($context["label"], "name", array());
                echo "</span></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["special"]) ? $context["special"] : null)) {
            echo "<span class=\"white-text badge red lighten-1 product-card-badge-percent z-depth-1\">";
            echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
            echo " <b>";
            echo (isset($context["percent_discount"]) ? $context["percent_discount"] : null);
            echo "%</b></span>";
        }
        // line 75
        echo "\t\t\t\t\t\t\t<span class=\"";
        echo (isset($context["stock_color"]) ? $context["stock_color"] : null);
        echo " white-text badge availability\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span>
\t\t\t\t\t\t\t";
        // line 76
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 77
            echo "\t\t\t\t\t\t\t\t";
            echo (isset($context["photoswipe_module"]) ? $context["photoswipe_module"] : null);
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\">
\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col ";
        // line 83
        echo (isset($context["product_info"]) ? $context["product_info"] : null);
        echo "\">
\t\t\t\t\t\t<div class=\"card-panel product-info\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<ul class=\"user-btn\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
        // line 88
        if ((isset($context["wishlist_product"]) ? $context["wishlist_product"] : null)) {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t<i id=\"wishlist-btn\" class=\"material-icons waves-effect waves-circle tooltipped red-text activator\" data-position=\"top\" data-tooltip=\"";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "');\">favorite</i>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t<i id=\"wishlist-btn\" class=\"material-icons waves-effect waves-circle tooltipped activator\" data-position=\"top\" data-tooltip=\"";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "');\">favorite_border</i>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle tooltipped activator\" onclick=\"compare.add('";
        // line 95
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\" data-position=\"top\" data-tooltip=\"";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\">compare_arrows</i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle tooltipped sidenav-trigger share-btn\" data-target=\"side-share\" data-position=\"top\" data-tooltip=\"";
        // line 98
        echo (isset($context["button_share"]) ? $context["button_share"] : null);
        echo "\">share</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h1 class=\"center\" itemprop=\"name\">";
        // line 100
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
        // line 104
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"white\">
\t\t\t\t\t\t\t\t\t\t";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
            // line 114
            if (((isset($context["rating"]) ? $context["rating"] : null) > 0)) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t<div itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\" class=\"hide\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"reviewCount\" content=\"";
                // line 116
                echo (isset($context["reviewCount"]) ? $context["reviewCount"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"ratingValue\" content=\"";
                // line 117
                echo (isset($context["rating"]) ? $context["rating"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"worstRating\" content=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"bestRating\" content=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"itemreviewed\" content=\"";
                // line 120
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<a class=\"blue-grey-text text-darken-3 text-bold\" href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click');\$('html, body').animate({scrollTop:\$('a[href=\\'#tab-review\\']').offset().top-50},1150);return false;\" rel=\"nofollow\">";
        // line 125
        echo (isset($context["reviews"]) ? $context["reviews"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row valign-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"col s8 flow-text\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
\t\t\t\t\t\t\t\t\t";
        // line 130
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 131
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 132
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"card-price old-prices\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"price\" content=\"";
                // line 133
                echo (isset($context["meta_price"]) ? $context["meta_price"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 135
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"card-price new-prices red-text text-darken-2\">";
                // line 136
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"price\" content=\"";
                // line 137
                echo (isset($context["meta_special"]) ? $context["meta_special"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t\t\t<meta itemprop=\"pricecurrency\" content=\"";
        echo (isset($context["pricecurrency"]) ? $context["pricecurrency"] : null);
        echo "\">
\t\t\t\t\t\t\t\t\t<link itemprop=\"availability\" href=\"";
        // line 141
        echo (isset($context["stock_status"]) ? $context["stock_status"] : null);
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 142
        if (((isset($context["product_spec"]) ? $context["product_spec"] : null) && ((isset($context["product_spec"]) ? $context["product_spec"] : null) != "0000-00-00"))) {
            // line 143
            echo "\t\t\t\t\t\t\t\t\t<meta itemprop=\"priceValidUntil\" content=\"";
            echo (isset($context["product_spec"]) ? $context["product_spec"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s4 center\">
\t\t\t\t\t\t\t\t\t";
        // line 147
        if ((isset($context["manufacturers_img"]) ? $context["manufacturers_img"] : null)) {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" target=\"_blank\" rel=\"noopener\">
\t\t\t\t\t\t\t\t\t\t";
            // line 149
            if ((isset($context["manufacturers_img"]) ? $context["manufacturers_img"] : null)) {
                // line 150
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo (isset($context["manufacturers_img"]) ? $context["manufacturers_img"] : null);
                echo "\" title=\"";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "\" alt=\"";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 157
        if (((isset($context["product_spec"]) ? $context["product_spec"] : null) && ((isset($context["product_spec"]) ? $context["product_spec"] : null) != "0000-00-00"))) {
            // line 158
            echo "\t\t\t\t\t\t\t<div class=\"section center grey lighten-3 end-promotion\">
\t\t\t\t\t\t\t\t<span><i class=\"material-icons left\">info</i>";
            // line 159
            echo (isset($context["text_end_promotion"]) ? $context["text_end_promotion"] : null);
            echo " <span class=\"text-bold\">";
            echo (isset($context["end_promotion"]) ? $context["end_promotion"] : null);
            echo "</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t\t\t<blockquote class=\"blockquote-note blue-grey lighten-5 z-depth-1\">
\t\t\t\t\t\t\t\t<div class=\"blockquote-icon blue-grey lighten-4 cursor-default\"><i class=\"material-icons\">chat</i></div>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 165
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 166
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</span>:&nbsp;<a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" target=\"_blank\" rel=\"noopener\"><span itemprop=\"brand\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</span></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 168
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["category_products"]) ? $context["category_products"] : null)) {
            // line 169
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>:&nbsp;<a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["category_products"]) ? $context["category_products"] : null), 0, array()), "href", array());
            echo "\"><span itemprop=\"category\">";
            echo $this->getAttribute($this->getAttribute((isset($context["category_products"]) ? $context["category_products"] : null), 0, array()), "name", array());
            echo "</span></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["model"]) ? $context["model"] : null)) {
            // line 172
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</span>&nbsp;";
            echo (isset($context["model"]) ? $context["model"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["sku"]) ? $context["sku"] : null)) {
            // line 175
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_sku"]) ? $context["text_sku"] : null);
            echo "</span>:&nbsp;<span itemprop=\"sku\">";
            echo (isset($context["sku"]) ? $context["sku"] : null);
            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["upc"]) ? $context["upc"] : null)) {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_upc"]) ? $context["text_upc"] : null);
            echo "</span>:&nbsp;";
            echo (isset($context["upc"]) ? $context["upc"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["ean"]) ? $context["ean"] : null)) {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\" >";
            echo (isset($context["text_ean"]) ? $context["text_ean"] : null);
            echo "</span>:&nbsp;";
            echo (isset($context["ean"]) ? $context["ean"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["jan"]) ? $context["jan"] : null)) {
            // line 184
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_jan"]) ? $context["text_jan"] : null);
            echo "</span>:&nbsp;";
            echo (isset($context["jan"]) ? $context["jan"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 186
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["isbn"]) ? $context["isbn"] : null)) {
            // line 187
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_isbn"]) ? $context["text_isbn"] : null);
            echo "</span>:&nbsp;";
            echo (isset($context["isbn"]) ? $context["isbn"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 189
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["mpn"]) ? $context["mpn"] : null)) {
            // line 190
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_mpn"]) ? $context["text_mpn"] : null);
            echo "</span>:&nbsp;<span itemprop=\"mpn\">";
            echo (isset($context["mpn"]) ? $context["mpn"] : null);
            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["location"]) ? $context["location"] : null)) {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_location"]) ? $context["text_location"] : null);
            echo "</span>:&nbsp;";
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\t\t\t\t";
        if ((((isset($context["dimensions_length"]) ? $context["dimensions_length"] : null) || (isset($context["dimensions_width"]) ? $context["dimensions_width"] : null)) || (isset($context["dimensions_height"]) ? $context["dimensions_height"] : null))) {
            // line 196
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_dimension"]) ? $context["text_dimension"] : null);
            echo "</span>:&nbsp;";
            echo (isset($context["dimensions_length"]) ? $context["dimensions_length"] : null);
            echo " x ";
            echo (isset($context["dimensions_width"]) ? $context["dimensions_width"] : null);
            echo " x ";
            echo (isset($context["dimensions_height"]) ? $context["dimensions_height"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["weight"]) ? $context["weight"] : null) > 0)) {
            // line 199
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo "</span>:&nbsp;";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 201
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["additionalfields"]) ? $context["additionalfields"] : null)) {
            // line 202
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["additionalfields"]) ? $context["additionalfields"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["additionalfield"]) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t<li id=\"customfield-";
                echo $context["key"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
                // line 204
                echo $this->getAttribute($context["additionalfield"], "title", array());
                echo ":</span>&nbsp;";
                echo $this->getAttribute($context["additionalfield"], "text", array());
                echo "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['additionalfield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 208
        echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</span>&nbsp;<span class=\"";
        echo (isset($context["stock_color"]) ? $context["stock_color"] : null);
        echo "-text text-darken-1 text-bold\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
\t\t\t\t\t\t\t\t\t";
        // line 209
        if (((isset($context["type_remainder"]) ? $context["type_remainder"] : null) == "numerical")) {
            // line 210
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo (isset($context["text_remainder"]) ? $context["text_remainder"] : null);
            echo "</span>:&nbsp;";
            echo (isset($context["remainder"]) ? $context["remainder"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 212
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["type_remainder"]) ? $context["type_remainder"] : null) == "progressbar")) {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t<li class=\"product-remainder\"><span class=\"text-bold\">";
            echo (isset($context["text_remainder"]) ? $context["text_remainder"] : null);
            echo "</span>:&nbsp;<div class=\"progress blue lighten-3\"><div class=\"determinate ";
            echo (isset($context["progressbar_color"]) ? $context["progressbar_color"] : null);
            echo "\" style=\"width: ";
            echo (isset($context["progressbar_percent"]) ? $context["progressbar_percent"] : null);
            echo "%\"></div></div></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t";
        // line 217
        if (((((isset($context["special"]) ? $context["special"] : null) || (isset($context["reward"]) ? $context["reward"] : null)) || (isset($context["discounts"]) ? $context["discounts"] : null)) || (isset($context["sizechart"]) ? $context["sizechart"] : null))) {
            // line 218
            echo "\t\t\t\t\t\t\t<ul class=\"collection z-depth-1\">
\t\t\t\t\t\t\t\t";
            // line 219
            if ((isset($context["special"]) ? $context["special"] : null)) {
                // line 220
                echo "\t\t\t\t\t\t\t\t<li class=\"collection-item\"><i class=\"material-icons blue-grey-text text-darken-4 left\">local_offer</i>";
                echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
                echo "&nbsp;<span class=\"deep-orange-text text-accent-3 text-bold\">";
                echo (isset($context["percent_discount"]) ? $context["percent_discount"] : null);
                echo "%</span></li>
\t\t\t\t\t\t\t\t";
            }
            // line 222
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["reward"]) ? $context["reward"] : null)) {
                // line 223
                echo "\t\t\t\t\t\t\t\t<li class=\"collection-item\"><i class=\"material-icons blue-grey-text text-darken-4 left\">account_balance_wallet</i><span class=\"deep-orange-text text-accent-3 text-bold\">";
                echo (isset($context["reward"]) ? $context["reward"] : null);
                echo "</span>&nbsp;";
                echo (isset($context["text_bonus_points"]) ? $context["text_bonus_points"] : null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 225
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 226
                echo "\t\t\t\t\t\t\t\t<li class=\"collection-item\"><i class=\"material-icons blue-grey-text text-darken-4 left\">new_releases</i>";
                echo $this->getAttribute($context["discount"], "quantity", array());
                echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                echo "<span class=\"deep-orange-text text-accent-3 text-bold\">";
                echo $this->getAttribute($context["discount"], "price", array());
                echo "</span></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["sizechart"]) ? $context["sizechart"] : null)) {
                // line 229
                echo "\t\t\t\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons blue-grey-text text-darken-4 left\">straighten</i><a class=\"deep-orange-text text-accent-3 text-bold modal-trigger\" href=\"#modal-size-chart\" rel=\"nofollow\">";
                // line 230
                echo (isset($context["text_sizechart"]) ? $context["text_sizechart"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["payment_method"]) ? $context["payment_method"] : null) || (isset($context["payment_image"]) ? $context["payment_image"] : null))) {
            // line 236
            echo "\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t";
            // line 237
            if ((isset($context["payment_method"]) ? $context["payment_method"] : null)) {
                echo "<h6 class=\"center\">";
                echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
                echo "</h6>";
            }
            // line 238
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["payment_image"]) ? $context["payment_image"] : null)) {
                echo "<img class=\"responsive-img center-block lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo (isset($context["payment_image"]) ? $context["payment_image"] : null);
                echo "\" alt=\"";
                echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
                echo "\">";
            }
            // line 239
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 241
        echo "\t\t\t\t\t\t\t<div id=\"product\">
\t\t\t\t\t\t\t\t";
        // line 242
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 243
            echo "\t\t\t\t\t\t\t\t<h3>";
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
\t\t\t\t\t\t\t\t";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 245
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 246
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 247
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"product-option\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 249
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 250
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio\" for=\"radio-";
                        // line 251
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 252
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            // line 253
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                            echo "\" data-src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"responsive-img lazyload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 255
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" id=\"radio-";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 256
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            echo " (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ") ";
                        }
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 260
                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 263
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 265
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"product-option\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 267
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 268
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox\" for=\"checkbox-";
                        // line 269
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 270
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            // line 271
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                            echo "\" data-src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"responsive-img lazyload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 273
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" id=\"checkbox-";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 274
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            echo " (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ") ";
                        }
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 281
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 284
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 285
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 286
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"";
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " data-icon=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"";
                        }
                        echo ">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            echo "(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")";
                        }
                        // line 287
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 289
                    echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-option";
                    // line 290
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"text-bold";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 294
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 295
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">textsms</i>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 298
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 299
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 303
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 304
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">message</i>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 307
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 308
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"materialize-textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 312
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 313
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 314
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"button-upload";
                    // line 316
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons left\">cloud_upload</i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 318
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 319
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"file-path validate\" type=\"text\" placeholder=\"";
                    // line 322
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 327
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 328
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">event</i>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 331
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 332
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"datepicker\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 336
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 337
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">av_timer</i>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 340
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 341
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"timepicker\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 345
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 347
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 348
            echo "\t\t\t\t\t\t\t\t<h3 class=\"required\">";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<select name=\"recurring_id\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 351
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 352
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 353
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"recurring-description\"></div>
\t\t\t\t\t\t\t\t";
        }
        // line 359
        echo "\t\t\t\t\t\t\t\t<div class=\"input-number section\">
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-quantity\">";
        // line 360
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<i id=\"quantity-minus\" class=\"material-icons waves-effect waves-circle input-quantity-minus grey-text\">remove_circle_outline</i>
\t\t\t\t\t\t\t\t\t<input id=\"input-quantity\" type=\"number\" name=\"quantity\" value=\"";
        // line 362
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" min=\"";
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\">
\t\t\t\t\t\t\t\t\t<i id=\"quantity-plus\" class=\"material-icons waves-effect waves-circle input-quantity-plus\">add_circle_outline</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 365
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 366
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 367
            echo "\t\t\t\t\t\t\t\t<blockquote class=\"blockquote-note blue-grey lighten-5 center section\">";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</blockquote>
\t\t\t\t\t\t\t\t";
        }
        // line 369
        echo "\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t";
        // line 370
        if ((isset($context["add_cart"]) ? $context["add_cart"] : null)) {
            // line 371
            echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" class=\"btn btn-large waves-effect waves-light red href-underline width-max\"><i class=\"material-icons left\">add_shopping_cart</i>";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 373
            echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" class=\"btn btn-large href-underline width-max\" disabled=\"disabled\"><i class=\"material-icons left\">add_shopping_cart</i>";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t";
        }
        // line 375
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 376
        echo (isset($context["quickorder"]) ? $context["quickorder"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t<ul class=\"tabs href-underline\">
\t\t\t\t\t\t<li class=\"tab\"><a class=\"blue-grey-text text-darken-3 text-bold waves-effect waves-default active\" href=\"#description-product\" rel=\"nofollow\">";
        // line 383
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
\t\t\t\t\t\t";
        // line 384
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 385
            echo "\t\t\t\t\t\t<li class=\"tab\"><a class=\"blue-grey-text text-darken-3 text-bold waves-effect waves-default\" href=\"#tab-specification\" rel=\"nofollow\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 387
        echo "\t\t\t\t\t\t";
        if ((isset($context["customtabs"]) ? $context["customtabs"] : null)) {
            // line 388
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customtabs"]) ? $context["customtabs"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["customtab"]) {
                // line 389
                echo "\t\t\t\t\t\t<li class=\"tab\"><a class=\"blue-grey-text text-darken-3 text-bold waves-effect waves-default\" href=\"#tabcustom";
                echo $context["key"];
                echo "\" rel=\"nofollow\">";
                echo $this->getAttribute($context["customtab"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 391
            echo "\t\t\t\t\t\t";
        }
        // line 392
        echo "\t\t\t\t\t\t";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 393
            echo "\t\t\t\t\t\t<li class=\"tab\"><a class=\"blue-grey-text text-darken-3 text-bold waves-effect waves-default\" href=\"#tab-review\" rel=\"nofollow\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 395
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"description-product\" class=\"section description-product text-justify\" itemprop=\"description\">";
        // line 396
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
\t\t\t\t\t";
        // line 397
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 398
            echo "\t\t\t\t\t<div id=\"tab-specification\" class=\"section\">
\t\t\t\t\t\t<ul class=\"collapsible\" data-collapsible=\"accordion\">
\t\t\t\t\t\t";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 401
                echo "\t\t\t\t\t\t\t<li class=\"arrow-rotate\">
\t\t\t\t\t\t\t<div class=\"collapsible-header grey lighten-4 attribute-collapsible\"><span class=\"text-bold truncate\">";
                // line 402
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</span></div>
\t\t\t\t\t\t\t\t<div class=\"collapsible-body no-padding\">
\t\t\t\t\t\t\t\t\t<table class=\"bordered striped centered\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 407
                    echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-bold\">";
                    // line 408
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 409
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 412
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 420
        echo "\t\t\t\t\t";
        if ((isset($context["customtabs"]) ? $context["customtabs"] : null)) {
            // line 421
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customtabs"]) ? $context["customtabs"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["customtab"]) {
                // line 422
                echo "\t\t\t\t\t\t<div id=\"tabcustom";
                echo $context["key"];
                echo "\" class=\"section\">";
                echo $this->getAttribute($context["customtab"], "description", array());
                echo "</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 424
            echo "\t\t\t\t\t";
        }
        // line 425
        echo "\t\t\t\t\t";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 426
            echo "\t\t\t\t\t<div id=\"tab-review\" class=\"section\">
\t\t\t\t\t\t<form id=\"form-review\">
\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-flat waves-effect modal-trigger text-bold\" data-target=\"modal-review\">";
            // line 429
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "<i class=\"material-icons right\">mode_edit</i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"modal-review\" class=\"modal\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons modal-action modal-close waves-effect waves-circle close-icon\">close</i>
\t\t\t\t\t\t\t\t\t<h4>";
            // line 434
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h4>
\t\t\t\t\t\t\t\t\t";
            // line 435
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 436
                echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 439
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-name\">";
                // line 440
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" id=\"input-review\" class=\"materialize-textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-review\">";
                // line 447
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 448
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-input center\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-1\" type=\"radio\" name=\"rating\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-1\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-2\" type=\"radio\" name=\"rating\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-2\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-3\" type=\"radio\" name=\"rating\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-3\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-4\" type=\"radio\" name=\"rating\" value=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-4\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-5\" type=\"radio\" name=\"rating\" value=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-5\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 465
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 467
                echo "\t\t\t\t\t\t\t\t\t";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 469
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" class=\"btn waves-effect waves-light red\">";
            // line 471
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 478
        echo "\t\t\t\t\t<div class=\"post-footer grey lighten-4\">
\t\t\t\t\t\t";
        // line 479
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 480
            echo "\t\t\t\t\t\t\t<i class=\"material-icons\">local_offer</i>:&nbsp;
\t\t\t\t\t\t\t";
            // line 481
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 482
                echo "\t\t\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    // line 483
                    echo "\t\t\t\t\t\t\t\t<a class=\"chip waves-effect waves-default\" href=\"";
                    echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array()), " ", "%20");
                    echo "\" rel=\"nofollow\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
\t\t\t\t\t\t\t\t";
                } else {
                    // line 485
                    echo "\t\t\t\t\t\t\t\t<a class=\"chip waves-effect waves-default\" href=\"";
                    echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array()), " ", "%20");
                    echo "\" rel=\"nofollow\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 487
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 488
            echo "\t\t\t\t\t\t";
        }
        // line 489
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 492
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t\t";
        // line 494
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 495
            echo "\t\t<section class=\"section\">
\t\t\t<h3>";
            // line 496
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
\t\t\t<div class=\"row slick-goods\">
\t\t\t\t";
            // line 498
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 499
                echo "\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t<div class=\"card sticky-action large hoverable href-underline\">
\t\t\t\t\t\t";
                // line 501
                if ($this->getAttribute($context["product"], "labels", array())) {
                    // line 502
                    echo "\t\t\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t\t\t";
                    // line 503
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 504
                        echo "\t\t\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                        echo $this->getAttribute($context["label"], "color", array());
                        echo " ";
                        echo $this->getAttribute($context["label"], "color_text", array());
                        echo "\">";
                        echo $this->getAttribute($context["label"], "name", array());
                        echo "</span></li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 506
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                // line 508
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo "<span class=\"white-text badge red lighten-1 percent\">";
                    echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
                    echo "&nbsp;";
                    echo $this->getAttribute($context["product"], "percent_discount", array());
                    echo "%</span>";
                }
                // line 509
                echo "\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle close-icon activator\">more_vert</i>
\t\t\t\t\t\t\t<a href=\"";
                // line 511
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img class=\"responsive-img lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content center-align\">
\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 514
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"grey-text text-darken-4\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-action center-align grey lighten-5\">
\t\t\t\t\t\t\t";
                // line 517
                if ($this->getAttribute($context["product"], "add_cart", array())) {
                    // line 518
                    echo "\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large waves-effect waves-light red add-cart\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t";
                } else {
                    // line 520
                    echo "\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large add-cart\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t";
                }
                // line 522
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 523
                    echo "\t\t\t\t\t\t\t";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 524
                        echo "\t\t\t\t\t\t\t<span class=\"card-price\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 526
                        echo "\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t<span class=\"card-price red-text text-darken-2\">";
                        // line 527
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 529
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 530
                        echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 532
                    echo "\t\t\t\t\t\t\t";
                }
                // line 533
                echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<span class=\"grey lighten-5\">
\t\t\t\t\t\t\t\t\t";
                // line 536
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 537
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 538
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 539
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 541
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 543
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 544
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 545
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t";
                }
                // line 551
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                // line 553
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"btn waves-effect waves-light red width-max\">";
                echo (isset($context["text_more_detailed"]) ? $context["text_more_detailed"] : null);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 556
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"grey-text text-darken-4\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a><i class=\"material-icons waves-effect waves-circle close-icon\">close</i></span>
\t\t\t\t\t\t\t<p>";
                // line 557
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 562
            echo "\t\t\t</div>
\t\t</section>
\t\t";
        }
        // line 565
        echo "\t\t";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t</div>
</main>
<aside>
\t";
        // line 569
        echo (isset($context["sizechart"]) ? $context["sizechart"] : null);
        echo "
\t<ul id=\"side-share\" class=\"sidenav href-underline\">
\t\t<li><a class=\"waves-effect waves-default\" href=\"//vk.com/share.php?url=";
        // line 571
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"vk\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M7.828 12.526h.957s.288-.032.436-.19c.14-.147.14-.42.14-.42s-.02-1.284.58-1.473c.59-.187 1.34 1.24 2.14 1.788.61.42 1.07.33 1.07.33l2.14-.03s1.12-.07.59-.95c-.04-.07-.3-.65-1.58-1.84-1.34-1.24-1.16-1.04.45-3.19.98-1.31 1.38-2.11 1.25-2.45-.11-.32-.84-.24-.84-.24l-2.4.02s-.18-.02-.31.06-.21.26-.21.26-.38 1.02-.89 1.88C10.27 7.9 9.84 8 9.67 7.88c-.403-.26-.3-1.053-.3-1.62 0-1.76.27-2.5-.52-2.69-.26-.06-.454-.1-1.123-.11-.86-.01-1.585.006-1.996.207-.27.135-.48.434-.36.45.16.02.52.098.71.358.25.337.24 1.09.24 1.09s.14 2.077-.33 2.335c-.33.174-.77-.187-1.73-1.837-.49-.84-.86-1.78-.86-1.78s-.07-.17-.2-.27c-.15-.11-.37-.15-.37-.15l-2.29.02s-.34.01-.46.16c-.11.13-.01.41-.01.41s1.79 4.19 3.82 6.3c1.86 1.935 3.97 1.81 3.97 1.81z\"/></svg></span>VK</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//www.facebook.com/sharer.php?u=";
        // line 572
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"facebook\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0\" fill-rule=\"nonzero\"/></svg></span>Facebook</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//plus.google.com/share?url=";
        // line 573
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"googleplus\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M5.09 7.273v1.745h2.89c-.116.75-.873 2.197-2.887 2.197-1.737 0-3.155-1.44-3.155-3.215S3.353 4.785 5.09 4.785c.99 0 1.652.422 2.03.786l1.382-1.33c-.887-.83-2.037-1.33-3.41-1.33C2.275 2.91 0 5.19 0 8s2.276 5.09 5.09 5.09c2.94 0 4.888-2.065 4.888-4.974 0-.334-.036-.59-.08-.843H5.09zm10.91 0h-1.455V5.818H13.09v1.455h-1.454v1.454h1.455v1.455h1.46V8.727H16\"/></svg></span>Google+</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=";
        // line 574
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"odnoklassniki\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M9.67 11.626c.84-.19 1.652-.524 2.4-.993.564-.356.734-1.103.378-1.668-.356-.566-1.102-.737-1.668-.38-1.692 1.063-3.87 1.063-5.56 0-.566-.357-1.313-.186-1.668.38-.356.566-.186 1.312.38 1.668.746.47 1.556.802 2.397.993l-2.31 2.31c-.48.47-.48 1.237 0 1.71.23.236.54.354.85.354.31 0 .62-.118.85-.354L8 13.376l2.27 2.27c.47.472 1.237.472 1.71 0 .472-.473.472-1.24 0-1.71l-2.31-2.31zM8 8.258c2.278 0 4.13-1.852 4.13-4.128C12.13 1.852 10.277 0 8 0S3.87 1.852 3.87 4.13c0 2.276 1.853 4.128 4.13 4.128zM8 2.42c-.942 0-1.71.767-1.71 1.71 0 .942.768 1.71 1.71 1.71.943 0 1.71-.768 1.71-1.71 0-.943-.767-1.71-1.71-1.71z\"/></svg></span>Odnoklassniki</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//twitter.com/share?url=";
        // line 575
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"twitter\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z\" fill-rule=\"nonzero\"/></svg></span>Twitter</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//telegram.me/share/url?url=";
        // line 576
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\">
\t\t<span class=\"side-share__item\"><svg class=\"telegram\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M12.793 10.69c.57-1.56 2.66-7.49 2.994-9.044.38-1.76-.414-1.93-2.22-1.34-1.805.59-6.435 2.305-7.215 2.582-.78.277-4.573 1.552-5.36 1.932-1.606.862-.825 2.177.97 2.86 5.37 2.577 3.845 1.264 6.242 6.032.493 1.218 1.656 3.293 2.77 1.724.586-.892 1.37-3.52 1.82-4.747z\" fill-rule=\"nonzero\"/></svg></span>Telegram</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"whatsapp://send?text=";
        // line 578
        echo twig_urlencode_filter((isset($context["heading_title"]) ? $context["heading_title"] : null), true);
        echo " ";
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" data-action=\"share/whatsapp/share\" rel=\"nofollow\"><span class=\"side-share__item\"><svg class=\"whatsapp\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M11.665 9.588c-.2-.1-1.177-.578-1.36-.644-.182-.067-.315-.1-.448.1-.132.197-.514.643-.63.775-.116.13-.232.14-.43.05-.2-.1-.842-.31-1.602-.99-.592-.53-.99-1.18-1.107-1.38-.116-.2-.013-.31.087-.41.09-.09.2-.23.3-.35.098-.12.13-.2.198-.33.066-.14.033-.25-.017-.35-.05-.1-.448-1.08-.614-1.47-.16-.39-.325-.34-.448-.34-.115-.01-.248-.01-.38-.01-.134 0-.35.05-.532.24-.182.2-.696.68-.696 1.65s.713 1.91.812 2.05c.1.13 1.404 2.13 3.4 2.99.476.2.846.32 1.136.42.476.15.91.13 1.253.08.383-.06 1.178-.48 1.344-.95.17-.47.17-.86.12-.95-.05-.09-.18-.14-.38-.23M8.04 14.5h-.01c-1.18 0-2.35-.32-3.37-.92l-.24-.143-2.5.65.67-2.43-.16-.25c-.66-1.05-1.01-2.26-1.01-3.506 0-3.63 2.97-6.59 6.628-6.59 1.77 0 3.43.69 4.68 1.94 1.25 1.24 1.94 2.9 1.94 4.66-.003 3.63-2.973 6.59-6.623 6.59M13.68 2.3C12.16.83 10.16 0 8.03 0 3.642 0 .07 3.556.067 7.928c0 1.397.366 2.76 1.063 3.964L0 16l4.223-1.102c1.164.63 2.474.964 3.807.965h.004c4.39 0 7.964-3.557 7.966-7.93 0-2.117-.827-4.11-2.33-5.608\"/></svg></span>WhatsApp</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"viber://forward?text=";
        // line 579
        echo twig_urlencode_filter((isset($context["heading_title"]) ? $context["heading_title"] : null), true);
        echo " ";
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" rel=\"nofollow\">
\t\t<span class=\"side-share__item\"><svg class=\"viber\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M13.874 1.56C13.476 1.194 11.87.027 8.29.01c0 0-4.22-.253-6.277 1.634C.868 2.79.465 4.464.423 6.544.38 8.62.325 12.514 4.08 13.57h.003l-.003 1.612s-.023.652.406.785c.52.16.824-.336 1.32-.87.273-.293.648-.724.932-1.054 2.567.216 4.542-.277 4.766-.35.518-.17 3.45-.544 3.928-4.438.492-4.015-.238-6.553-1.558-7.698zm.435 7.408c-.41 3.25-2.79 3.457-3.22 3.597-.19.06-1.93.492-4.11.35 0 0-1.63 1.96-2.13 2.47-.08.08-.18.11-.24.096-.09-.02-.11-.12-.11-.27l.01-2.67c-.01 0 0 0 0 0-3.18-.89-2.99-4.2-2.95-5.94.03-1.73.36-3.15 1.33-4.11C4.63.91 8.22 1.15 8.22 1.15c3.028.01 4.48.923 4.815 1.23 1.116.955 1.685 3.243 1.27 6.595zM5.16 3.32c.162 0 .307.073.42.207.002.002.387.464.553.69.157.213.367.553.474.743.19.34.07.688-.115.832l-.377.3c-.19.152-.167.436-.167.436s.56 2.105 2.64 2.635c0 0 .283.026.436-.164l.3-.38c.142-.19.49-.31.83-.12.19.1.53.31.744.47.226.16.688.55.69.55.22.18.27.46.12.74v.01c-.154.27-.36.52-.622.76h-.005c-.21.18-.42.28-.63.3-.02 0-.05.01-.09 0-.09 0-.18-.02-.27-.04v-.01c-.32-.09-.85-.32-1.73-.81-.57-.32-1.05-.64-1.46-.97-.21-.17-.43-.36-.65-.58L6.2 8.9l-.02-.02-.02-.02c-.22-.22-.41-.44-.58-.653-.32-.406-.64-.885-.96-1.46-.49-.88-.72-1.41-.81-1.73H3.8c-.03-.09-.05-.18-.04-.27-.01-.04 0-.07 0-.093.02-.2.126-.41.305-.63h.003c.237-.26.492-.47.764-.622.11-.06.22-.09.32-.09h.01zm2.73-.456h.078l.05.002h.013l.06.003h.34l.09.01h.05l.1.01h.02l.07.01h.01l.05.01c.03 0 .05.01.07.01h.06l.05.02.04.01.04.01.02.01h.03l.03.01h.02l.05.01.03.01.03.01.04.01.02.01c.02 0 .04.01.06.01l.03.01.03.01.08.03.04.02.09.04.03.01.03.01.06.03.04.01.02.01.05.02.02.01.04.02.03.01.03.02.04.02.03.02.02.01.04.02.03.02.05.03.03.01.05.03.01.01.03.02.06.05.03.02.03.02.02.01.03.02.05.05.04.03.03.02.01.01.02.01.05.04.03.03.02.02.03.02.03.02.02.01.08.08.04.04.09.09.02.02c.01.01.03.03.04.05l.02.02.11.13.03.04c.01.01.01.02.02.02l.06.09.03.03.06.08.05.08.03.06.04.07.03.06.01.02.02.04.05.1.05.1.02.05c.04.09.07.18.11.28.05.13.09.27.12.42.03.11.05.21.07.32l.02.18.03.2c.01.08.02.17.02.25.01.08.01.16.01.24v.17c0 .01-.005.02-.01.03-.01.02-.02.03-.04.05-.014.01-.033.03-.053.03-.02.01-.04.01-.06.01h-.03c-.02 0-.04-.01-.06-.02-.02-.01-.04-.02-.05-.04-.01-.02-.03-.04-.04-.06-.01-.02-.02-.04-.02-.06V6.9c-.01-.14-.02-.284-.04-.426-.01-.098-.03-.19-.04-.28 0-.05-.01-.098-.02-.14l-.02-.1-.024-.09-.01-.06-.03-.1c-.02-.08-.05-.16-.08-.24-.02-.06-.04-.11-.07-.16l-.02-.05-.09-.18-.02-.03c-.04-.09-.09-.18-.15-.26l-.03-.05H11l-.043-.06c-.036-.06-.076-.11-.12-.16l-.083-.1-.01-.01-.03-.038-.024-.03-.05-.05-.01-.02-.047-.04-.03-.03-.055-.05-.027-.025-.03-.03-.01-.01c-.01-.01-.03-.03-.05-.04L10.33 4l-.02-.01-.04-.03-.05-.04-.03-.024-.02-.01-.04-.036c0-.01-.01-.01-.02-.01l-.02-.02-.01-.01V3.8l-.02-.01-.04-.025-.03-.02-.05-.03-.04-.03-.02-.01-.02-.01H9.8l-.013-.01-.044-.023-.005-.01-.02-.01-.03-.015H9.68l-.03-.01-.017-.01-.03-.01-.007-.007-.02-.01-.035-.02-.02-.01-.06-.02-.05-.02-.09-.01-.03-.02c-.01-.006-.02-.01-.03-.01l-.02-.01c-.02-.007-.03-.01-.05-.02l-.02-.01h-.02l-.04-.02-.02-.01-.03-.01H9c-.005 0-.012-.003-.02-.005h-.06l-.03-.01h-.01l-.03-.01h-.027c-.017-.01-.03-.01-.047-.01l-.006-.01-.04-.01c-.02-.01-.037-.01-.056-.01l-.03-.01-.033-.01-.03-.01-.04-.01H8.5l-.12-.018h-.06l-.078-.01h-.05l-.046-.006h-.02l-.036-.01H7.9l-.007-.01h-.04c-.02 0-.043-.01-.06-.02-.02-.01-.04-.02-.054-.04l-.02-.03c-.02-.02-.02-.04-.03-.06-.01-.02-.01-.04-.01-.06 0-.02 0-.04.01-.06.01-.02.02-.04.04-.05.01-.02.03-.03.05-.04.02-.01.04-.02.06-.02h.04zm.37 1.05l.024.002.04.004c.006 0 .012 0 .02.002.015 0 .03.003.05.004l.04.005.016.01.03.01.032.01.03.01h.02l.028.01.047.01.037.01.018.01h.048l.08.02.03.01.03.01.03.01s.01 0 .01.01l.03.01.03.01.03.01c.01 0 .02.01.03.01.005 0 .01.01.017.01l.043.02h.02l.06.02.033.02.03.02.073.03.04.01.02.02c.03.01.06.03.09.04l.032.02.032.02.033.02c.03.02.054.03.08.05l.02.01.027.02.015.01.05.03.025.02.043.03.02.01.02.01.03.02.04.03c.01.01.015.01.023.02.006.01.01.01.017.02l.022.02.024.02.02.02.03.03.02.02.01.01.06.06.01.01c0 .01.01.02.02.02l.01.01.03.03.02.03.02.02.03.04.03.03.06.08.01.02.04.05.01.02.01.02.01.02.01.02c.01.01.01.02.02.04l.03.05.01.01.02.04.02.03c.01.01.01.02.02.03l.02.03.02.04.02.04.01.03c.01.03.03.05.04.08 0 .01.01.02.01.03l.03.08.04.13c0 .01.01.03.01.04l.03.09.03.12.03.16c.01.05.01.09.02.14.01.08.02.16.02.24l.01.14v.11c0 .01 0 .02-.01.03L10.9 7c-.02.015-.03.03-.05.04-.02.01-.04.02-.06.027-.02.01-.05.01-.07.01-.02 0-.04-.01-.06-.02-.01 0-.02-.01-.03-.014-.02-.01-.04-.026-.05-.044-.02-.02-.03-.04-.03-.06l-.01-.03V6.7c0-.088-.01-.17-.02-.256-.01-.09-.03-.19-.05-.28-.02-.06-.03-.12-.05-.174l-.02-.06-.02-.05-.01-.02-.03-.08-.03-.06-.05-.1-.046-.08v-.01l-.02-.032-.02-.025-.03-.05-.03-.04-.06-.08c-.03-.04-.06-.08-.094-.118-.01-.01-.02-.02-.02-.03l-.02-.02-.01-.01-.02-.01-.02-.018V5l-.08-.076-.05-.045v-.01l-.02-.02-.025-.02-.01-.01c0-.01-.01-.01-.02-.01l-.03-.01-.01-.01-.04-.03-.01-.01-.01-.01c-.008-.01-.015-.01-.02-.01l-.04-.03-.01-.01-.04-.02-.007-.01-.03-.02-.02-.01-.02-.02-.02-.02h-.01c-.02-.02-.04-.03-.07-.04l-.03-.02-.02-.01-.01-.01-.03-.02-.03-.01-.04-.02-.03-.01-.01-.01-.037-.01v-.01l-.06-.02-.04-.02-.02-.01h-.04c-.02-.01-.03-.01-.05-.02H8.8l-.03-.01h-.03l-.03-.01-.02-.01h-.04l-.04-.01-.02-.01h-.11l-.046-.01H8.2l-.03-.01c-.02-.01-.04-.02-.06-.04-.01-.02-.03-.04-.04-.06-.01-.02-.02-.04-.02-.06v-.06c.003-.03.01-.05.02-.07.005-.01.01-.02.02-.03.012-.02.03-.04.05-.05.01-.01.02-.01.03-.02.02-.01.04-.01.06-.01h.04zM8.562 5c.01 0 .02 0 .03.002.01 0 .02 0 .03.002l.034.003c.07.006.142.016.212.03l.07.016.017.005.076.02.04.013.03.01c.03.01.06.03.09.04l.01.01.04.02.06.03.02.01c.01.01.02.01.03.02.01.01.03.02.04.03.04.02.07.05.1.07l.07.06.06.06.04.05.02.02.02.02.03.04.06.09.05.09.04.08.03.07c.03.07.04.13.06.2.02.06.03.13.04.19l.01.1.01.09v.04c0 .03-.01.05-.02.07-.01.02-.03.05-.05.06-.02.02-.04.03-.07.04-.02.01-.04.01-.06.01-.02 0-.04 0-.06-.01l-.07-.03c-.02-.02-.04-.03-.06-.06-.01-.02-.02-.04-.03-.07v-.11l-.01-.07-.01-.08-.01-.07-.01-.04c0-.01-.01-.03-.01-.04-.02-.08-.06-.16-.1-.24l-.04-.04-.03-.04-.03-.03-.01-.02-.05-.04-.04-.04-.04-.03c-.01-.01-.02-.01-.04-.02l-.06-.04-.04-.02-.02-.01h-.01L9 5.54l-.06-.02-.06-.01h-.05L8.8 5.5l-.024-.005h-.03l-.04-.01h-.17l-.01-.05H8.5c-.02-.003-.036-.01-.053-.02-.023-.014-.043-.03-.06-.053-.012-.02-.023-.04-.03-.06-.005-.02-.008-.04-.008-.06 0-.025 0-.05.01-.076s.02-.047.04-.066l.04-.03c.02-.01.04-.02.06-.02L8.54 5h.02z\"/></svg></span>Viber</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//web.skype.com/share?url=";
        // line 581
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\">
\t\t<svg class=\"skype\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\">
\t\t<path d=\"M8.035 12.6c-2.685 0-3.885-1.322-3.885-2.313 0-.51.374-.865.89-.865 1.15 0 .85 1.653 2.995 1.653 1.096 0 1.703-.597 1.703-1.208 0-.368-.18-.775-.904-.954l-2.387-.597C4.524 7.833 4.175 6.79 4.175 5.812c0-2.034 1.91-2.798 3.704-2.798 1.65 0 3.6.916 3.6 2.136 0 .523-.46.827-.97.827-.98 0-.8-1.36-2.78-1.36-.98 0-1.53.444-1.53 1.08 0 .636.77.84 1.44.993l1.76.392c1.93.433 2.42 1.566 2.42 2.633 0 1.652-1.27 2.886-3.82 2.886m7.4-3.26l-.02.09-.03-.16c.01.03.03.05.04.08.08-.45.12-.91.12-1.37 0-1.02-.2-2.01-.6-2.95-.38-.9-.93-1.71-1.62-2.4-.7-.69-1.5-1.24-2.4-1.62C10.01.59 9.02.39 8 .39c-.48 0-.964.047-1.43.137l.08.04-.16-.023.08-.016C5.927.183 5.205 0 4.472 0 3.278 0 2.155.466 1.31 1.313.465 2.16 0 3.286 0 4.483c0 .763.195 1.512.563 2.175l.013-.083.028.16-.04-.077c-.076.43-.115.867-.115 1.305 0 1.022.2 2.014.59 2.948.38.91.92 1.72 1.62 2.41.69.7 1.5 1.24 2.4 1.63.93.4 1.92.6 2.94.6.44 0 .89-.04 1.32-.12l-.08-.04.16.03-.09.02c.67.38 1.42.58 2.2.58 1.19 0 2.31-.46 3.16-1.31.84-.84 1.31-1.97 1.31-3.17 0-.76-.2-1.51-.57-2.18\" fill-rule=\"nonzero\"/>
\t\t</svg></span>Skype</a></li>
\t</ul>
</aside>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t// Wishlist button
\tvar wishlistBtn = \$('#wishlist-btn'),
\t\toriginalColor = wishlistBtn.css('color'),
\t\toriginalText = wishlistBtn.text();

\twishlistBtn.click(function(){
\t\t\$(this).text(\"favorite\").addClass('red-text');
\t\toriginalText = 'favorite';
\t}).hover(function() {
\t\t\$(this).text(\"favorite\").css('color','#ef5350').addClass('scale');
\t}, function() {
\t\t\$(this).text(originalText).css('color',originalColor).removeClass('scale');
\t});

\t// Share side
\t\$('#side-share').sidenav({edge:'right'});

\t";
        // line 606
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 607
            echo "\t// Photo slider
\t\$('.slider-for').not('.slick-initialized').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tarrows: true,
\t\tfade: true,
\t\tmobileFirst: true,
\t\tasNavFor: '.slider-nav'
\t});
\t\$('.slider-nav').not('.slick-initialized').slick({
\t\tslidesToShow: 4,
\t\tslidesToScroll: 4,
\t\tasNavFor: '.slider-for',
\t\tcenterMode: false,
\t\tarrows: false,
\t\tinfinite: false,
\t\tfocusOnSelect: true
\t});
\t";
        }
        // line 626
        echo "\t";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 627
            echo "\t// Goods slider
\t\$('.slick-goods').not('.slick-initialized').slick({
\t\tdots: true,
\t\tinfinite: true,
\t\tspeed: 300,
\t\tautoplay: true,
\t\tautoplaySpeed: 2000,
\t\tslidesToShow: 3,
\t\tslidesToScroll: 3,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 921,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t\tslidesToScroll: 2
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 601,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tslidesToScroll: 1
\t\t\t\t}
\t\t\t}
\t\t]
\t});
\t";
        }
        // line 654
        echo "
\t// Reviews
\tvar modalReview = \$('#modal-review'),
\t\tinputName = \$('#input-name'),
\t\tinputReview = \$('#input-review'),
\t\treview = \$('#review');

\treview.delegate('.pagination a', 'click', function(e) {
\t\te.preventDefault();
\t\treview.load(this.href);
\t});
\t\$('.rating-input label').hover(function() {
\t\t\$(this).addClass('rating-input-active');
\t\t\$(this).prevAll('.rating-input label').addClass('rating-input-active');
\t}, function () {
\t\t\$(this).removeClass('rating-input-active');
\t\t\$(this).prevAll('.rating-input label').removeClass('rating-input-active');
\t});
\t\$('.rating-input label').click(function() {
\t\t\$('.rating-input label').each(function() {
\t\t\t\$(this).removeClass('rating-input-checked');
\t\t\t\$(this).prevAll('.rating-input label').removeClass('rating-input-checked');
\t\t});
\t\t\$(this).addClass('rating-input-checked');
\t\t\$(this).prevAll('.rating-input label').addClass('rating-input-checked');
\t});
\treview.load('index.php?route=product/product/review&product_id=";
        // line 680
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');
\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 683
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'], classes: 'toast-warning'});
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">check</i>' + json['success'], classes: 'toast-success'});
\t\t\t\t\tinputName.val('');
\t\t\t\t\tinputName.parent().find('label').removeClass('active');
\t\t\t\t\tinputReview.val('');
\t\t\t\t\tM.textareaAutoResize(inputReview);
\t\t\t\t\tinputReview.parent().find('label').removeClass('active');
\t\t\t\t\tmodalReview.modal('close');
\t\t\t\t}
\t\t\t}
\t\t});
\t\tgrecaptcha.reset();
\t});
\t";
        // line 704
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 705
            echo "\t\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\t\ttype: 'post',
\t\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#recurring-description').html('');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#recurring-description').html('<blockquote class=\"blockquote-note blue-grey lighten-5 center section\">' + json['success'] + '</blockquote>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t";
        }
        // line 722
        echo "\t";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 723
            echo "\t\$('div[id^=\\'button-upload\\']').on('click', function() {
\t\tvar node = this;
\t\t\$('#form-upload').remove();
\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
            // line 726
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "</p></div></div></div></div>');
\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}
\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t\t\$('#modal-loading').modal({
\t\t\t\t\tdismissible: false,
\t\t\t\t\topacity: .7,
\t\t\t\t\tendingTop: '40%',
\t\t\t\t}).modal('open');
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#modal-loading').modal('close').remove();
\t\t\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>'+json[\"error\"]+'</span>', classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\$('#modal-loading').modal('close').remove();
\t\t\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">check</i>'+json[\"success\"]+'</span>', classes: 'toast-success'});
\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});

\t\$('.datepicker').datepicker({
\t\tformat: 'yyyy-mm-dd',
\t\tfirstDay: ";
            // line 768
            echo (isset($context["first_day"]) ? $context["first_day"] : null);
            echo ",
\t\ti18n: {
\t\t\tclear: '";
            // line 770
            echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
            echo "',
\t\t\ttoday: '";
            // line 771
            echo (isset($context["button_date_today"]) ? $context["button_date_today"] : null);
            echo "',
\t\t\tdone: '";
            // line 772
            echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
            echo "',
\t\t\tmonths: ['";
            // line 773
            echo (isset($context["text_months_full_january"]) ? $context["text_months_full_january"] : null);
            echo "', '";
            echo (isset($context["text_months_full_february"]) ? $context["text_months_full_february"] : null);
            echo "', '";
            echo (isset($context["text_months_full_march"]) ? $context["text_months_full_march"] : null);
            echo "', '";
            echo (isset($context["text_months_full_april"]) ? $context["text_months_full_april"] : null);
            echo "', '";
            echo (isset($context["text_months_full_may"]) ? $context["text_months_full_may"] : null);
            echo "', '";
            echo (isset($context["text_months_full_june"]) ? $context["text_months_full_june"] : null);
            echo "', '";
            echo (isset($context["text_months_full_july"]) ? $context["text_months_full_july"] : null);
            echo "', '";
            echo (isset($context["text_months_full_august"]) ? $context["text_months_full_august"] : null);
            echo "', '";
            echo (isset($context["text_months_full_september"]) ? $context["text_months_full_september"] : null);
            echo "', '";
            echo (isset($context["text_months_full_october"]) ? $context["text_months_full_october"] : null);
            echo "', '";
            echo (isset($context["text_months_full_november"]) ? $context["text_months_full_november"] : null);
            echo "', '";
            echo (isset($context["text_months_full_december"]) ? $context["text_months_full_december"] : null);
            echo "'],
\t\t\tmonthsShort: ['";
            // line 774
            echo (isset($context["text_months_short_january"]) ? $context["text_months_short_january"] : null);
            echo "', '";
            echo (isset($context["text_months_short_february"]) ? $context["text_months_short_february"] : null);
            echo "', '";
            echo (isset($context["text_months_short_march"]) ? $context["text_months_short_march"] : null);
            echo "', '";
            echo (isset($context["text_months_short_april"]) ? $context["text_months_short_april"] : null);
            echo "', '";
            echo (isset($context["text_months_short_may"]) ? $context["text_months_short_may"] : null);
            echo "', '";
            echo (isset($context["text_months_short_june"]) ? $context["text_months_short_june"] : null);
            echo "', '";
            echo (isset($context["text_months_short_july"]) ? $context["text_months_short_july"] : null);
            echo "', '";
            echo (isset($context["text_months_short_august"]) ? $context["text_months_short_august"] : null);
            echo "', '";
            echo (isset($context["text_months_short_september"]) ? $context["text_months_short_september"] : null);
            echo "', '";
            echo (isset($context["text_months_short_october"]) ? $context["text_months_short_october"] : null);
            echo "', '";
            echo (isset($context["text_months_short_november"]) ? $context["text_months_short_november"] : null);
            echo "', '";
            echo (isset($context["text_months_short_december"]) ? $context["text_months_short_december"] : null);
            echo "'],
\t\t\tweekdays: ['";
            // line 775
            echo (isset($context["text_weekdays_full_sunday"]) ? $context["text_weekdays_full_sunday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_full_monday"]) ? $context["text_weekdays_full_monday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_full_tuesday"]) ? $context["text_weekdays_full_tuesday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_full_wednesday"]) ? $context["text_weekdays_full_wednesday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_full_thursday"]) ? $context["text_weekdays_full_thursday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_full_friday"]) ? $context["text_weekdays_full_friday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_full_saturday"]) ? $context["text_weekdays_full_saturday"] : null);
            echo "'],
\t\t\tweekdaysShort: ['";
            // line 776
            echo (isset($context["text_weekdays_short_sunday"]) ? $context["text_weekdays_short_sunday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_monday"]) ? $context["text_weekdays_short_monday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_tuesday"]) ? $context["text_weekdays_short_tuesday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_wednesday"]) ? $context["text_weekdays_short_wednesday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_thursday"]) ? $context["text_weekdays_short_thursday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_friday"]) ? $context["text_weekdays_short_friday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_saturday"]) ? $context["text_weekdays_short_saturday"] : null);
            echo "'],
\t\t\tweekdaysAbbrev: ['";
            // line 777
            echo (isset($context["text_weekdays_short_sunday"]) ? $context["text_weekdays_short_sunday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_monday"]) ? $context["text_weekdays_short_monday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_tuesday"]) ? $context["text_weekdays_short_tuesday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_wednesday"]) ? $context["text_weekdays_short_wednesday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_thursday"]) ? $context["text_weekdays_short_thursday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_friday"]) ? $context["text_weekdays_short_friday"] : null);
            echo "', '";
            echo (isset($context["text_weekdays_short_saturday"]) ? $context["text_weekdays_short_saturday"] : null);
            echo "']
\t\t}
\t});

\t\$('.timepicker').timepicker({
\t\tdefaultTime: 'now',
\t\tautoclose: true,
\t\ti18n: {
\t\t\tclear: '";
            // line 785
            echo (isset($context["button_datetime_clear"]) ? $context["button_datetime_clear"] : null);
            echo "',
\t\t\tcancel: '";
            // line 786
            echo (isset($context["button_datetime_done"]) ? $context["button_datetime_done"] : null);
            echo "',
\t\t\tdone: '";
            // line 787
            echo (isset($context["button_time_done"]) ? $context["button_time_done"] : null);
            echo "',
\t\t\ttwelvehour: ";
            // line 788
            echo (isset($context["twelve_hour"]) ? $context["twelve_hour"] : null);
            echo "
\t\t}
\t});
\t";
        }
        // line 792
        echo "
\t// Add to cart
\tvar addCart = \$('#button-cart'),
\t\tbuttonCart = \$('#cart'),
\t\tcartTotal = \$('#cart-total'),
\t\tmodalCartContent = \$('#modal-cart-content');

\taddCart.on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'number\\'], #product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'file\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>' + json[\"error\"][\"option\"][i] + '</span>', classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>' + json[\"error\"][\"recurring\"] + '</span>', classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">check</i>' + json['success'] + '</span>', classes: 'toast-success'});
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$('#cart-total').html(json['total']);
\t\t\t\t\t}, 100);
\t\t\t\t\tbuttonCart.addClass('pulse');
\t\t\t\t\tcartTotal.addClass('pulse');
\t\t\t\t\tmodalCartContent.load('index.php?route=common/cart/info #modal-cart-list');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Update price
\t\$(\"#product input[type='checkbox']\").click(function() {changePrice();});
\t\$(\"#product input[type='radio']\").click(function() {changePrice();});
\t\$(\"#product select\").change(function() {changePrice();});

\tvar quantity = \$('#input-quantity'),
\t\tquantityMinus = \$('#quantity-minus'),
\t\tquantityPlus = \$('#quantity-plus'),
\t\tnewPrices = \$('.new-prices'),
\t\toldPrices = \$('.old-prices');

\tquantity.blur(function() {
\t\tif (quantity.val() < ";
        // line 844
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ") {
\t\t\tquantity.val(";
        // line 845
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ");
\t\t\tquantityMinus.addClass('grey-text');
\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>";
        // line 847
        echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
        echo "</span>', classes: 'toast-warning'});
\t\t\tchangePrice();
\t\t} else {
\t\t\tchangePrice();
\t\t\tif (quantity.val() > ";
        // line 851
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ") {
\t\t\t\tquantityMinus.removeClass('grey-text');
\t\t\t}
\t\t}
\t});

\tquantityMinus.click(function () {
\t\tvar count = parseInt(quantity.val()) - 1;
\t\tif (count < ";
        // line 859
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ") {
\t\t\tcount = ";
        // line 860
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ";
\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>";
        // line 861
        echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
        echo "</span>', classes: 'toast-warning'});
\t\t}
\t\tquantity.val(count);
\t\tquantity.change();
\t\tchangePrice();
\t\tif (quantity.val() == 1 || quantity.val() == ";
        // line 866
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ") {
\t\t\tquantityMinus.addClass('grey-text');
\t\t}

\t\treturn false;
\t});

\tquantityPlus.click(function () {
\t\tquantity.val(parseInt(quantity.val()) + 1);
\t\tquantity.change();
\t\tchangePrice();
\t\tif (quantity.val() > ";
        // line 877
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo ") {
\t\t\tquantityMinus.removeClass('grey-text');
\t\t}

\t\treturn false;
\t});

\tfunction changePrice() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/updatePrice&product_id=";
        // line 886
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#product input[name=\\'quantity\\'], #product select, #product input[type=\\'checkbox\\']:checked, #product input[type=\\'radio\\']:checked'),
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['new_price_found']) {
\t\t\t\t\tnewPrices.html(json['total_price']);
\t\t\t\t} else {
\t\t\t\t\toldPrices.html(json['total_price']);
\t\t\t\t}
\t\t\t}
\t\t});
\t}
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 902
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2258 => 902,  2239 => 886,  2227 => 877,  2213 => 866,  2205 => 861,  2201 => 860,  2197 => 859,  2186 => 851,  2179 => 847,  2174 => 845,  2170 => 844,  2116 => 792,  2109 => 788,  2105 => 787,  2101 => 786,  2097 => 785,  2074 => 777,  2058 => 776,  2042 => 775,  2016 => 774,  1990 => 773,  1986 => 772,  1982 => 771,  1978 => 770,  1973 => 768,  1928 => 726,  1923 => 723,  1920 => 722,  1901 => 705,  1899 => 704,  1875 => 683,  1869 => 680,  1841 => 654,  1812 => 627,  1809 => 626,  1788 => 607,  1786 => 606,  1758 => 581,  1751 => 579,  1745 => 578,  1740 => 576,  1736 => 575,  1732 => 574,  1728 => 573,  1724 => 572,  1720 => 571,  1715 => 569,  1707 => 565,  1702 => 562,  1691 => 557,  1685 => 556,  1677 => 553,  1673 => 551,  1665 => 545,  1662 => 544,  1656 => 543,  1652 => 541,  1648 => 539,  1645 => 538,  1640 => 537,  1638 => 536,  1633 => 533,  1630 => 532,  1622 => 530,  1619 => 529,  1614 => 527,  1609 => 526,  1603 => 524,  1600 => 523,  1597 => 522,  1593 => 520,  1585 => 518,  1583 => 517,  1575 => 514,  1561 => 511,  1557 => 509,  1548 => 508,  1544 => 506,  1531 => 504,  1527 => 503,  1524 => 502,  1522 => 501,  1518 => 499,  1514 => 498,  1509 => 496,  1506 => 495,  1504 => 494,  1499 => 492,  1494 => 489,  1491 => 488,  1485 => 487,  1477 => 485,  1469 => 483,  1466 => 482,  1462 => 481,  1459 => 480,  1457 => 479,  1454 => 478,  1444 => 471,  1440 => 469,  1434 => 467,  1429 => 465,  1409 => 448,  1405 => 447,  1395 => 440,  1391 => 439,  1386 => 436,  1384 => 435,  1380 => 434,  1372 => 429,  1367 => 426,  1364 => 425,  1361 => 424,  1350 => 422,  1345 => 421,  1342 => 420,  1337 => 417,  1327 => 412,  1318 => 409,  1314 => 408,  1311 => 407,  1307 => 406,  1300 => 402,  1297 => 401,  1293 => 400,  1289 => 398,  1287 => 397,  1283 => 396,  1280 => 395,  1274 => 393,  1271 => 392,  1268 => 391,  1257 => 389,  1252 => 388,  1249 => 387,  1243 => 385,  1241 => 384,  1237 => 383,  1227 => 376,  1224 => 375,  1218 => 373,  1212 => 371,  1210 => 370,  1207 => 369,  1201 => 367,  1199 => 366,  1195 => 365,  1187 => 362,  1182 => 360,  1179 => 359,  1173 => 355,  1162 => 353,  1158 => 352,  1154 => 351,  1147 => 348,  1144 => 347,  1141 => 346,  1135 => 345,  1126 => 341,  1116 => 340,  1111 => 337,  1108 => 336,  1099 => 332,  1089 => 331,  1084 => 328,  1081 => 327,  1073 => 322,  1065 => 319,  1061 => 318,  1056 => 316,  1045 => 314,  1042 => 313,  1039 => 312,  1030 => 308,  1020 => 307,  1015 => 304,  1012 => 303,  1003 => 299,  993 => 298,  988 => 295,  985 => 294,  972 => 290,  969 => 289,  962 => 287,  944 => 286,  940 => 285,  934 => 284,  930 => 282,  927 => 281,  922 => 278,  905 => 274,  896 => 273,  878 => 271,  876 => 270,  872 => 269,  869 => 268,  865 => 267,  856 => 265,  851 => 264,  848 => 263,  843 => 260,  826 => 256,  817 => 255,  799 => 253,  797 => 252,  793 => 251,  790 => 250,  786 => 249,  777 => 247,  772 => 246,  769 => 245,  765 => 244,  760 => 243,  758 => 242,  755 => 241,  751 => 239,  740 => 238,  734 => 237,  731 => 236,  728 => 235,  724 => 233,  718 => 230,  715 => 229,  712 => 228,  700 => 226,  695 => 225,  687 => 223,  684 => 222,  676 => 220,  674 => 219,  671 => 218,  669 => 217,  665 => 215,  655 => 213,  652 => 212,  644 => 210,  642 => 209,  633 => 208,  630 => 207,  619 => 204,  614 => 203,  609 => 202,  606 => 201,  598 => 199,  595 => 198,  583 => 196,  580 => 195,  572 => 193,  569 => 192,  561 => 190,  558 => 189,  550 => 187,  547 => 186,  539 => 184,  536 => 183,  528 => 181,  525 => 180,  517 => 178,  514 => 177,  506 => 175,  503 => 174,  495 => 172,  492 => 171,  482 => 169,  479 => 168,  469 => 166,  467 => 165,  462 => 162,  454 => 159,  451 => 158,  449 => 157,  445 => 155,  441 => 153,  438 => 152,  426 => 150,  424 => 149,  419 => 148,  417 => 147,  413 => 145,  407 => 143,  405 => 142,  401 => 141,  396 => 140,  393 => 139,  388 => 137,  384 => 136,  379 => 135,  374 => 133,  369 => 132,  366 => 131,  364 => 130,  356 => 125,  353 => 124,  350 => 123,  344 => 120,  338 => 117,  334 => 116,  331 => 115,  329 => 114,  326 => 113,  320 => 112,  316 => 110,  312 => 108,  309 => 107,  305 => 106,  302 => 105,  300 => 104,  293 => 100,  288 => 98,  280 => 95,  276 => 93,  268 => 91,  260 => 89,  258 => 88,  250 => 83,  246 => 81,  234 => 79,  228 => 77,  226 => 76,  219 => 75,  210 => 74,  206 => 72,  193 => 70,  189 => 69,  186 => 68,  184 => 67,  179 => 65,  173 => 63,  167 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% spaceless %}*/
/* <script type="application/ld+json">*/
/* {*/
/* 	"@context": "http://schema.org",*/
/* 	"@type": "BreadcrumbList",*/
/* 	"itemListElement": [*/
/* 	{% for key, breadcrumb in breadcrumbs %}*/
/* 		{% if key < breadcrumbs|length - 1 %}*/
/* 		{% if key == 0 %}*/
/* 		{% else %}*/
/* 		{*/
/* 			"@type": "ListItem",*/
/* 			"position": {{ key }},*/
/* 			"item": {*/
/* 				"@id": "{{ breadcrumb.href }}",*/
/* 				"name": "{{ breadcrumb.text }}"*/
/* 			}*/
/* 		},*/
/* 		{% endif %}*/
/* 		{% else %}*/
/* 		{*/
/* 			"@type": "ListItem",*/
/* 			"position": {{ key }},*/
/* 			"item": {*/
/* 				"@id": "{{ breadcrumb.href }}",*/
/* 				"name": "{{ breadcrumb.text }}"*/
/* 			}*/
/* 		}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	]*/
/* }*/
/* </script>*/
/* {% if column_left and column_right %}*/
/* 	{% set main, image, product_info = 's12 m12 l6', 's12 m6 l12', 's12 m6 l12' %}*/
/* {% elseif column_left or column_right %}*/
/* 	{% set main, image, product_info = 's12 l9', 's12 m6', 's12 m6' %}*/
/* {% else %}*/
/* 	{% set main, image, product_info = 's12', 's12 m6 xl5', 's12 m6 xl7' %}*/
/* {% endif %}*/
/* <main>*/
/* 	<div class="container">*/
/* 		<nav id="breadcrumbs" class="breadcrumb-wrapper transparent z-depth-0">*/
/* 			<span class="breadcrumb-blur hide-on-med-and-up"></span>*/
/* 			<div class="nav-wrapper breadcrumb-wrap href-underline">*/
/* 				{% for key, breadcrumb in breadcrumbs %}*/
/* 					{% if key < breadcrumbs|length - 1 %}*/
/* 						<a href="{{ breadcrumb.href }}" class="breadcrumb waves-effect black-text">{{ breadcrumb.text }}</a>*/
/* 					{% else %}*/
/* 						<span class="breadcrumb blue-grey-text text-darken-3">{{ breadcrumb.text }}</span>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</nav>*/
/* 		<div class="row">*/
/* 			{{ column_left }}*/
/* 			<div class="col {{ main }}" itemscope itemtype="http://schema.org/Product">*/
/* 				<meta itemprop="url" content="{{ share }}">*/
/* 				{% if product_image %}*/
/* 				<meta itemprop="image" content="{{ images.0.popup }}">*/
/* 				{% endif %}*/
/* 				{{ content_top }}*/
/* 				<div class="row">*/
/* 					<div class="col {{ image }}">*/
/* 						<div class="card-panel center img-block">*/
/* 							{% if labels %}*/
/* 							<ul class="labels-wrap">*/
/* 								{% for label in labels %}*/
/* 								<li class="labels-wrap__item"><span class="waves-effect badge {{ label.color }} {{ label.color_text }}">{{ label.name }}</span></li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 							{% endif %}*/
/* 							{% if special %}<span class="white-text badge red lighten-1 product-card-badge-percent z-depth-1">{{ text_percent }} <b>{{ percent_discount }}%</b></span>{% endif %}*/
/* 							<span class="{{ stock_color }} white-text badge availability">{{ stock }}</span>*/
/* 							{% if images %}*/
/* 								{{ photoswipe_module }}*/
/* 							{% else %}*/
/* 								<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ placeholder }}" title="{{ heading_title }}" alt="{{ heading_title }}">*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col {{ product_info }}">*/
/* 						<div class="card-panel product-info">*/
/* 							<div class="row">*/
/* 								<ul class="user-btn">*/
/* 									<li>*/
/* 										{% if wishlist_product %}*/
/* 										<i id="wishlist-btn" class="material-icons waves-effect waves-circle tooltipped red-text activator" data-position="top" data-tooltip="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');">favorite</i>*/
/* 										{% else %}*/
/* 										<i id="wishlist-btn" class="material-icons waves-effect waves-circle tooltipped activator" data-position="top" data-tooltip="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');">favorite_border</i>*/
/* 										{% endif %}*/
/* 									</li>*/
/* 									<li>*/
/* 										<i class="material-icons waves-effect waves-circle tooltipped activator" onclick="compare.add('{{ product_id }}');" data-position="top" data-tooltip="{{ button_compare }}">compare_arrows</i>*/
/* 									</li>*/
/* 								</ul>*/
/* 								<i class="material-icons waves-effect waves-circle tooltipped sidenav-trigger share-btn" data-target="side-share" data-position="top" data-tooltip="{{ button_share }}">share</i>*/
/* 							</div>*/
/* 							<h1 class="center" itemprop="name">{{ heading_title }}</h1>*/
/* 							<div class="rating">*/
/* 								<hr>*/
/* 								<div>*/
/* 									{% if review_status %}*/
/* 										<span class="white">*/
/* 										{% for i in 1..5 %}*/
/* 											{% if rating < i %}*/
/* 											<i class="material-icons">star_border</i>*/
/* 											{% else %}*/
/* 											<i class="material-icons">star</i>*/
/* 											{% endif %}*/
/* 										{% endfor %}*/
/* 										</span>*/
/* 										{% if rating > 0 %}*/
/* 										<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="hide">*/
/* 											<meta itemprop="reviewCount" content="{{ reviewCount }}">*/
/* 											<meta itemprop="ratingValue" content="{{ rating }}">*/
/* 											<meta itemprop="worstRating" content="1">*/
/* 											<meta itemprop="bestRating" content="5">*/
/* 											<meta itemprop="itemreviewed" content="{{ heading_title }}">*/
/* 										</div>*/
/* 										{% endif %}*/
/* 									{% endif %}*/
/* 									<br>*/
/* 									<a class="blue-grey-text text-darken-3 text-bold" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click');$('html, body').animate({scrollTop:$('a[href=\'#tab-review\']').offset().top-50},1150);return false;" rel="nofollow">{{ reviews }}</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row valign-wrapper">*/
/* 								<div class="col s8 flow-text" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/* 									{% if price %}*/
/* 										{% if not special %}*/
/* 										<span class="card-price old-prices">{{ price }}</span>*/
/* 										<meta itemprop="price" content="{{ meta_price }}">*/
/* 										{% else %}*/
/* 										<span class="card-price old-price grey-text">{{ price }}</span>*/
/* 										<span class="card-price new-prices red-text text-darken-2">{{ special }}</span>*/
/* 										<meta itemprop="price" content="{{ meta_special }}">*/
/* 										{% endif %}*/
/* 									{% endif %}*/
/* 									<meta itemprop="pricecurrency" content="{{ pricecurrency }}">*/
/* 									<link itemprop="availability" href="{{ stock_status }}">*/
/* 									{% if product_spec and product_spec != '0000-00-00' %}*/
/* 									<meta itemprop="priceValidUntil" content="{{ product_spec }}">*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								<div class="col s4 center">*/
/* 									{% if manufacturers_img %}*/
/* 									<a href="{{ manufacturers }}" target="_blank" rel="noopener">*/
/* 										{% if manufacturers_img %}*/
/* 										<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ manufacturers_img }}" title="{{ manufacturer }}" alt="{{ manufacturer }}">*/
/* 										{% else %}*/
/* 										{% endif %}*/
/* 									</a>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 							{% if product_spec and product_spec != '0000-00-00' %}*/
/* 							<div class="section center grey lighten-3 end-promotion">*/
/* 								<span><i class="material-icons left">info</i>{{ text_end_promotion }} <span class="text-bold">{{ end_promotion }}</span></span>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							<blockquote class="blockquote-note blue-grey lighten-5 z-depth-1">*/
/* 								<div class="blockquote-icon blue-grey lighten-4 cursor-default"><i class="material-icons">chat</i></div>*/
/* 								<ul>*/
/* 									{% if manufacturer %}*/
/* 									<li><span class="text-bold">{{ text_manufacturer }}</span>:&nbsp;<a href="{{ manufacturers }}" target="_blank" rel="noopener"><span itemprop="brand">{{ manufacturer }}</span></a></li>*/
/* 									{% endif %}*/
/* 									{% if category_products %}*/
/* 									<li><span class="text-bold">{{ text_category }}</span>:&nbsp;<a href="{{ category_products.0.href }}"><span itemprop="category">{{ category_products.0.name }}</span></a></li>*/
/* 									{% endif %}*/
/* 									{% if model %}*/
/* 									<li><span class="text-bold">{{ text_model }}</span>&nbsp;{{ model }}</li>*/
/* 									{% endif %}*/
/* 									{% if sku %}*/
/* 									<li><span class="text-bold">{{ text_sku }}</span>:&nbsp;<span itemprop="sku">{{ sku }}</span></li>*/
/* 									{% endif %}*/
/* 									{% if upc %}*/
/* 									<li><span class="text-bold">{{ text_upc }}</span>:&nbsp;{{ upc }}</li>*/
/* 									{% endif %}*/
/* 									{% if ean %}*/
/* 									<li><span class="text-bold" >{{ text_ean }}</span>:&nbsp;{{ ean }}</li>*/
/* 									{% endif %}*/
/* 									{% if jan %}*/
/* 									<li><span class="text-bold">{{ text_jan }}</span>:&nbsp;{{ jan }}</li>*/
/* 									{% endif %}*/
/* 									{% if isbn %}*/
/* 									<li><span class="text-bold">{{ text_isbn }}</span>:&nbsp;{{ isbn }}</li>*/
/* 									{% endif %}*/
/* 									{% if mpn %}*/
/* 									<li><span class="text-bold">{{ text_mpn }}</span>:&nbsp;<span itemprop="mpn">{{ mpn }}</span></li>*/
/* 									{% endif %}*/
/* 									{% if location %}*/
/* 									<li><span class="text-bold">{{ text_location }}</span>:&nbsp;{{ location }}</li>*/
/* 									{% endif %}*/
/* 									{% if dimensions_length or dimensions_width or dimensions_height %}*/
/* 									<li><span class="text-bold">{{ text_dimension }}</span>:&nbsp;{{ dimensions_length }} x {{ dimensions_width }} x {{ dimensions_height }}</li>*/
/* 									{% endif %}*/
/* 									{% if weight > 0 %}*/
/* 									<li><span class="text-bold">{{ text_weight }}</span>:&nbsp;{{ weight }}</li>*/
/* 									{% endif %}*/
/* 									{% if additionalfields %}*/
/* 										{% for key, additionalfield in additionalfields %}*/
/* 										<li id="customfield-{{ key }}">*/
/* 											<span class="text-bold">{{ additionalfield.title }}:</span>&nbsp;{{ additionalfield.text }}*/
/* 										</li>*/
/* 										{% endfor %}*/
/* 									{% endif %}*/
/* 									<li><span class="text-bold">{{ text_stock }}</span>&nbsp;<span class="{{ stock_color }}-text text-darken-1 text-bold">{{ stock }}</span></li>*/
/* 									{% if type_remainder == 'numerical' %}*/
/* 									<li><span class="text-bold">{{ text_remainder }}</span>:&nbsp;{{ remainder }}</li>*/
/* 									{% endif %}*/
/* 									{% if type_remainder == 'progressbar' %}*/
/* 									<li class="product-remainder"><span class="text-bold">{{ text_remainder }}</span>:&nbsp;<div class="progress blue lighten-3"><div class="determinate {{ progressbar_color }}" style="width: {{ progressbar_percent }}%"></div></div></li>*/
/* 									{% endif %}*/
/* 								</ul>*/
/* 							</blockquote>*/
/* 							{% if special or reward or discounts or sizechart %}*/
/* 							<ul class="collection z-depth-1">*/
/* 								{% if special %}*/
/* 								<li class="collection-item"><i class="material-icons blue-grey-text text-darken-4 left">local_offer</i>{{ text_percent }}&nbsp;<span class="deep-orange-text text-accent-3 text-bold">{{ percent_discount }}%</span></li>*/
/* 								{% endif %}*/
/* 								{% if reward %}*/
/* 								<li class="collection-item"><i class="material-icons blue-grey-text text-darken-4 left">account_balance_wallet</i><span class="deep-orange-text text-accent-3 text-bold">{{ reward }}</span>&nbsp;{{ text_bonus_points }}</li>*/
/* 								{% endif %}*/
/* 								{% for discount in discounts %}*/
/* 								<li class="collection-item"><i class="material-icons blue-grey-text text-darken-4 left">new_releases</i>{{ discount.quantity }}{{ text_discount }}<span class="deep-orange-text text-accent-3 text-bold">{{ discount.price }}</span></li>*/
/* 								{% endfor %}*/
/* 								{% if sizechart %}*/
/* 								<li class="collection-item">*/
/* 									<i class="material-icons blue-grey-text text-darken-4 left">straighten</i><a class="deep-orange-text text-accent-3 text-bold modal-trigger" href="#modal-size-chart" rel="nofollow">{{ text_sizechart }}</a>*/
/* 								</li>*/
/* 								{% endif %}*/
/* 							</ul>*/
/* 							{% endif %}*/
/* 							{% if payment_method or payment_image %}*/
/* 							<div class="section">*/
/* 								{% if payment_method %}<h6 class="center">{{ payment_method }}</h6>{% endif %}*/
/* 								{% if payment_image %}<img class="responsive-img center-block lazyload" src="{{ img_loader }}" data-src="{{ payment_image }}" alt="{{ payment_method }}">{% endif %}*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							<div id="product">*/
/* 								{% if options %}*/
/* 								<h3>{{ text_option }}</h3>*/
/* 								{% for option in options %}*/
/* 									{% if option.type == 'radio' %}*/
/* 									<div class="section" id="input-option{{ option.product_option_id }}">*/
/* 										<label class="text-bold{% if option.required %} required{% endif %}">{{ option.name }}</label>*/
/* 										<ul class="product-option">*/
/* 											{% for option_value in option.product_option_value %}*/
/* 											<li>*/
/* 												<label class="radio" for="radio-{{ option_value.product_option_value_id }}">*/
/* 													{% if option_value.image %}*/
/* 													<img src="{{ img_loader }}" data-src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="responsive-img lazyload">*/
/* 													{% endif %}*/
/* 													<input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" id="radio-{{ option_value.product_option_value_id }}" class="with-gap">*/
/* 													<span>{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}</span>*/
/* 												</label>*/
/* 											</li>*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'checkbox' %}*/
/* 									<div class="section" id="input-option{{ option.product_option_id }}">*/
/* 										<label class="text-bold{% if option.required %} required{% endif %}">{{ option.name }}</label>*/
/* 										<ul class="product-option">*/
/* 											{% for option_value in option.product_option_value %}*/
/* 											<li>*/
/* 												<label class="checkbox" for="checkbox-{{ option_value.product_option_value_id }}">*/
/* 													{% if option_value.image %}*/
/* 													<img src="{{ img_loader }}" data-src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="responsive-img lazyload">*/
/* 													{% endif %}*/
/* 													<input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" id="checkbox-{{ option_value.product_option_value_id }}" class="filled-in">*/
/* 													<span>{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}</span>*/
/* 												</label>*/
/* 											</li>*/
/* 										{% endfor %}*/
/* 										</ul>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'select' %}*/
/* 									<div class="section">*/
/* 										<div class="input-field">*/
/* 											<select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="icons">*/
/* 												{% for option_value in option.product_option_value %}*/
/* 												<option value="{{ option_value.product_option_value_id }}"{% if option_value.image %} data-icon="{{ option_value.image }}"{% endif %}>{{ option_value.name }} {% if option_value.price %}({{ option_value.price_prefix }}{{ option_value.price }}){% endif %}*/
/* 												</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 											<label for="input-option{{ option.product_option_id }}" class="text-bold{% if option.required %} required{% endif %}">{{ option.name }}</label>*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'text' %}*/
/* 									<div class="section">*/
/* 										<div class="input-field">*/
/* 											<i class="material-icons prefix">textsms</i>*/
/* 											<label class="text-bold{% if option.required %} required{% endif %}" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 											<input type="text" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}">*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'textarea' %}*/
/* 									<div class="section">*/
/* 										<div class="input-field">*/
/* 											<i class="material-icons prefix">message</i>*/
/* 											<label class="text-bold{% if option.required %} required{% endif %}" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 											<textarea name="option[{{ option.product_option_id }}]" rows="5" id="input-option{{ option.product_option_id }}" class="materialize-textarea"></textarea>*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'file' %}*/
/* 									<div class="section">*/
/* 										<label class="text-bold{% if option.required %} required{% endif %}" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 										<div class="file-field input-field">*/
/* 											<div id="button-upload{{ option.product_option_id }}" class="btn waves-effect waves-light blue-grey lighten-1">*/
/* 												<i class="material-icons left">cloud_upload</i>*/
/* 												<span>{{ button_upload }}</span>*/
/* 												<input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}">*/
/* 											</div>*/
/* 											<div class="file-path-wrapper">*/
/* 												<input class="file-path validate" type="text" placeholder="{{ option.name }}">*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'date' %}*/
/* 									<div class="section">*/
/* 										<div class="input-field">*/
/* 											<i class="material-icons prefix">event</i>*/
/* 											<label class="text-bold{% if option.required %} required{% endif %}" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 											<input type="text" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" class="datepicker">*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'time' %}*/
/* 									<div class="section">*/
/* 										<div class="input-field">*/
/* 											<i class="material-icons prefix">av_timer</i>*/
/* 											<label class="text-bold{% if option.required %} required{% endif %}" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 											<input type="text" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" class="timepicker">*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 								{% endif %}*/
/* 								{% if recurrings %}*/
/* 								<h3 class="required">{{ text_payment_recurring }}</h3>*/
/* 								<div class="input-field">*/
/* 									<select name="recurring_id">*/
/* 										<option value="">{{ text_select }}</option>*/
/* 										{% for recurring in recurrings %}*/
/* 										<option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 								<div id="recurring-description"></div>*/
/* 								{% endif %}*/
/* 								<div class="input-number section">*/
/* 									<label class="text-bold" for="input-quantity">{{ entry_qty }}:</label>*/
/* 									<i id="quantity-minus" class="material-icons waves-effect waves-circle input-quantity-minus grey-text">remove_circle_outline</i>*/
/* 									<input id="input-quantity" type="number" name="quantity" value="{{ minimum }}" min="{{ minimum }}">*/
/* 									<i id="quantity-plus" class="material-icons waves-effect waves-circle input-quantity-plus">add_circle_outline</i>*/
/* 								</div>*/
/* 								<input type="hidden" name="product_id" value="{{ product_id }}">*/
/* 								{% if minimum > 1 %}*/
/* 								<blockquote class="blockquote-note blue-grey lighten-5 center section">{{ text_minimum }}</blockquote>*/
/* 								{% endif %}*/
/* 								<div class="section">*/
/* 									{% if add_cart %}*/
/* 									<button type="button" id="button-cart" class="btn btn-large waves-effect waves-light red href-underline width-max"><i class="material-icons left">add_shopping_cart</i>{{ button_cart }}</button>*/
/* 									{% else %}*/
/* 									<button type="button" id="button-cart" class="btn btn-large href-underline width-max" disabled="disabled"><i class="material-icons left">add_shopping_cart</i>{{ button_cart }}</button>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								{{ quickorder }}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="card-panel">*/
/* 					<ul class="tabs href-underline">*/
/* 						<li class="tab"><a class="blue-grey-text text-darken-3 text-bold waves-effect waves-default active" href="#description-product" rel="nofollow">{{ tab_description }}</a></li>*/
/* 						{% if attribute_groups %}*/
/* 						<li class="tab"><a class="blue-grey-text text-darken-3 text-bold waves-effect waves-default" href="#tab-specification" rel="nofollow">{{ tab_attribute }}</a></li>*/
/* 						{% endif %}*/
/* 						{% if customtabs %}*/
/* 						{% for key, customtab in customtabs %}*/
/* 						<li class="tab"><a class="blue-grey-text text-darken-3 text-bold waves-effect waves-default" href="#tabcustom{{ key }}" rel="nofollow">{{ customtab.title }}</a></li>*/
/* 						{% endfor %}*/
/* 						{% endif %}*/
/* 						{% if review_status %}*/
/* 						<li class="tab"><a class="blue-grey-text text-darken-3 text-bold waves-effect waves-default" href="#tab-review" rel="nofollow">{{ tab_review }}</a></li>*/
/* 						{% endif %}*/
/* 					</ul>*/
/* 					<div id="description-product" class="section description-product text-justify" itemprop="description">{{ description }}</div>*/
/* 					{% if attribute_groups %}*/
/* 					<div id="tab-specification" class="section">*/
/* 						<ul class="collapsible" data-collapsible="accordion">*/
/* 						{% for attribute_group in attribute_groups %}*/
/* 							<li class="arrow-rotate">*/
/* 							<div class="collapsible-header grey lighten-4 attribute-collapsible"><span class="text-bold truncate">{{ attribute_group.name }}</span></div>*/
/* 								<div class="collapsible-body no-padding">*/
/* 									<table class="bordered striped centered">*/
/* 										<tbody>*/
/* 											{% for attribute in attribute_group.attribute %}*/
/* 											<tr>*/
/* 											<td><span class="text-bold">{{ attribute.name }}</span></td>*/
/* 											<td>{{ attribute.text }}</td>*/
/* 											</tr>*/
/* 											{% endfor %}*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 							</li>*/
/* 						{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					{% if customtabs %}*/
/* 						{% for key, customtab in customtabs %}*/
/* 						<div id="tabcustom{{ key }}" class="section">{{ customtab.description }}</div>*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 					{% if review_status %}*/
/* 					<div id="tab-review" class="section">*/
/* 						<form id="form-review">*/
/* 							<div class="flex-reverse">*/
/* 								<button type="button" class="btn-flat waves-effect modal-trigger text-bold" data-target="modal-review">{{ text_write }}<i class="material-icons right">mode_edit</i></button>*/
/* 							</div>*/
/* 							<div id="modal-review" class="modal">*/
/* 								<div class="modal-content">*/
/* 									<i class="material-icons modal-action modal-close waves-effect waves-circle close-icon">close</i>*/
/* 									<h4>{{ text_write }}</h4>*/
/* 									{% if review_guest %}*/
/* 									<div class="row">*/
/* 										<div class="input-field col s12">*/
/* 											<i class="material-icons prefix">account_circle</i>*/
/* 											<input type="text" name="name" value="{{ customer_name }}" id="input-name" class="validate">*/
/* 											<label for="input-name">{{ entry_name }}</label>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="row">*/
/* 										<div class="input-field col s12">*/
/* 											<i class="material-icons prefix">mode_edit</i>*/
/* 											<textarea name="text" id="input-review" class="materialize-textarea"></textarea>*/
/* 											<label for="input-review">{{ entry_review }}</label>*/
/* 											<small>{{ text_note }}</small>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="section">*/
/* 										<div class="rating-input center">*/
/* 											<input id="rating-1" type="radio" name="rating" value="1">*/
/* 											<label for="rating-1"><i class="material-icons">star</i></label>*/
/* 											<input id="rating-2" type="radio" name="rating" value="2">*/
/* 											<label for="rating-2"><i class="material-icons">star</i></label>*/
/* 											<input id="rating-3" type="radio" name="rating" value="3">*/
/* 											<label for="rating-3"><i class="material-icons">star</i></label>*/
/* 											<input id="rating-4" type="radio" name="rating" value="4">*/
/* 											<label for="rating-4"><i class="material-icons">star</i></label>*/
/* 											<input id="rating-5" type="radio" name="rating" value="5">*/
/* 											<label for="rating-5"><i class="material-icons">star</i></label>*/
/* 										</div>*/
/* 									</div>*/
/* 									{{ captcha }}*/
/* 									{% else %}*/
/* 									{{ text_login }}*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								<div class="modal-footer">*/
/* 									<button type="button" id="button-review" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</form>*/
/* 						<div id="review"></div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					<div class="post-footer grey lighten-4">*/
/* 						{% if tags %}*/
/* 							<i class="material-icons">local_offer</i>:&nbsp;*/
/* 							{% for i in range(0, tags|length-1) %}*/
/* 								{% if i < (tags|length - 1) %}*/
/* 								<a class="chip waves-effect waves-default" href="{{ tags[i].href|replace(' ', '%20') }}" rel="nofollow">{{ tags[i].tag }}</a>,*/
/* 								{% else %}*/
/* 								<a class="chip waves-effect waves-default" href="{{ tags[i].href|replace(' ', '%20') }}" rel="nofollow">{{ tags[i].tag }}</a>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 		{% if products %}*/
/* 		<section class="section">*/
/* 			<h3>{{ text_related }}</h3>*/
/* 			<div class="row slick-goods">*/
/* 				{% for product in products %}*/
/* 				<div class="col s12 m4">*/
/* 					<div class="card sticky-action large hoverable href-underline">*/
/* 						{% if product.labels %}*/
/* 						<ul class="labels-wrap">*/
/* 							{% for label in product.labels %}*/
/* 							<li class="labels-wrap__item"><span class="waves-effect badge {{ label.color }} {{ label.color_text }}">{{ label.name }}</span></li>*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 						{% endif %}*/
/* 						{% if product.special %}<span class="white-text badge red lighten-1 percent">{{ text_percent }}&nbsp;{{ product.percent_discount }}%</span>{% endif %}*/
/* 						<div class="card-image">*/
/* 							<i class="material-icons waves-effect waves-circle close-icon activator">more_vert</i>*/
/* 							<a href="{{ product.href }}"><img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"></a>*/
/* 						</div>*/
/* 						<div class="card-content center-align">*/
/* 							<span class="card-title"><a href="{{ product.href }}" class="grey-text text-darken-4">{{ product.name }}</a></span>*/
/* 						</div>*/
/* 						<div class="card-action center-align grey lighten-5">*/
/* 							{% if product.add_cart %}*/
/* 							<button class="btn btn-floating btn-large waves-effect waves-light red add-cart" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="material-icons">add_shopping_cart</i></button>*/
/* 							{% else %}*/
/* 							<button class="btn btn-floating btn-large add-cart" disabled="disabled"><i class="material-icons">add_shopping_cart</i></button>*/
/* 							{% endif %}*/
/* 							{% if product.price %}*/
/* 							{% if not product.special %}*/
/* 							<span class="card-price">{{ product.price }}</span>*/
/* 							{% else %}*/
/* 							<span class="card-price old-price grey-text">{{ product.price }}</span>*/
/* 							<span class="card-price red-text text-darken-2">{{ product.special }}</span>*/
/* 							{% endif %}*/
/* 							{% if product.tax %}*/
/* 							<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 							{% endif %}*/
/* 							{% endif %}*/
/* 							<div class="rating">*/
/* 								<hr>*/
/* 								<span class="grey lighten-5">*/
/* 									{% if product.rating %}*/
/* 										{% for i in 1..5 %}*/
/* 											{% if product.rating < i %}*/
/* 											<i class="material-icons">star_border</i>*/
/* 											{% else %}*/
/* 											<i class="material-icons">star</i>*/
/* 											{% endif %}*/
/* 										{% endfor %}*/
/* 									{% else %}*/
/* 										<i class="material-icons">star_border</i>*/
/* 										<i class="material-icons">star_border</i>*/
/* 										<i class="material-icons">star_border</i>*/
/* 										<i class="material-icons">star_border</i>*/
/* 										<i class="material-icons">star_border</i>*/
/* 									{% endif %}*/
/* 								</span>*/
/* 							</div>*/
/* 							<a href="{{ product.href }}" class="btn waves-effect waves-light red width-max">{{ text_more_detailed }}</a>*/
/* 						</div>*/
/* 						<div class="card-reveal">*/
/* 							<span class="card-title"><a href="{{ product.href }}" class="grey-text text-darken-4">{{ product.name }}</a><i class="material-icons waves-effect waves-circle close-icon">close</i></span>*/
/* 							<p>{{ product.description }}</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</section>*/
/* 		{% endif %}*/
/* 		{{ content_bottom }}*/
/* 	</div>*/
/* </main>*/
/* <aside>*/
/* 	{{ sizechart }}*/
/* 	<ul id="side-share" class="sidenav href-underline">*/
/* 		<li><a class="waves-effect waves-default" href="//vk.com/share.php?url={{ share }}" rel="nofollow noopener" target="_blank"><span class="side-share__item"><svg class="vk" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M7.828 12.526h.957s.288-.032.436-.19c.14-.147.14-.42.14-.42s-.02-1.284.58-1.473c.59-.187 1.34 1.24 2.14 1.788.61.42 1.07.33 1.07.33l2.14-.03s1.12-.07.59-.95c-.04-.07-.3-.65-1.58-1.84-1.34-1.24-1.16-1.04.45-3.19.98-1.31 1.38-2.11 1.25-2.45-.11-.32-.84-.24-.84-.24l-2.4.02s-.18-.02-.31.06-.21.26-.21.26-.38 1.02-.89 1.88C10.27 7.9 9.84 8 9.67 7.88c-.403-.26-.3-1.053-.3-1.62 0-1.76.27-2.5-.52-2.69-.26-.06-.454-.1-1.123-.11-.86-.01-1.585.006-1.996.207-.27.135-.48.434-.36.45.16.02.52.098.71.358.25.337.24 1.09.24 1.09s.14 2.077-.33 2.335c-.33.174-.77-.187-1.73-1.837-.49-.84-.86-1.78-.86-1.78s-.07-.17-.2-.27c-.15-.11-.37-.15-.37-.15l-2.29.02s-.34.01-.46.16c-.11.13-.01.41-.01.41s1.79 4.19 3.82 6.3c1.86 1.935 3.97 1.81 3.97 1.81z"/></svg></span>VK</a></li>*/
/* 		<li><a class="waves-effect waves-default" href="//www.facebook.com/sharer.php?u={{ share }}" rel="nofollow noopener" target="_blank"><span class="side-share__item"><svg class="facebook" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/></svg></span>Facebook</a></li>*/
/* 		<li><a class="waves-effect waves-default" href="//plus.google.com/share?url={{ share }}" rel="nofollow noopener" target="_blank"><span class="side-share__item"><svg class="googleplus" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M5.09 7.273v1.745h2.89c-.116.75-.873 2.197-2.887 2.197-1.737 0-3.155-1.44-3.155-3.215S3.353 4.785 5.09 4.785c.99 0 1.652.422 2.03.786l1.382-1.33c-.887-.83-2.037-1.33-3.41-1.33C2.275 2.91 0 5.19 0 8s2.276 5.09 5.09 5.09c2.94 0 4.888-2.065 4.888-4.974 0-.334-.036-.59-.08-.843H5.09zm10.91 0h-1.455V5.818H13.09v1.455h-1.454v1.454h1.455v1.455h1.46V8.727H16"/></svg></span>Google+</a></li>*/
/* 		<li><a class="waves-effect waves-default" href="//www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl={{ share }}" rel="nofollow noopener" target="_blank"><span class="side-share__item"><svg class="odnoklassniki" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M9.67 11.626c.84-.19 1.652-.524 2.4-.993.564-.356.734-1.103.378-1.668-.356-.566-1.102-.737-1.668-.38-1.692 1.063-3.87 1.063-5.56 0-.566-.357-1.313-.186-1.668.38-.356.566-.186 1.312.38 1.668.746.47 1.556.802 2.397.993l-2.31 2.31c-.48.47-.48 1.237 0 1.71.23.236.54.354.85.354.31 0 .62-.118.85-.354L8 13.376l2.27 2.27c.47.472 1.237.472 1.71 0 .472-.473.472-1.24 0-1.71l-2.31-2.31zM8 8.258c2.278 0 4.13-1.852 4.13-4.128C12.13 1.852 10.277 0 8 0S3.87 1.852 3.87 4.13c0 2.276 1.853 4.128 4.13 4.128zM8 2.42c-.942 0-1.71.767-1.71 1.71 0 .942.768 1.71 1.71 1.71.943 0 1.71-.768 1.71-1.71 0-.943-.767-1.71-1.71-1.71z"/></svg></span>Odnoklassniki</a></li>*/
/* 		<li><a class="waves-effect waves-default" href="//twitter.com/share?url={{ share }}" rel="nofollow noopener" target="_blank"><span class="side-share__item"><svg class="twitter" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/></svg></span>Twitter</a></li>*/
/* 		<li><a class="waves-effect waves-default" href="//telegram.me/share/url?url={{ share }}" rel="nofollow noopener" target="_blank">*/
/* 		<span class="side-share__item"><svg class="telegram" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M12.793 10.69c.57-1.56 2.66-7.49 2.994-9.044.38-1.76-.414-1.93-2.22-1.34-1.805.59-6.435 2.305-7.215 2.582-.78.277-4.573 1.552-5.36 1.932-1.606.862-.825 2.177.97 2.86 5.37 2.577 3.845 1.264 6.242 6.032.493 1.218 1.656 3.293 2.77 1.724.586-.892 1.37-3.52 1.82-4.747z" fill-rule="nonzero"/></svg></span>Telegram</a></li>*/
/* 		<li><a class="waves-effect waves-default" href="whatsapp://send?text={{ heading_title|url_encode(true) }} {{ share }}" data-action="share/whatsapp/share" rel="nofollow"><span class="side-share__item"><svg class="whatsapp" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M11.665 9.588c-.2-.1-1.177-.578-1.36-.644-.182-.067-.315-.1-.448.1-.132.197-.514.643-.63.775-.116.13-.232.14-.43.05-.2-.1-.842-.31-1.602-.99-.592-.53-.99-1.18-1.107-1.38-.116-.2-.013-.31.087-.41.09-.09.2-.23.3-.35.098-.12.13-.2.198-.33.066-.14.033-.25-.017-.35-.05-.1-.448-1.08-.614-1.47-.16-.39-.325-.34-.448-.34-.115-.01-.248-.01-.38-.01-.134 0-.35.05-.532.24-.182.2-.696.68-.696 1.65s.713 1.91.812 2.05c.1.13 1.404 2.13 3.4 2.99.476.2.846.32 1.136.42.476.15.91.13 1.253.08.383-.06 1.178-.48 1.344-.95.17-.47.17-.86.12-.95-.05-.09-.18-.14-.38-.23M8.04 14.5h-.01c-1.18 0-2.35-.32-3.37-.92l-.24-.143-2.5.65.67-2.43-.16-.25c-.66-1.05-1.01-2.26-1.01-3.506 0-3.63 2.97-6.59 6.628-6.59 1.77 0 3.43.69 4.68 1.94 1.25 1.24 1.94 2.9 1.94 4.66-.003 3.63-2.973 6.59-6.623 6.59M13.68 2.3C12.16.83 10.16 0 8.03 0 3.642 0 .07 3.556.067 7.928c0 1.397.366 2.76 1.063 3.964L0 16l4.223-1.102c1.164.63 2.474.964 3.807.965h.004c4.39 0 7.964-3.557 7.966-7.93 0-2.117-.827-4.11-2.33-5.608"/></svg></span>WhatsApp</a></li>*/
/* 		<li><a class="waves-effect waves-default" href="viber://forward?text={{ heading_title|url_encode(true) }} {{ share }}" rel="nofollow">*/
/* 		<span class="side-share__item"><svg class="viber" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M13.874 1.56C13.476 1.194 11.87.027 8.29.01c0 0-4.22-.253-6.277 1.634C.868 2.79.465 4.464.423 6.544.38 8.62.325 12.514 4.08 13.57h.003l-.003 1.612s-.023.652.406.785c.52.16.824-.336 1.32-.87.273-.293.648-.724.932-1.054 2.567.216 4.542-.277 4.766-.35.518-.17 3.45-.544 3.928-4.438.492-4.015-.238-6.553-1.558-7.698zm.435 7.408c-.41 3.25-2.79 3.457-3.22 3.597-.19.06-1.93.492-4.11.35 0 0-1.63 1.96-2.13 2.47-.08.08-.18.11-.24.096-.09-.02-.11-.12-.11-.27l.01-2.67c-.01 0 0 0 0 0-3.18-.89-2.99-4.2-2.95-5.94.03-1.73.36-3.15 1.33-4.11C4.63.91 8.22 1.15 8.22 1.15c3.028.01 4.48.923 4.815 1.23 1.116.955 1.685 3.243 1.27 6.595zM5.16 3.32c.162 0 .307.073.42.207.002.002.387.464.553.69.157.213.367.553.474.743.19.34.07.688-.115.832l-.377.3c-.19.152-.167.436-.167.436s.56 2.105 2.64 2.635c0 0 .283.026.436-.164l.3-.38c.142-.19.49-.31.83-.12.19.1.53.31.744.47.226.16.688.55.69.55.22.18.27.46.12.74v.01c-.154.27-.36.52-.622.76h-.005c-.21.18-.42.28-.63.3-.02 0-.05.01-.09 0-.09 0-.18-.02-.27-.04v-.01c-.32-.09-.85-.32-1.73-.81-.57-.32-1.05-.64-1.46-.97-.21-.17-.43-.36-.65-.58L6.2 8.9l-.02-.02-.02-.02c-.22-.22-.41-.44-.58-.653-.32-.406-.64-.885-.96-1.46-.49-.88-.72-1.41-.81-1.73H3.8c-.03-.09-.05-.18-.04-.27-.01-.04 0-.07 0-.093.02-.2.126-.41.305-.63h.003c.237-.26.492-.47.764-.622.11-.06.22-.09.32-.09h.01zm2.73-.456h.078l.05.002h.013l.06.003h.34l.09.01h.05l.1.01h.02l.07.01h.01l.05.01c.03 0 .05.01.07.01h.06l.05.02.04.01.04.01.02.01h.03l.03.01h.02l.05.01.03.01.03.01.04.01.02.01c.02 0 .04.01.06.01l.03.01.03.01.08.03.04.02.09.04.03.01.03.01.06.03.04.01.02.01.05.02.02.01.04.02.03.01.03.02.04.02.03.02.02.01.04.02.03.02.05.03.03.01.05.03.01.01.03.02.06.05.03.02.03.02.02.01.03.02.05.05.04.03.03.02.01.01.02.01.05.04.03.03.02.02.03.02.03.02.02.01.08.08.04.04.09.09.02.02c.01.01.03.03.04.05l.02.02.11.13.03.04c.01.01.01.02.02.02l.06.09.03.03.06.08.05.08.03.06.04.07.03.06.01.02.02.04.05.1.05.1.02.05c.04.09.07.18.11.28.05.13.09.27.12.42.03.11.05.21.07.32l.02.18.03.2c.01.08.02.17.02.25.01.08.01.16.01.24v.17c0 .01-.005.02-.01.03-.01.02-.02.03-.04.05-.014.01-.033.03-.053.03-.02.01-.04.01-.06.01h-.03c-.02 0-.04-.01-.06-.02-.02-.01-.04-.02-.05-.04-.01-.02-.03-.04-.04-.06-.01-.02-.02-.04-.02-.06V6.9c-.01-.14-.02-.284-.04-.426-.01-.098-.03-.19-.04-.28 0-.05-.01-.098-.02-.14l-.02-.1-.024-.09-.01-.06-.03-.1c-.02-.08-.05-.16-.08-.24-.02-.06-.04-.11-.07-.16l-.02-.05-.09-.18-.02-.03c-.04-.09-.09-.18-.15-.26l-.03-.05H11l-.043-.06c-.036-.06-.076-.11-.12-.16l-.083-.1-.01-.01-.03-.038-.024-.03-.05-.05-.01-.02-.047-.04-.03-.03-.055-.05-.027-.025-.03-.03-.01-.01c-.01-.01-.03-.03-.05-.04L10.33 4l-.02-.01-.04-.03-.05-.04-.03-.024-.02-.01-.04-.036c0-.01-.01-.01-.02-.01l-.02-.02-.01-.01V3.8l-.02-.01-.04-.025-.03-.02-.05-.03-.04-.03-.02-.01-.02-.01H9.8l-.013-.01-.044-.023-.005-.01-.02-.01-.03-.015H9.68l-.03-.01-.017-.01-.03-.01-.007-.007-.02-.01-.035-.02-.02-.01-.06-.02-.05-.02-.09-.01-.03-.02c-.01-.006-.02-.01-.03-.01l-.02-.01c-.02-.007-.03-.01-.05-.02l-.02-.01h-.02l-.04-.02-.02-.01-.03-.01H9c-.005 0-.012-.003-.02-.005h-.06l-.03-.01h-.01l-.03-.01h-.027c-.017-.01-.03-.01-.047-.01l-.006-.01-.04-.01c-.02-.01-.037-.01-.056-.01l-.03-.01-.033-.01-.03-.01-.04-.01H8.5l-.12-.018h-.06l-.078-.01h-.05l-.046-.006h-.02l-.036-.01H7.9l-.007-.01h-.04c-.02 0-.043-.01-.06-.02-.02-.01-.04-.02-.054-.04l-.02-.03c-.02-.02-.02-.04-.03-.06-.01-.02-.01-.04-.01-.06 0-.02 0-.04.01-.06.01-.02.02-.04.04-.05.01-.02.03-.03.05-.04.02-.01.04-.02.06-.02h.04zm.37 1.05l.024.002.04.004c.006 0 .012 0 .02.002.015 0 .03.003.05.004l.04.005.016.01.03.01.032.01.03.01h.02l.028.01.047.01.037.01.018.01h.048l.08.02.03.01.03.01.03.01s.01 0 .01.01l.03.01.03.01.03.01c.01 0 .02.01.03.01.005 0 .01.01.017.01l.043.02h.02l.06.02.033.02.03.02.073.03.04.01.02.02c.03.01.06.03.09.04l.032.02.032.02.033.02c.03.02.054.03.08.05l.02.01.027.02.015.01.05.03.025.02.043.03.02.01.02.01.03.02.04.03c.01.01.015.01.023.02.006.01.01.01.017.02l.022.02.024.02.02.02.03.03.02.02.01.01.06.06.01.01c0 .01.01.02.02.02l.01.01.03.03.02.03.02.02.03.04.03.03.06.08.01.02.04.05.01.02.01.02.01.02.01.02c.01.01.01.02.02.04l.03.05.01.01.02.04.02.03c.01.01.01.02.02.03l.02.03.02.04.02.04.01.03c.01.03.03.05.04.08 0 .01.01.02.01.03l.03.08.04.13c0 .01.01.03.01.04l.03.09.03.12.03.16c.01.05.01.09.02.14.01.08.02.16.02.24l.01.14v.11c0 .01 0 .02-.01.03L10.9 7c-.02.015-.03.03-.05.04-.02.01-.04.02-.06.027-.02.01-.05.01-.07.01-.02 0-.04-.01-.06-.02-.01 0-.02-.01-.03-.014-.02-.01-.04-.026-.05-.044-.02-.02-.03-.04-.03-.06l-.01-.03V6.7c0-.088-.01-.17-.02-.256-.01-.09-.03-.19-.05-.28-.02-.06-.03-.12-.05-.174l-.02-.06-.02-.05-.01-.02-.03-.08-.03-.06-.05-.1-.046-.08v-.01l-.02-.032-.02-.025-.03-.05-.03-.04-.06-.08c-.03-.04-.06-.08-.094-.118-.01-.01-.02-.02-.02-.03l-.02-.02-.01-.01-.02-.01-.02-.018V5l-.08-.076-.05-.045v-.01l-.02-.02-.025-.02-.01-.01c0-.01-.01-.01-.02-.01l-.03-.01-.01-.01-.04-.03-.01-.01-.01-.01c-.008-.01-.015-.01-.02-.01l-.04-.03-.01-.01-.04-.02-.007-.01-.03-.02-.02-.01-.02-.02-.02-.02h-.01c-.02-.02-.04-.03-.07-.04l-.03-.02-.02-.01-.01-.01-.03-.02-.03-.01-.04-.02-.03-.01-.01-.01-.037-.01v-.01l-.06-.02-.04-.02-.02-.01h-.04c-.02-.01-.03-.01-.05-.02H8.8l-.03-.01h-.03l-.03-.01-.02-.01h-.04l-.04-.01-.02-.01h-.11l-.046-.01H8.2l-.03-.01c-.02-.01-.04-.02-.06-.04-.01-.02-.03-.04-.04-.06-.01-.02-.02-.04-.02-.06v-.06c.003-.03.01-.05.02-.07.005-.01.01-.02.02-.03.012-.02.03-.04.05-.05.01-.01.02-.01.03-.02.02-.01.04-.01.06-.01h.04zM8.562 5c.01 0 .02 0 .03.002.01 0 .02 0 .03.002l.034.003c.07.006.142.016.212.03l.07.016.017.005.076.02.04.013.03.01c.03.01.06.03.09.04l.01.01.04.02.06.03.02.01c.01.01.02.01.03.02.01.01.03.02.04.03.04.02.07.05.1.07l.07.06.06.06.04.05.02.02.02.02.03.04.06.09.05.09.04.08.03.07c.03.07.04.13.06.2.02.06.03.13.04.19l.01.1.01.09v.04c0 .03-.01.05-.02.07-.01.02-.03.05-.05.06-.02.02-.04.03-.07.04-.02.01-.04.01-.06.01-.02 0-.04 0-.06-.01l-.07-.03c-.02-.02-.04-.03-.06-.06-.01-.02-.02-.04-.03-.07v-.11l-.01-.07-.01-.08-.01-.07-.01-.04c0-.01-.01-.03-.01-.04-.02-.08-.06-.16-.1-.24l-.04-.04-.03-.04-.03-.03-.01-.02-.05-.04-.04-.04-.04-.03c-.01-.01-.02-.01-.04-.02l-.06-.04-.04-.02-.02-.01h-.01L9 5.54l-.06-.02-.06-.01h-.05L8.8 5.5l-.024-.005h-.03l-.04-.01h-.17l-.01-.05H8.5c-.02-.003-.036-.01-.053-.02-.023-.014-.043-.03-.06-.053-.012-.02-.023-.04-.03-.06-.005-.02-.008-.04-.008-.06 0-.025 0-.05.01-.076s.02-.047.04-.066l.04-.03c.02-.01.04-.02.06-.02L8.54 5h.02z"/></svg></span>Viber</a></li>*/
/* 		<li><a class="waves-effect waves-default" href="//web.skype.com/share?url={{ share }}" rel="nofollow noopener" target="_blank"><span class="side-share__item">*/
/* 		<svg class="skype" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">*/
/* 		<path d="M8.035 12.6c-2.685 0-3.885-1.322-3.885-2.313 0-.51.374-.865.89-.865 1.15 0 .85 1.653 2.995 1.653 1.096 0 1.703-.597 1.703-1.208 0-.368-.18-.775-.904-.954l-2.387-.597C4.524 7.833 4.175 6.79 4.175 5.812c0-2.034 1.91-2.798 3.704-2.798 1.65 0 3.6.916 3.6 2.136 0 .523-.46.827-.97.827-.98 0-.8-1.36-2.78-1.36-.98 0-1.53.444-1.53 1.08 0 .636.77.84 1.44.993l1.76.392c1.93.433 2.42 1.566 2.42 2.633 0 1.652-1.27 2.886-3.82 2.886m7.4-3.26l-.02.09-.03-.16c.01.03.03.05.04.08.08-.45.12-.91.12-1.37 0-1.02-.2-2.01-.6-2.95-.38-.9-.93-1.71-1.62-2.4-.7-.69-1.5-1.24-2.4-1.62C10.01.59 9.02.39 8 .39c-.48 0-.964.047-1.43.137l.08.04-.16-.023.08-.016C5.927.183 5.205 0 4.472 0 3.278 0 2.155.466 1.31 1.313.465 2.16 0 3.286 0 4.483c0 .763.195 1.512.563 2.175l.013-.083.028.16-.04-.077c-.076.43-.115.867-.115 1.305 0 1.022.2 2.014.59 2.948.38.91.92 1.72 1.62 2.41.69.7 1.5 1.24 2.4 1.63.93.4 1.92.6 2.94.6.44 0 .89-.04 1.32-.12l-.08-.04.16.03-.09.02c.67.38 1.42.58 2.2.58 1.19 0 2.31-.46 3.16-1.31.84-.84 1.31-1.97 1.31-3.17 0-.76-.2-1.51-.57-2.18" fill-rule="nonzero"/>*/
/* 		</svg></span>Skype</a></li>*/
/* 	</ul>*/
/* </aside>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	// Wishlist button*/
/* 	var wishlistBtn = $('#wishlist-btn'),*/
/* 		originalColor = wishlistBtn.css('color'),*/
/* 		originalText = wishlistBtn.text();*/
/* */
/* 	wishlistBtn.click(function(){*/
/* 		$(this).text("favorite").addClass('red-text');*/
/* 		originalText = 'favorite';*/
/* 	}).hover(function() {*/
/* 		$(this).text("favorite").css('color','#ef5350').addClass('scale');*/
/* 	}, function() {*/
/* 		$(this).text(originalText).css('color',originalColor).removeClass('scale');*/
/* 	});*/
/* */
/* 	// Share side*/
/* 	$('#side-share').sidenav({edge:'right'});*/
/* */
/* 	{% if images %}*/
/* 	// Photo slider*/
/* 	$('.slider-for').not('.slick-initialized').slick({*/
/* 		slidesToShow: 1,*/
/* 		slidesToScroll: 1,*/
/* 		arrows: true,*/
/* 		fade: true,*/
/* 		mobileFirst: true,*/
/* 		asNavFor: '.slider-nav'*/
/* 	});*/
/* 	$('.slider-nav').not('.slick-initialized').slick({*/
/* 		slidesToShow: 4,*/
/* 		slidesToScroll: 4,*/
/* 		asNavFor: '.slider-for',*/
/* 		centerMode: false,*/
/* 		arrows: false,*/
/* 		infinite: false,*/
/* 		focusOnSelect: true*/
/* 	});*/
/* 	{% endif %}*/
/* 	{% if products %}*/
/* 	// Goods slider*/
/* 	$('.slick-goods').not('.slick-initialized').slick({*/
/* 		dots: true,*/
/* 		infinite: true,*/
/* 		speed: 300,*/
/* 		autoplay: true,*/
/* 		autoplaySpeed: 2000,*/
/* 		slidesToShow: 3,*/
/* 		slidesToScroll: 3,*/
/* 		responsive: [*/
/* 			{*/
/* 				breakpoint: 921,*/
/* 				settings: {*/
/* 					slidesToShow: 2,*/
/* 					slidesToScroll: 2*/
/* 				}*/
/* 			},*/
/* 			{*/
/* 				breakpoint: 601,*/
/* 				settings: {*/
/* 					slidesToShow: 1,*/
/* 					slidesToScroll: 1*/
/* 				}*/
/* 			}*/
/* 		]*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	// Reviews*/
/* 	var modalReview = $('#modal-review'),*/
/* 		inputName = $('#input-name'),*/
/* 		inputReview = $('#input-review'),*/
/* 		review = $('#review');*/
/* */
/* 	review.delegate('.pagination a', 'click', function(e) {*/
/* 		e.preventDefault();*/
/* 		review.load(this.href);*/
/* 	});*/
/* 	$('.rating-input label').hover(function() {*/
/* 		$(this).addClass('rating-input-active');*/
/* 		$(this).prevAll('.rating-input label').addClass('rating-input-active');*/
/* 	}, function () {*/
/* 		$(this).removeClass('rating-input-active');*/
/* 		$(this).prevAll('.rating-input label').removeClass('rating-input-active');*/
/* 	});*/
/* 	$('.rating-input label').click(function() {*/
/* 		$('.rating-input label').each(function() {*/
/* 			$(this).removeClass('rating-input-checked');*/
/* 			$(this).prevAll('.rating-input label').removeClass('rating-input-checked');*/
/* 		});*/
/* 		$(this).addClass('rating-input-checked');*/
/* 		$(this).prevAll('.rating-input label').addClass('rating-input-checked');*/
/* 	});*/
/* 	review.load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* 	$('#button-review').on('click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: $("#form-review").serialize(),*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					M.toast({html: '<i class="material-icons left">warning</i>' + json['error'], classes: 'toast-warning'});*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					M.toast({html: '<i class="material-icons left">check</i>' + json['success'], classes: 'toast-success'});*/
/* 					inputName.val('');*/
/* 					inputName.parent().find('label').removeClass('active');*/
/* 					inputReview.val('');*/
/* 					M.textareaAutoResize(inputReview);*/
/* 					inputReview.parent().find('label').removeClass('active');*/
/* 					modalReview.modal('close');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 		grecaptcha.reset();*/
/* 	});*/
/* 	{% if recurrings %}*/
/* 		$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=product/product/getRecurringDescription',*/
/* 				type: 'post',*/
/* 				data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 				dataType: 'json',*/
/* 				beforeSend: function() {*/
/* 					$('#recurring-description').html('');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					if (json['success']) {*/
/* 						$('#recurring-description').html('<blockquote class="blockquote-note blue-grey lighten-5 center section">' + json['success'] + '</blockquote>');*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	{% endif %}*/
/* 	{% if options %}*/
/* 	$('div[id^=\'button-upload\']').on('click', function() {*/
/* 		var node = this;*/
/* 		$('#form-upload').remove();*/
/* 		$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display:none;"><input type="file" name="file"></form><div id="modal-loading" class="modal"><div class="modal-content"><div class="row valign-wrapper"><div class="col s4 m3 center"><div class="preloader-wrapper active"><div class="spinner-layer spinner-blue"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-yellow"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div><div class="spinner-layer spinner-green"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div><div class="col s10 m9"><p id="loading-text" class="flow-text text-bold">{{ text_loading }}</p></div></div></div></div>');*/
/* 		$('#form-upload input[name=\'file\']').trigger('click');*/
/* 		if (typeof timer != 'undefined') {*/
/* 			clearInterval(timer);*/
/* 		}*/
/* 		timer = setInterval(function() {*/
/* 			if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 				clearInterval(timer);*/
/* 				$('#modal-loading').modal({*/
/* 					dismissible: false,*/
/* 					opacity: .7,*/
/* 					endingTop: '40%',*/
/* 				}).modal('open');*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=tool/upload',*/
/* 					type: 'post',*/
/* 					dataType: 'json',*/
/* 					data: new FormData($('#form-upload')[0]),*/
/* 					cache: false,*/
/* 					contentType: false,*/
/* 					processData: false,*/
/* 					success: function(json) {*/
/* 						if (json['error']) {*/
/* 							$('#modal-loading').modal('close').remove();*/
/* 							M.toast({html: '<span><i class="material-icons left">warning</i>'+json["error"]+'</span>', classes: 'toast-warning'});*/
/* 						}*/
/* 						if (json['success']) {*/
/* 							$('#modal-loading').modal('close').remove();*/
/* 							M.toast({html: '<span><i class="material-icons left">check</i>'+json["success"]+'</span>', classes: 'toast-success'});*/
/* 							$(node).parent().find('input').val(json['code']);*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		}, 500);*/
/* 	});*/
/* */
/* 	$('.datepicker').datepicker({*/
/* 		format: 'yyyy-mm-dd',*/
/* 		firstDay: {{ first_day }},*/
/* 		i18n: {*/
/* 			clear: '{{ button_datetime_clear }}',*/
/* 			today: '{{ button_date_today }}',*/
/* 			done: '{{ button_datetime_done }}',*/
/* 			months: ['{{ text_months_full_january }}', '{{ text_months_full_february }}', '{{ text_months_full_march }}', '{{ text_months_full_april }}', '{{ text_months_full_may }}', '{{ text_months_full_june }}', '{{ text_months_full_july }}', '{{ text_months_full_august }}', '{{ text_months_full_september }}', '{{ text_months_full_october }}', '{{ text_months_full_november }}', '{{ text_months_full_december }}'],*/
/* 			monthsShort: ['{{ text_months_short_january }}', '{{ text_months_short_february }}', '{{ text_months_short_march }}', '{{ text_months_short_april }}', '{{ text_months_short_may }}', '{{ text_months_short_june }}', '{{ text_months_short_july }}', '{{ text_months_short_august }}', '{{ text_months_short_september }}', '{{ text_months_short_october }}', '{{ text_months_short_november }}', '{{ text_months_short_december }}'],*/
/* 			weekdays: ['{{ text_weekdays_full_sunday }}', '{{ text_weekdays_full_monday }}', '{{ text_weekdays_full_tuesday }}', '{{ text_weekdays_full_wednesday }}', '{{ text_weekdays_full_thursday }}', '{{ text_weekdays_full_friday }}', '{{ text_weekdays_full_saturday }}'],*/
/* 			weekdaysShort: ['{{ text_weekdays_short_sunday }}', '{{ text_weekdays_short_monday }}', '{{ text_weekdays_short_tuesday }}', '{{ text_weekdays_short_wednesday }}', '{{ text_weekdays_short_thursday }}', '{{ text_weekdays_short_friday }}', '{{ text_weekdays_short_saturday }}'],*/
/* 			weekdaysAbbrev: ['{{ text_weekdays_short_sunday }}', '{{ text_weekdays_short_monday }}', '{{ text_weekdays_short_tuesday }}', '{{ text_weekdays_short_wednesday }}', '{{ text_weekdays_short_thursday }}', '{{ text_weekdays_short_friday }}', '{{ text_weekdays_short_saturday }}']*/
/* 		}*/
/* 	});*/
/* */
/* 	$('.timepicker').timepicker({*/
/* 		defaultTime: 'now',*/
/* 		autoclose: true,*/
/* 		i18n: {*/
/* 			clear: '{{ button_datetime_clear }}',*/
/* 			cancel: '{{ button_datetime_done }}',*/
/* 			done: '{{ button_time_done }}',*/
/* 			twelvehour: {{ twelve_hour }}*/
/* 		}*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	// Add to cart*/
/* 	var addCart = $('#button-cart'),*/
/* 		buttonCart = $('#cart'),*/
/* 		cartTotal = $('#cart-total'),*/
/* 		modalCartContent = $('#modal-cart-content');*/
/* */
/* 	addCart.on('click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/cart/add',*/
/* 			type: 'post',*/
/* 			data: $('#product input[type=\'number\'], #product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'file\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					if (json['error']['option']) {*/
/* 						for (i in json['error']['option']) {*/
/* 							M.toast({html: '<span><i class="material-icons left">warning</i>' + json["error"]["option"][i] + '</span>', classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 					if (json['error']['recurring']) {*/
/* 						M.toast({html: '<span><i class="material-icons left">warning</i>' + json["error"]["recurring"] + '</span>', classes: 'toast-warning'});*/
/* 					}*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					M.toast({html: '<span><i class="material-icons left">check</i>' + json['success'] + '</span>', classes: 'toast-success'});*/
/* 					setTimeout(function () {*/
/* 						$('#cart-total').html(json['total']);*/
/* 					}, 100);*/
/* 					buttonCart.addClass('pulse');*/
/* 					cartTotal.addClass('pulse');*/
/* 					modalCartContent.load('index.php?route=common/cart/info #modal-cart-list');*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Update price*/
/* 	$("#product input[type='checkbox']").click(function() {changePrice();});*/
/* 	$("#product input[type='radio']").click(function() {changePrice();});*/
/* 	$("#product select").change(function() {changePrice();});*/
/* */
/* 	var quantity = $('#input-quantity'),*/
/* 		quantityMinus = $('#quantity-minus'),*/
/* 		quantityPlus = $('#quantity-plus'),*/
/* 		newPrices = $('.new-prices'),*/
/* 		oldPrices = $('.old-prices');*/
/* */
/* 	quantity.blur(function() {*/
/* 		if (quantity.val() < {{ minimum }}) {*/
/* 			quantity.val({{ minimum }});*/
/* 			quantityMinus.addClass('grey-text');*/
/* 			M.toast({html: '<span><i class="material-icons left">warning</i>{{ text_minimum }}</span>', classes: 'toast-warning'});*/
/* 			changePrice();*/
/* 		} else {*/
/* 			changePrice();*/
/* 			if (quantity.val() > {{ minimum }}) {*/
/* 				quantityMinus.removeClass('grey-text');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* */
/* 	quantityMinus.click(function () {*/
/* 		var count = parseInt(quantity.val()) - 1;*/
/* 		if (count < {{ minimum }}) {*/
/* 			count = {{ minimum }};*/
/* 			M.toast({html: '<span><i class="material-icons left">warning</i>{{ text_minimum }}</span>', classes: 'toast-warning'});*/
/* 		}*/
/* 		quantity.val(count);*/
/* 		quantity.change();*/
/* 		changePrice();*/
/* 		if (quantity.val() == 1 || quantity.val() == {{ minimum }}) {*/
/* 			quantityMinus.addClass('grey-text');*/
/* 		}*/
/* */
/* 		return false;*/
/* 	});*/
/* */
/* 	quantityPlus.click(function () {*/
/* 		quantity.val(parseInt(quantity.val()) + 1);*/
/* 		quantity.change();*/
/* 		changePrice();*/
/* 		if (quantity.val() > {{ minimum }}) {*/
/* 			quantityMinus.removeClass('grey-text');*/
/* 		}*/
/* */
/* 		return false;*/
/* 	});*/
/* */
/* 	function changePrice() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=product/product/updatePrice&product_id={{ product_id }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: $('#product input[name=\'quantity\'], #product select, #product input[type=\'checkbox\']:checked, #product input[type=\'radio\']:checked'),*/
/* 			success: function(json) {*/
/* 				if (json['new_price_found']) {*/
/* 					newPrices.html(json['total_price']);*/
/* 				} else {*/
/* 					oldPrices.html(json['total_price']);*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
