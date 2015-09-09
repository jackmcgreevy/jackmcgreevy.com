<?php

/* blog/_entry */
class __TwigTemplate_78c6365342bb907f237ae141338d3cb9ff51f55dfe4a41b2a992517b1349fdc6 extends Craft\BaseTemplate
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
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("blog/_entry", "blog/_entry", 5, "26238995")->display($context);
    }

    public function getTemplateName()
    {
        return "blog/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}


/* blog/_entry */
class __TwigTemplate_78c6365342bb907f237ae141338d3cb9ff51f55dfe4a41b2a992517b1349fdc6_26238995 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("layouts/_layout-pine.html", "blog/_entry", 5);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/_layout-pine.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_style($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<link href=\"../../assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">         
        <link href=\"../../assets/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700\" rel=\"stylesheet\">
        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\">
        <!-- Style Library -->         
        <link href=\"../../assets/css/style-library-1.css\" rel=\"stylesheet\">
        <link href=\"../../assets/css/plugins.css\" rel=\"stylesheet\">
        <link href=\"../../assets/css/blocks.css\" rel=\"stylesheet\">
        <link href=\"../../assets/css/custom.css\" rel=\"stylesheet\">
\t";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "\t";
        $this->loadTemplate("_includes/nav.html", "blog/_entry", 20)->display($context);
        // line 21
        echo "
\t\t<h1 style=\"text-align: center; \"><a href=\"/blog\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title", array()), "html", null, true);
        echo "</a></h1>
\t\t<div class=\"container\">
\t\t\t<article>
\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "body", array()), "html", null, true);
        echo "
\t\t\t</article>
\t\t\t<p id=\"date\" style=\"text-align: center;\"><i>Posted on ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postDate", array()), "format", array(0 => "F d, Y"), "method"), "html", null, true);
        echo "</i></p>
\t\t</div>

\t";
        // line 30
        $this->loadTemplate("_includes/footer.html", "blog/_entry", 30)->display($context);
        // line 31
        echo "\t";
    }

    public function getTemplateName()
    {
        return "blog/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  109 => 30,  103 => 27,  98 => 25,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  70 => 8,  67 => 7,  22 => 5,  19 => 4,);
    }
}
