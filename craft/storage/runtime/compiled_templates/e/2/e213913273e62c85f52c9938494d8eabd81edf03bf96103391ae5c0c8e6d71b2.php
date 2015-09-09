<?php

/* _includes/forms/textarea */
class __TwigTemplate_e213913273e62c85f52c9938494d8eabd81edf03bf96103391ae5c0c8e6d71b2 extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 3
array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : (null)), 2 => (((        // line 4
array_key_exists("placeholder", $context) && (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) ? ("nicetext") : (null)), 3 => (((        // line 5
array_key_exists("size", $context) && (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")))) ? (null) : ("fullwidth")))), " ");
        // line 8
        $context["rows"] = ((array_key_exists("rows", $context)) ? ((isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows"))) : (2));
        // line 9
        $context["cols"] = ((array_key_exists("cols", $context)) ? ((isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols"))) : (50));
        // line 11
        echo "<textarea class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, (isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows")), "html", null, true);
        echo "\" cols=\"";
        echo twig_escape_filter($this->env, (isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols")), "html", null, true);
        echo "\"";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 13
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 14
        if ((array_key_exists("maxlength", $context) && (isset($context["maxlength"]) ? $context["maxlength"] : $this->getContext($context, "maxlength")))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) ? $context["maxlength"] : $this->getContext($context, "maxlength")), "html", null, true);
            echo "\"";
        }
        // line 15
        if ((array_key_exists("showCharsLeft", $context) && (isset($context["showCharsLeft"]) ? $context["showCharsLeft"] : $this->getContext($context, "showCharsLeft")))) {
            echo " data-show-chars-left";
        }
        // line 16
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 17
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 18
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (null)), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/textarea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  62 => 17,  58 => 16,  54 => 15,  48 => 14,  42 => 13,  36 => 12,  28 => 11,  26 => 9,  24 => 8,  22 => 5,  21 => 4,  20 => 3,  19 => 1,);
    }
}
