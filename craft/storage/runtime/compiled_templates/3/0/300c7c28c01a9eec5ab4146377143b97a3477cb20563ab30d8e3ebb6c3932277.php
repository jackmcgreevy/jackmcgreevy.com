<?php

/* 404 */
class __TwigTemplate_300c7c28c01a9eec5ab4146377143b97a3477cb20563ab30d8e3ebb6c3932277 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("layouts/_layout-pine", "404", 19);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/_layout-pine";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        $context["title"] = "404";
        // line 19
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "\t<h1>Page not found</h1>

\t<p></p>
";
    }

    public function getTemplateName()
    {
        return "404";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 23,  31 => 22,  27 => 19,  25 => 20,  11 => 19,);
    }
}
