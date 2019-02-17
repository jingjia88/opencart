<?php

/* default/template/extension/payment/ecpaypayment.twig */
class __TwigTemplate_50744542cf4b57b468425944e52296c3ba474a3a00391d2bd47b9e4e18a13fd2 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"text-center\">";
        // line 5
        echo (isset($context["text_title"]) ? $context["text_title"] : null);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class=\"text-right\" style=\"width:25%;\"><strong>";
        // line 10
        echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
        echo "</strong></td>
                <td class=\"text-left\" style=\"width:75%;\">";
        // line 11
        echo (isset($context["chosen_payemnt"]) ? $context["chosen_payemnt"] : null);
        echo "</td>
            </tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</div>
<div class=\"buttons\">
    <div class=\"pull-right\">
        <input type=\"button\" value=\"";
        // line 20
        echo (isset($context["text_checkout_button"]) ? $context["text_checkout_button"] : null);
        echo "\" id=\"";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-checkout-button\" class=\"btn btn-primary\" onclick=\"location.href='";
        echo (isset($context["redirect_url"]) ? $context["redirect_url"] : null);
        echo "';\"/>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/ecpaypayment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  37 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*     <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th colspan="2" class="text-center">{{ text_title }}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td class="text-right" style="width:25%;"><strong>{{ entry_payment_method }}</strong></td>*/
/*                 <td class="text-left" style="width:75%;">{{ chosen_payemnt }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*         <tfoot>*/
/*         </tfoot>*/
/*     </table>*/
/* </div>*/
/* <div class="buttons">*/
/*     <div class="pull-right">*/
/*         <input type="button" value="{{ text_checkout_button }}" id="{{ id_prefix }}-checkout-button" class="btn btn-primary" onclick="location.href='{{ redirect_url }}';"/>*/
/*     </div>*/
/* </div>*/
