<?php

/* _includes/forms/checkbox */
class __TwigTemplate_56d502b440218726eb278ee2ec6c6687854131e1835bebdddaf8d36f9f9255ca extends Craft\BaseTemplate
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
        echo "
";
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => ((        // line 4
array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : (null)), 1 => ((((        // line 5
array_key_exists("toggle", $context) &&  !twig_test_empty((isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")))) || (array_key_exists("reverseToggle", $context) &&  !twig_test_empty((isset($context["reverseToggle"]) ? $context["reverseToggle"] : $this->getContext($context, "reverseToggle")))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 8
        echo "
";
        // line 9
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (1));
        // line 10
        $context["id"] = (((array_key_exists("id", $context) && (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) ? ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) : (("checkbox" . twig_random($this->env))));
        // line 11
        $context["label"] = ((array_key_exists("label", $context)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : (""));
        // line 12
        echo "
";
        // line 13
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) < 3) || (twig_slice($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")),  -2) != "[]")))) {
            // line 14
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 16
        echo "
<input type=\"checkbox\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\"";
        // line 18
        if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "\tclass=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\"";
        // line 20
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 21
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")))) {
            echo " checked";
        }
        // line 22
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 23
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 24
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : $this->getContext($context, "toggle")), "html", null, true);
            echo "\"";
        }
        // line 25
        if (array_key_exists("reverseToggle", $context)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) ? $context["reverseToggle"] : $this->getContext($context, "reverseToggle")), "html", null, true);
            echo "\"";
        }
        echo ">

<label for=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        echo "</label>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  88 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  64 => 20,  60 => 19,  54 => 18,  51 => 17,  48 => 16,  42 => 14,  40 => 13,  37 => 12,  35 => 11,  33 => 10,  31 => 9,  28 => 8,  26 => 5,  25 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
