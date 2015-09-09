<?php

/* _includes/footer.html */
class __TwigTemplate_5e609b9e91bb762fcb696f74f1ec64ad0c180436eea7b4d07750096893b38dc9 extends Craft\BaseTemplate
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
        echo "
<footer class=\"copyright-bar bg-black lithium\">
    <div class=\"container lithium\">
        <div class=\"row\">
            <p class=\"pull-right small\"><i class=\"fa fa-heart pomegranate\"></i> </p>
            <p class=\"pull-left small\">Jack McGreevy | Web Content</p>
        </div>                 
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "_includes/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
