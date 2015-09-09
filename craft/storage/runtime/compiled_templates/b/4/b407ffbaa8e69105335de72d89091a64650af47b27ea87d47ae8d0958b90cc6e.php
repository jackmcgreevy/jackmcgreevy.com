<?php

/* _layouts/base */
class __TwigTemplate_b407ffbaa8e69105335de72d89091a64650af47b27ea87d47ae8d0958b90cc6e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $_js = "css/craft.css";
        \Craft\craft()->templates->includeCssResource($_js, true);
        // line 3
        $context["siteName"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "app", array()), "getSiteName", array(), "method");
        // line 4
        $context["docTitle"] = ((array_key_exists("docTitle", $context)) ? ((isset($context["docTitle"]) ? $context["docTitle"] : $this->getContext($context, "docTitle"))) : (strip_tags((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))));
        // line 5
        $context["bodyClass"] = (((array_key_exists("bodyClass", $context)) ? (((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")) . " ")) : ("")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method"));
        // line 7
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "</head>
<body class=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
        echo "\">
\t";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "\t";
        $this->displayBlock('foot', $context, $blocks);
        // line 25
        echo "</body>
</html>
";
    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        // line 11
        echo "\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta charset=\"utf-8\">
\t<title>";
        // line 13
        echo twig_escape_filter($this->env, (((isset($context["docTitle"]) ? $context["docTitle"] : $this->getContext($context, "docTitle")) . ((((isset($context["docTitle"]) ? $context["docTitle"] : $this->getContext($context, "docTitle")) && (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")))) ? (" - ") : (""))) . (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName"))), "html", null, true);
        echo "</title>
\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getHeadHtmlFunction(), "html", null, true);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<script type=\"text/javascript\">
\t\t// Fix for Firefox autofocus CSS bug
\t\t// See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
\t</script>
\t";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_foot($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  78 => 23,  67 => 14,  63 => 13,  59 => 11,  56 => 10,  50 => 25,  47 => 24,  45 => 23,  41 => 22,  38 => 21,  36 => 10,  31 => 7,  29 => 5,  27 => 4,  25 => 3,  22 => 1,);
    }
}
