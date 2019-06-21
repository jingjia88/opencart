<?php

/* __string_template__3966767b42cd1342691d133f3894be0c35c31ed2fdee36c88f50191e933347cc */
class __TwigTemplate_7928dd43da8a4d82532783dbe299ec11e42f4da79b182eb4d5e471084ab6b8f4 extends Twig_Template
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
        if ((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) {
            // line 2
            echo "\t<h4 class=\"text-bold\">";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</h4>
\t<div class=\"section\">
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 5
                echo "\t\t";
                if ( !$this->getAttribute($context["shipping_method"], "error", array())) {
                    // line 6
                    echo "\t\t<ul>
\t\t\t";
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 8
                        echo "\t\t\t<li>
\t\t\t\t<label for=\"";
                        // line 9
                        echo $this->getAttribute($context["quote"], "code", array());
                        echo "\">
\t\t\t\t\t";
                        // line 10
                        if ((($this->getAttribute($context["quote"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                            // line 11
                            echo "\t\t\t\t\t";
                            $context["code"] = $this->getAttribute($context["quote"], "code", array());
                            // line 12
                            echo "\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" checked=\"checked\" id=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" class=\"with-gap\">
\t\t\t\t\t";
                        } else {
                            // line 14
                            echo "\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" id=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" class=\"with-gap\">
\t\t\t\t\t";
                        }
                        // line 16
                        echo "\t\t\t\t\t<span>";
                        echo $this->getAttribute($context["quote"], "title", array());
                        echo " – ";
                        echo $this->getAttribute($context["quote"], "text", array());
                        echo "</span>
\t\t\t\t</label>
\t\t\t</li>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t</ul>
\t\t";
                } else {
                    // line 22
                    echo "\t\t<script>M.toast({html: '<i class=\"material-icons left\">warning</i>";
                    echo $this->getAttribute($context["shipping_method"], "error", array());
                    echo "', classes: 'toast-warning'});</script>
\t\t";
                }
                // line 24
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t</div>
";
        }
        // line 27
        echo "<script>
  function update(){
      \$.ajax({
              url: 'index.php?route=checkout/return_cookie',
              type:'POST',
              success: function (res) {
   \t\t\t\tvar store = JSON.parse(res);
   \t\t\t\tif(store['address']){
   \t\t\t\t\tdocument.getElementById(\"store\").value = \"超商代碼:\"+store.route+\"  |店名:\"+store.name+\"  |地址:\"+store.address;
 \t\t\t\t\tif(document.getElementById(\"invoice\").value){
                        document.getElementById(\"invoice\").value += document.getElementById(\"store\").value;
  \t\t\t\t\t\tclearInterval(id)
                    }else{
  \t\t\t\t\t\tdocument.getElementById(\"invoice\").value = document.getElementById(\"store\").value;
  \t\t\t\t\t}
   \t\t\t\t}
              },
              error: function (res) {
                 console.log('wrong'); 
              }
       });
  }
     
var id = setInterval('update()', 1000);  
</script>
<p style=\"font-size:18px;font-weight:bold;\"><a target=\"_blank\" onclick=\"setInterval('update()', 1000)\"href=\"http://cvs.map.com.tw/paracvs.asp?cvsname=www.ec-order.com.tw&cvsid=AAABBB&cvstemp=https%3A%2F%2Fec-store.slat.org%2Findex.php%3Froute%3Dcheckout%2Fselect_store\">選取超商</a></p>
<div class=\"section\"> 
  <strong>";
        // line 54
        echo (isset($context["text_comments"]) ? $context["text_comments"] : null);
        echo "</strong>
  <textarea id=\"store\"name=\"invoices\" class=\"materialize-textarea\" required></textarea>
\t<strong>三聯式發票抬頭統編</strong>
\t<div class=\"input-field\">
\t\t<i class=\"material-icons prefix\">message</i>
\t\t<textarea id=\"invoice\"name=\"comment\" class=\"materialize-textarea\" required></textarea>
\t</div>
</div>
<div class=\"flex-reverse\">
\t<button type=\"button\" value=\"";
        // line 63
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-shipping-method\" class=\"btn waves-effect waves-light red\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
</div>
<script>";
        // line 65
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "', classes: 'toast-warning'});";
        }
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__3966767b42cd1342691d133f3894be0c35c31ed2fdee36c88f50191e933347cc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  143 => 63,  131 => 54,  102 => 27,  98 => 25,  92 => 24,  86 => 22,  82 => 20,  69 => 16,  61 => 14,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  41 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if shipping_methods %}*/
/* 	<h4 class="text-bold">{{ text_shipping_method }}</h4>*/
/* 	<div class="section">*/
/* 	{% for shipping_method in shipping_methods %}*/
/* 		{% if not shipping_method.error %}*/
/* 		<ul>*/
/* 			{% for quote in shipping_method.quote %}*/
/* 			<li>*/
/* 				<label for="{{ quote.code }}">*/
/* 					{% if quote.code == code or not code %}*/
/* 					{% set code = quote.code %}*/
/* 					<input type="radio" name="shipping_method" value="{{ quote.code }}" checked="checked" id="{{ quote.code }}" class="with-gap">*/
/* 					{% else %}*/
/* 					<input type="radio" name="shipping_method" value="{{ quote.code }}" id="{{ quote.code }}" class="with-gap">*/
/* 					{% endif %}*/
/* 					<span>{{ quote.title }} – {{ quote.text }}</span>*/
/* 				</label>*/
/* 			</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 		{% else %}*/
/* 		<script>M.toast({html: '<i class="material-icons left">warning</i>{{ shipping_method.error }}', classes: 'toast-warning'});</script>*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	</div>*/
/* {% endif %}*/
/* <script>*/
/*   function update(){*/
/*       $.ajax({*/
/*               url: 'index.php?route=checkout/return_cookie',*/
/*               type:'POST',*/
/*               success: function (res) {*/
/*    				var store = JSON.parse(res);*/
/*    				if(store['address']){*/
/*    					document.getElementById("store").value = "超商代碼:"+store.route+"  |店名:"+store.name+"  |地址:"+store.address;*/
/*  					if(document.getElementById("invoice").value){*/
/*                         document.getElementById("invoice").value += document.getElementById("store").value;*/
/*   						clearInterval(id)*/
/*                     }else{*/
/*   						document.getElementById("invoice").value = document.getElementById("store").value;*/
/*   					}*/
/*    				}*/
/*               },*/
/*               error: function (res) {*/
/*                  console.log('wrong'); */
/*               }*/
/*        });*/
/*   }*/
/*      */
/* var id = setInterval('update()', 1000);  */
/* </script>*/
/* <p style="font-size:18px;font-weight:bold;"><a target="_blank" onclick="setInterval('update()', 1000)"href="http://cvs.map.com.tw/paracvs.asp?cvsname=www.ec-order.com.tw&cvsid=AAABBB&cvstemp=https%3A%2F%2Fec-store.slat.org%2Findex.php%3Froute%3Dcheckout%2Fselect_store">選取超商</a></p>*/
/* <div class="section"> */
/*   <strong>{{ text_comments }}</strong>*/
/*   <textarea id="store"name="invoices" class="materialize-textarea" required></textarea>*/
/* 	<strong>三聯式發票抬頭統編</strong>*/
/* 	<div class="input-field">*/
/* 		<i class="material-icons prefix">message</i>*/
/* 		<textarea id="invoice"name="comment" class="materialize-textarea" required></textarea>*/
/* 	</div>*/
/* </div>*/
/* <div class="flex-reverse">*/
/* 	<button type="button" value="{{ button_continue }}" id="button-shipping-method" class="btn waves-effect waves-light red">{{ button_continue }}</button>*/
/* </div>*/
/* <script>{% if error_warning %}M.toast({html: '<i class="material-icons left">warning</i>{{ error_warning }}', classes: 'toast-warning'});{% endif %}</script>*/
/* */
