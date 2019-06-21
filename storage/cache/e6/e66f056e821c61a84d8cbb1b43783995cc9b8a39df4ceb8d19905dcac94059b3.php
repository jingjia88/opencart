<?php

/* __string_template__1cffb6a28ae13b1cac0fd9bea180211dd437e1e0cc7941746da72f44a6df41dd */
class __TwigTemplate_ab74b876acd3eed045789d1bd66862be029b169e56330596fe2a8f4d90e52f4c extends Twig_Template
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
        echo "
<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"BreadcrumbList\",
\t\"itemListElement\": [
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 10
            echo "\t\t";
            if (($context["key"] < (twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) - 1))) {
                // line 11
                echo "\t\t\t";
                if (($context["key"] == 0)) {
                    // line 12
                    echo "\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                    // line 15
                    echo $context["key"];
                    echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                    // line 17
                    echo $this->getAttribute($context["breadcrumb"], "href", array());
                    echo "\",
\t\t\t\t\t\"name\": \"";
                    // line 18
                    echo $this->getAttribute($context["breadcrumb"], "text", array());
                    echo "\"
\t\t\t\t}
\t\t\t},
\t\t\t";
                }
                // line 22
                echo "\t\t";
            } else {
                // line 23
                echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                // line 25
                echo $context["key"];
                echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                // line 27
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\",
\t\t\t\t\t\"name\": \"";
                // line 28
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "\"
\t\t\t\t}
\t\t\t}
\t\t";
            }
            // line 32
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t]
}
</script>
";
        // line 36
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 37
            echo "\t";
            $context["main"] = "s12 l6";
        } elseif ((        // line 38
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 39
            echo "\t";
            $context["main"] = "s12 l9";
        } else {
            // line 41
            echo "\t";
            $context["main"] = "s12";
        }
        // line 43
        echo "<main>
\t<div class=\"container\">
\t\t<nav id=\"breadcrumbs\" class=\"breadcrumb-wrapper transparent z-depth-0\">
\t\t\t<span class=\"breadcrumb-blur hide-on-med-and-up\"></span>
\t\t\t<div class=\"nav-wrapper breadcrumb-wrap href-underline\">
\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 49
            echo "\t\t\t\t\t";
            if (($context["key"] < (twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) - 1))) {
                // line 50
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\" class=\"breadcrumb waves-effect black-text\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t<span class=\"breadcrumb blue-grey-text text-darken-3\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span>
\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t</div>
\t\t</nav>
\t\t<h1>";
        // line 57
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t<div class=\"row\">
\t\t\t";
        // line 59
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t\t<div class=\"col ";
        // line 60
        echo (isset($context["main"]) ? $context["main"] : null);
        echo " section href-underline\">
\t\t\t\t";
        // line 61
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t<ul id=\"accordion\" class=\"collapsible popout\" data-collapsible=\"accordion\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<div class=\"collapsible-header grey lighten-4 text-bold\">";
        // line 64
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"collapse-checkout-option\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 67
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 68
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold active\">";
            // line 69
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</div>
\t\t\t\t\t\t<div id=\"collapse-payment-address\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
            // line 74
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</div>
\t\t\t\t\t\t<div id=\"collapse-payment-address\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t";
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 79
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
            // line 80
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</div>
\t\t\t\t\t\t<div id=\"collapse-shipping-address\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
            // line 84
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</div>
\t\t\t\t\t\t<div id=\"collapse-shipping-method\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
        // line 89
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"collapse-payment-method\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"collapsible-header-disable grey lighten-4 text-bold\">";
        // line 93
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"collapse-checkout-confirm\" class=\"collapsible-body white\"></div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t";
        // line 97
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 99
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$(document).on('change', 'input[name=\\'account\\']', function() {
\t\tif (\$('#collapse-payment-address').parent().find('div:first')) {
\t\t\tif (this.value == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 108
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 110
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t\t}
\t\t} else {
\t\t\tif (this.value == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 114
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 116
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t\t}
\t\t}
\t});

\t";
        // line 121
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 122
            echo "\t\$(document).ready(function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/login',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#collapse-checkout-option').html(html);
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-header').html('";
            // line 128
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo "');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t";
        } else {
            // line 136
            echo "\t\$(document).ready(function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#collapse-checkout-option').parent().removeClass('active');
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-header').removeClass('collapsible-header').addClass('collapsible-header-disable');
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-body').css('display','');
\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 144
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "');
\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\$('#collapse-payment-address').parent().addClass('active');
\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-address').parent().offset().top-100},1150);
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t";
        }
        // line 156
        echo "
\t// Checkout
\t\$(document).delegate('#button-account', 'click', function() {
\t\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#collapse-checkout-option').parent().removeClass('active');
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\$('#collapse-checkout-option').parent().find('.collapsible-body').css('display','');
\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\$('#collapse-payment-address').parent().addClass('active');
\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 170
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t\t\t} else {
\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 172
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t\t\t}
\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-address').parent().offset().top-100},1150);
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Login
\t\$(document).delegate('#button-login', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/login/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-checkout-option :input'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Register
\t\$(document).delegate('#button-register', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/register/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}

\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t";
        // line 223
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 224
            echo "\t\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('div:first').html('";
            // line 235
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').html(html);
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 245
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().addClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('";
            // line 248
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 249
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-100},1150);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 265
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().addClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').html('";
            // line 268
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('";
            // line 269
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 270
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-address').parent().offset().top-100},1150);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t";
        } else {
            // line 279
            echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-payment-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 287
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 290
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-method').parent().offset().top-50},1150);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 298
        echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('div:first').html('";
        // line 303
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Payment Address
\t\$(document).delegate('#button-payment-address', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_address/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\tif (\$(element).parent()) {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t";
        // line 341
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 342
            echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 350
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-address').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').html('";
            // line 354
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('";
            // line 355
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 356
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t}).done(function() {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t";
        } else {
            // line 374
            echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-payment-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 382
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
            // line 386
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t}).done(function() {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 404
        echo "\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Shipping Address
\t\$(document).delegate('#button-shipping-address', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/shipping_address/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\tif (\$(element).parent()) {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 443
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('";
        // line 447
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('";
        // line 448
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t}).done(function() {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Guest
\t\$(document).delegate('#button-guest', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/guest/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'][i], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\tif (\$(element).parent()) {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t";
        // line 506
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 507
            echo "\t\t\t\t\tvar shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/guest_shipping',
\t\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header-disable').html('";
            // line 518
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').html(html);
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 528
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().addClass('active');
\t\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('div:first').html('";
            // line 532
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
            // line 533
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/guest_shipping',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').html(html);
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 548
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().addClass('active');
\t\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-address').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('div:first').html('";
            // line 552
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('div:first').html('";
            // line 553
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
            // line 554
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t";
        } else {
            // line 562
            echo "\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-payment-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
            // line 570
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-payment-method').parent().offset()},1150);
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
            // line 574
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 581
        echo "\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Guest Shipping
\t\$(document).delegate('#button-guest-shipping', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/guest_shipping/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\tif (\$(element).parent()) {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'][i], classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 620
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('div:first').html('";
        // line 624
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
        // line 625
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$(document).delegate('#button-shipping-method', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/shipping_method/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-payment-method').html(html);
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 661
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().addClass('active');
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop:\$('#collapse-shipping-method').parent().offset().top-50},1150);
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('div:first').html('";
        // line 665
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$(document).delegate('#button-payment-method', 'click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_method/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error']['warning'], classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/confirm',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-header').removeClass('active');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.collapsible-body').css('display','');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').html(html);
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('";
        // line 701
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.collapsible-body').css('display','block');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().addClass('active');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 719
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__1cffb6a28ae13b1cac0fd9bea180211dd437e1e0cc7941746da72f44a6df41dd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1025 => 719,  1004 => 701,  965 => 665,  958 => 661,  919 => 625,  915 => 624,  908 => 620,  867 => 581,  857 => 574,  850 => 570,  840 => 562,  829 => 554,  825 => 553,  821 => 552,  814 => 548,  796 => 533,  792 => 532,  785 => 528,  772 => 518,  759 => 507,  757 => 506,  696 => 448,  692 => 447,  685 => 443,  644 => 404,  623 => 386,  616 => 382,  606 => 374,  585 => 356,  581 => 355,  577 => 354,  570 => 350,  560 => 342,  558 => 341,  517 => 303,  510 => 298,  499 => 290,  493 => 287,  483 => 279,  471 => 270,  467 => 269,  463 => 268,  457 => 265,  438 => 249,  434 => 248,  428 => 245,  415 => 235,  402 => 224,  400 => 223,  346 => 172,  341 => 170,  325 => 156,  310 => 144,  300 => 136,  289 => 128,  281 => 122,  279 => 121,  271 => 116,  266 => 114,  259 => 110,  254 => 108,  242 => 99,  237 => 97,  230 => 93,  223 => 89,  220 => 88,  213 => 84,  206 => 80,  203 => 79,  200 => 78,  193 => 74,  190 => 73,  183 => 69,  180 => 68,  178 => 67,  172 => 64,  166 => 61,  162 => 60,  158 => 59,  153 => 57,  149 => 55,  143 => 54,  137 => 52,  129 => 50,  126 => 49,  122 => 48,  115 => 43,  111 => 41,  107 => 39,  105 => 38,  102 => 37,  100 => 36,  95 => 33,  89 => 32,  82 => 28,  78 => 27,  73 => 25,  69 => 23,  66 => 22,  59 => 18,  55 => 17,  50 => 15,  46 => 13,  43 => 12,  40 => 11,  37 => 10,  33 => 9,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% spaceless %}*/
/* */
/* <script type="application/ld+json">*/
/* {*/
/* 	"@context": "http://schema.org",*/
/* 	"@type": "BreadcrumbList",*/
/* 	"itemListElement": [*/
/* 	{% for key, breadcrumb in breadcrumbs %}*/
/* 		{% if key < breadcrumbs|length - 1 %}*/
/* 			{% if key == 0 %}*/
/* 			{% else %}*/
/* 			{*/
/* 				"@type": "ListItem",*/
/* 				"position": {{ key }},*/
/* 				"item": {*/
/* 					"@id": "{{ breadcrumb.href }}",*/
/* 					"name": "{{ breadcrumb.text }}"*/
/* 				}*/
/* 			},*/
/* 			{% endif %}*/
/* 		{% else %}*/
/* 			{*/
/* 				"@type": "ListItem",*/
/* 				"position": {{ key }},*/
/* 				"item": {*/
/* 					"@id": "{{ breadcrumb.href }}",*/
/* 					"name": "{{ breadcrumb.text }}"*/
/* 				}*/
/* 			}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	]*/
/* }*/
/* </script>*/
/* {% if column_left and column_right %}*/
/* 	{% set main = 's12 l6' %}*/
/* {% elseif column_left or column_right %}*/
/* 	{% set main = 's12 l9' %}*/
/* {% else %}*/
/* 	{% set main = 's12' %}*/
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
/* 		<h1>{{ heading_title }}</h1>*/
/* 		<div class="row">*/
/* 			{{ column_left }}*/
/* 			<div class="col {{ main }} section href-underline">*/
/* 				{{ content_top }}*/
/* 				<ul id="accordion" class="collapsible popout" data-collapsible="accordion">*/
/* 					<li class="active">*/
/* 						<div class="collapsible-header grey lighten-4 text-bold">{{ text_checkout_option }}</div>*/
/* 						<div id="collapse-checkout-option" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					{% if not logged and account != 'guest' %}*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold active">{{ text_checkout_account }}</div>*/
/* 						<div id="collapse-payment-address" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					{% else %}*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_payment_address }}</div>*/
/* 						<div id="collapse-payment-address" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					{% endif %}*/
/* 					{% if shipping_required %}*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_shipping_address }}</div>*/
/* 						<div id="collapse-shipping-address" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_shipping_method }}</div>*/
/* 						<div id="collapse-shipping-method" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					{% endif %}*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_payment_method }}</div>*/
/* 						<div id="collapse-payment-method" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 					<li>*/
/* 						<div class="collapsible-header-disable grey lighten-4 text-bold">{{ text_checkout_confirm }}</div>*/
/* 						<div id="collapse-checkout-confirm" class="collapsible-body white"></div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$(document).on('change', 'input[name=\'account\']', function() {*/
/* 		if ($('#collapse-payment-address').parent().find('div:first')) {*/
/* 			if (this.value == 'register') {*/
/* 				$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_account }}');*/
/* 			} else {*/
/* 				$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_payment_address }}');*/
/* 			}*/
/* 		} else {*/
/* 			if (this.value == 'register') {*/
/* 				$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_account }}');*/
/* 			} else {*/
/* 				$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_payment_address }}');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* */
/* 	{% if not logged %}*/
/* 	$(document).ready(function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/login',*/
/* 			dataType: 'html',*/
/* 			success: function(html) {*/
/* 				$('#collapse-checkout-option').html(html);*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-header').html('{{ text_checkout_option }}');*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* 	{% else %}*/
/* 	$(document).ready(function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/payment_address',*/
/* 			dataType: 'html',*/
/* 			success: function(html) {*/
/* 				$('#collapse-checkout-option').parent().removeClass('active');*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-header').removeClass('collapsible-header').addClass('collapsible-header-disable');*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-body').css('display','');*/
/* 				$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_address }}');*/
/* 				$('#collapse-payment-address').parent().find('.collapsible-body').css('display','block');*/
/* 				$('#collapse-payment-address').parent().addClass('active');*/
/* 				$('#collapse-payment-address').html(html);*/
/* 				$('html,body').animate({scrollTop:$('#collapse-payment-address').parent().offset().top-100},1150);*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* 	{% endif %}*/
/* */
/* 	// Checkout*/
/* 	$(document).delegate('#button-account', 'click', function() {*/
/* 			$.ajax({*/
/* 			url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val(),*/
/* 			dataType: 'html',*/
/* 			success: function(html) {*/
/* 				$('#collapse-checkout-option').parent().removeClass('active');*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-header').removeClass('active');*/
/* 				$('#collapse-checkout-option').parent().find('.collapsible-body').css('display','');*/
/* 				$('#collapse-payment-address').parent().find('.collapsible-body').css('display','block');*/
/* 				$('#collapse-payment-address').parent().addClass('active');*/
/* 				$('#collapse-payment-address').html(html);*/
/* 				if ($('input[name=\'account\']:checked').val() == 'register') {*/
/* 					$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_account }}');*/
/* 				} else {*/
/* 					$('#collapse-payment-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_address }}');*/
/* 				}*/
/* 				$('html,body').animate({scrollTop:$('#collapse-payment-address').parent().offset().top-100},1150);*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Login*/
/* 	$(document).delegate('#button-login', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/login/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-checkout-option :input'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Register*/
/* 	$(document).delegate('#button-register', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/register/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* */
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 					}*/
/* 				} else {*/
/* 					{% if shipping_required %}*/
/* 					var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* 					if (shipping_address) {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/shipping_method',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$.ajax({*/
/* 									url: 'index.php?route=checkout/shipping_address',*/
/* 									dataType: 'html',*/
/* 									success: function(html) {*/
/* 										$('#collapse-shipping-address').html(html);*/
/* 										$('#collapse-shipping-address').parent().find('div:first').html('{{ text_checkout_shipping_address }}');*/
/* 									},*/
/* 									error: function(xhr, ajaxOptions, thrownError) {*/
/* 										alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 									}*/
/* 								});*/
/* 								$('#collapse-payment-address').parent().removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('div:first').removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 								$('#collapse-shipping-method').html(html);*/
/* 								$('#collapse-shipping-method').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_method }}');*/
/* 								$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');*/
/* 								$('#collapse-shipping-method').parent().addClass('active');*/
/* 								$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_payment_method }}');*/
/* 								$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 								$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-100},1150);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					} else {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/shipping_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-payment-address').parent().removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 								$('#collapse-shipping-address').html(html);*/
/* 								$('#collapse-shipping-address').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_address }}');*/
/* 								$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');*/
/* 								$('#collapse-shipping-address').parent().addClass('active');*/
/* 								$('#collapse-shipping-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_shipping_method }}');*/
/* 								$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_payment_method }}');*/
/* 								$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 								$('html,body').animate({scrollTop:$('#collapse-shipping-address').parent().offset().top-100},1150);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 					{% else %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-method').parent().removeClass('active');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-payment-method').html(html);*/
/* 							$('#collapse-payment-method').parent().find('div:first').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-payment-method').parent().addClass('active');*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-payment-method').parent().offset().top-50},1150);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 					{% endif %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address').html(html);*/
/* 							$('#collapse-payment-address').parent().find('div:first').html('{{ text_checkout_payment_address }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Payment Address*/
/* 	$(document).delegate('#button-payment-address', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/payment_address/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 						if ($(element).parent()) {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						} else {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					{% if shipping_required %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address').parent().removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-shipping-address').html(html);*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_address }}');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-shipping-address').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-shipping-address').parent().offset().top-50},1150);*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					}).done(function() {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/payment_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-payment-address').html(html);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 					{% else %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address').parent().removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-payment-method').html(html);*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-payment-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-payment-method').parent().offset().top-50},1150);*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					}).done(function() {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/payment_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-payment-address').html(html);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 					{% endif %}*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Shipping Address*/
/* 	$(document).delegate('#button-shipping-address', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/shipping_address/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						if ($(element).parent()) {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						} else {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-address').parent().removeClass('active');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-shipping-method').html(html);*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-shipping-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-50},1150);*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').html('{{ text_checkout_confirm }}');*/
/* 							$.ajax({*/
/* 								url: 'index.php?route=checkout/shipping_address',*/
/* 								dataType: 'html',*/
/* 								success: function(html) {*/
/* 									$('#collapse-shipping-address').html(html);*/
/* 								},*/
/* 								error: function(xhr, ajaxOptions, thrownError) {*/
/* 									alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 								}*/
/* 							});*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					}).done(function() {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/payment_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-payment-address').html(html);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Guest*/
/* 	$(document).delegate('#button-guest', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/guest/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'][i], classes: 'toast-warning'});*/
/* 					}*/
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-payment-' + i.replace('_', '-'));*/
/* 						if ($(element).parent()) {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						} else {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					{% if shipping_required %}*/
/* 					var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* 					if (shipping_address) {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/shipping_method',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$.ajax({*/
/* 									url: 'index.php?route=checkout/guest_shipping',*/
/* 									dataType: 'html',*/
/* 									success: function(html) {*/
/* 										$('#collapse-shipping-address').html(html);*/
/* 										$('#collapse-shipping-address').parent().find('.collapsible-header-disable').html('{{ text_checkout_shipping_address }}');*/
/* 									},*/
/* 									error: function(xhr, ajaxOptions, thrownError) {*/
/* 										alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 									}*/
/* 								});*/
/* 								$('#collapse-payment-address').parent().removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 								$('#collapse-shipping-method').html(html);*/
/* 								$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_method }}');*/
/* 								$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');*/
/* 								$('#collapse-shipping-method').parent().addClass('active');*/
/* 								$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-50},1150);*/
/* 								$('#collapse-payment-method').parent().find('div:first').html('{{ text_checkout_payment_method }}');*/
/* 								$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					} else {*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/guest_shipping',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-shipping-address').html(html);*/
/* 								$('#collapse-payment-address').parent().removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 								$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 								$('#collapse-shipping-address').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_address }}');*/
/* 								$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','block');*/
/* 								$('#collapse-shipping-address').parent().addClass('active');*/
/* 								$('html,body').animate({scrollTop:$('#collapse-shipping-address').parent().offset().top-50},1150);*/
/* 								$('#collapse-shipping-method').parent().find('div:first').html('{{ text_checkout_shipping_method }}');*/
/* 								$('#collapse-payment-method').parent().find('div:first').html('{{ text_checkout_payment_method }}');*/
/* 								$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 					{% else %}*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address').parent().removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-payment-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-payment-method').html(html);*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-payment-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-payment-method').parent().offset()},1150);*/
/* 							$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 					{% endif %}*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Guest Shipping*/
/* 	$(document).delegate('#button-guest-shipping', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/guest_shipping/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 					for (i in json['error']) {*/
/* 						var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* 						if ($(element).parent()) {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						} else {*/
/* 							M.toast({html: '<i class="material-icons left">warning</i>' + json['error'][i], classes: 'toast-warning'});*/
/* 						}*/
/* 					}*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-address').parent().removeClass('active');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-shipping-address').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-shipping-method').html(html);*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-shipping-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-50},1150);*/
/* 							$('#collapse-payment-method').parent().find('div:first').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	$(document).delegate('#button-shipping-method', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/shipping_method/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_method',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-method').parent().removeClass('active');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-shipping-method').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-payment-method').html(html);*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-payment-method').parent().addClass('active');*/
/* 							$('html,body').animate({scrollTop:$('#collapse-shipping-method').parent().offset().top-50},1150);*/
/* 							$('#collapse-checkout-confirm').parent().find('div:first').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	$(document).delegate('#button-payment-method', 'click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/payment_method/save',*/
/* 			type: 'post',*/
/* 			data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				} else if (json['error']) {*/
/* 					if (json['error']['warning']) {*/
/* 						M.toast({html: '<i class="material-icons left">warning</i>' + json['error']['warning'], classes: 'toast-warning'});*/
/* 					}*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/confirm',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-method').parent().removeClass('active');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-header').removeClass('active');*/
/* 							$('#collapse-payment-method').parent().find('.collapsible-body').css('display','');*/
/* 							$('#collapse-checkout-confirm').html(html);*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-header-disable').removeClass('collapsible-header-disable').addClass('collapsible-header active').html('{{ text_checkout_confirm }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.collapsible-body').css('display','block');*/
/* 							$('#collapse-checkout-confirm').parent().addClass('active');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
/* */
