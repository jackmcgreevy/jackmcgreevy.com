<?php

/* _includes/forms/text */
class __TwigTemplate_95a23112f99e7e968578f203d452f76181778c06e526611d422ed5e166995585 extends Craft\BaseTemplate
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
        $context["type"] = ((array_key_exists("type", $context)) ? ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) : ("text"));
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 5
array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : (null)), 2 => (((        // line 6
array_key_exists("placeholder", $context) && (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) ? ("nicetext") : (null)), 3 => (((        // line 7
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password"))) ? ("password") : (null)), 4 => (((        // line 8
array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) ? ("disabled") : (null)), 5 => (((        // line 9
array_key_exists("size", $context) && (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")))) ? (null) : ("fullwidth")))), " ");
        // line 12
        if ((((array_key_exists("showCharsLeft", $context) && (isset($context["showCharsLeft"]) ? $context["showCharsLeft"] : $this->getContext($context, "showCharsLeft"))) && array_key_exists("maxlength", $context)) && (isset($context["maxlength"]) ? $context["maxlength"] : $this->getContext($context, "maxlength")))) {
            // line 13
            $context["style"] = (((("padding-" . ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method") == "ltr")) ? ("right") : ("left"))) . ": ") . ((7.2 * twig_length_filter($this->env, (isset($context["maxlength"]) ? $context["maxlength"] : $this->getContext($context, "maxlength")))) + 14)) . "px;");
        }
        // line 16
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 17
        echo "<input class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\"";
        // line 18
        if (array_key_exists("style", $context)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\"";
        }
        // line 19
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 20
        if (array_key_exists("size", $context)) {
            echo " size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
            echo "\"";
        }
        // line 21
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 22
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        // line 23
        if ((array_key_exists("maxlength", $context) && (isset($context["maxlength"]) ? $context["maxlength"] : $this->getContext($context, "maxlength")))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) ? $context["maxlength"] : $this->getContext($context, "maxlength")), "html", null, true);
            echo "\"";
        }
        // line 24
        if ((array_key_exists("showCharsLeft", $context) && (isset($context["showCharsLeft"]) ? $context["showCharsLeft"] : $this->getContext($context, "showCharsLeft")))) {
            echo " data-show-chars-left";
        }
        // line 25
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 26
        if (( !array_key_exists("autocomplete", $context) ||  !(isset($context["autocomplete"]) ? $context["autocomplete"] : $this->getContext($context, "autocomplete")))) {
            echo " autocomplete=\"off\"";
        }
        // line 27
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled ";
        }
        // line 28
        if ((array_key_exists("readonly", $context) && (isset($context["readonly"]) ? $context["readonly"] : $this->getContext($context, "readonly")))) {
            echo " readonly ";
        }
        // line 29
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 30
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  73 => 23,  67 => 22,  61 => 21,  55 => 20,  49 => 19,  43 => 18,  37 => 17,  33 => 16,  30 => 13,  28 => 12,  26 => 9,  25 => 8,  24 => 7,  23 => 6,  22 => 5,  21 => 3,  19 => 1,);
    }
}
