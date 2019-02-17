<?php

/* materialize/template/affiliate/login.twig */
class __TwigTemplate_9e967b51bfc1ce378bee9aa95c764e632004efb9de01bbf87f12c2f397606380 extends Twig_Template
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
                echo "\t\t\t";
                if (($context["key"] == 0)) {
                    // line 11
                    echo "\t\t\t";
                } else {
                    // line 12
                    echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                    // line 14
                    echo $context["key"];
                    echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                    // line 16
                    echo $this->getAttribute($context["breadcrumb"], "href", array());
                    echo "\",
\t\t\t\t\t\"name\": \"";
                    // line 17
                    echo $this->getAttribute($context["breadcrumb"], "text", array());
                    echo "\"
\t\t\t\t}
\t\t\t},
\t\t\t";
                }
                // line 21
                echo "\t\t";
            } else {
                // line 22
                echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                // line 24
                echo $context["key"];
                echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                // line 26
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\",
\t\t\t\t\t\"name\": \"";
                // line 27
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "\"
\t\t\t\t}
\t\t\t}
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
            $context["main"] = "s12 l6";
        } elseif ((        // line 37
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 38
            echo "\t";
            $context["main"] = "s12 l9";
        } else {
            // line 40
            echo "\t";
            $context["main"] = "s12";
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
\t\t<h1>";
        // line 56
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t<div class=\"row\">
\t\t\t";
        // line 58
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t\t<div id=\"content\" class=\"col ";
        // line 59
        echo (isset($context["main"]) ? $context["main"] : null);
        echo "\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 61
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t";
        // line 64
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m6\">
\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t<h2>";
        // line 69
        echo (isset($context["text_new_affiliate"]) ? $context["text_new_affiliate"] : null);
        echo "</h2>
\t\t\t\t\t\t\t<p>";
        // line 70
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 72
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\" class=\"btn waves-effect waves-light red href-underline\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m6\">
\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t<h2>";
        // line 78
        echo (isset($context["text_returning_affiliate"]) ? $context["text_returning_affiliate"] : null);
        echo "</h2>
\t\t\t\t\t\t\t<p><strong>";
        // line 79
        echo (isset($context["text_i_am_returning_affiliate"]) ? $context["text_i_am_returning_affiliate"] : null);
        echo "</strong></p>
\t\t\t\t\t\t\t<form action=\"";
        // line 80
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 83
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label for=\"input-email\">";
        // line 84
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
        // line 85
        echo (isset($context["text_email_error"]) ? $context["text_email_error"] : null);
        echo "\" data-success=\"";
        echo (isset($context["text_email_success"]) ? $context["text_email_success"] : null);
        echo "\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">lock</i>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 89
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" id=\"input-password\">
\t\t\t\t\t\t\t\t\t<label for=\"input-password\">";
        // line 90
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"";
        // line 94
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t\t";
        // line 95
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 102
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 105
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 111
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">check</i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "', classes: 'toast-success'});";
        }
        // line 112
        echo "\t";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        // line 113
        echo "});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 116
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/affiliate/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 116,  295 => 113,  288 => 112,  282 => 111,  273 => 105,  267 => 102,  261 => 98,  255 => 96,  253 => 95,  247 => 94,  240 => 92,  235 => 90,  231 => 89,  222 => 85,  218 => 84,  214 => 83,  208 => 80,  204 => 79,  200 => 78,  189 => 72,  184 => 70,  180 => 69,  172 => 64,  166 => 61,  161 => 59,  157 => 58,  152 => 56,  148 => 54,  142 => 53,  136 => 51,  128 => 49,  125 => 48,  121 => 47,  114 => 42,  110 => 40,  106 => 38,  104 => 37,  101 => 36,  99 => 35,  94 => 32,  88 => 31,  81 => 27,  77 => 26,  72 => 24,  68 => 22,  65 => 21,  58 => 17,  54 => 16,  49 => 14,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  32 => 8,  25 => 3,  23 => 2,  19 => 1,);
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
/* 			<div id="content" class="col {{ main }}">*/
/* 				<div class="row">*/
/* 					{{ content_top }}*/
/* 					<div class="col s12">*/
/* 						<div class="card-panel">*/
/* 							{{ text_description }}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col s12 m6">*/
/* 						<div class="card-panel">*/
/* 							<h2>{{ text_new_affiliate }}</h2>*/
/* 							<p>{{ text_register_account }}</p>*/
/* 							<div class="flex-reverse">*/
/* 								<a href="{{ register }}" class="btn waves-effect waves-light red href-underline">{{ button_continue }}</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col s12 m6">*/
/* 						<div class="card-panel">*/
/* 							<h2>{{ text_returning_affiliate }}</h2>*/
/* 							<p><strong>{{ text_i_am_returning_affiliate }}</strong></p>*/
/* 							<form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/* 								<div class="input-field">*/
/* 									<i class="material-icons prefix">email</i>*/
/* 									<input type="email" name="email" value="{{ email }}" id="input-email" class="validate">*/
/* 									<label for="input-email">{{ entry_email }}</label>*/
/* 									<span class="helper-text" data-error="{{ text_email_error }}" data-success="{{ text_email_success }}"></span>*/
/* 								</div>*/
/* 								<div class="input-field">*/
/* 									<i class="material-icons prefix">lock</i>*/
/* 									<input type="password" name="password" value="{{ password }}" id="input-password">*/
/* 									<label for="input-password">{{ entry_password }}</label>*/
/* 								</div>*/
/* 								<a href="{{ forgotten }}">{{ text_forgotten }}</a>*/
/* 								<div class="flex-reverse">*/
/* 									<button type="submit" value="{{ button_login }}" class="btn waves-effect waves-light red">{{ button_login }}</button>*/
/* 									{% if redirect %}*/
/* 									<input type="hidden" name="redirect" value="{{ redirect }}">*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</form>*/
/* 						</div>*/
/* 					</div>*/
/* 					{{ content_bottom }}*/
/* 				</div>*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	{% if success %}M.toast({html: '<i class="material-icons left">check</i>{{ success }}', classes: 'toast-success'});{% endif %}*/
/* 	{% if error_warning %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_warning }}', classes: 'toast-warning'});{% endif %}*/
/* });*/
/* </script>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
