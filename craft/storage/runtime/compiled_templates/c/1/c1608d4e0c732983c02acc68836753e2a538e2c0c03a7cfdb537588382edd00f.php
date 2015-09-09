<?php

/* layouts/_layout-pine */
class __TwigTemplate_c1608d4e0c732983c02acc68836753e2a538e2c0c03a7cfdb537588382edd00f extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html> 
<html lang=\"en\" style=\"height:100%;\">
    <head> 
        <meta charset=\"utf-8\">         
        <title>";
        // line 5
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html", null, true);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">         
        <meta name=\"keywords\" content=\"pinegrow, blocks, bootstrap\" />
        <link rel=\"home\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\">
   

        <link rel=\"shortcut icon\" href=\"assets/ico/favicon.png\">         
        <!-- Core CSS -->
        ";
        // line 13
        $this->displayBlock('style', $context, $blocks);
        // line 25
        echo "        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src=\"js/html5shiv.js\"></script>
      <script src=\"js/respond.min.js\"></script>
    <![endif]-->         
    </head>     
    <body data-spy=\"scroll\" data-target=\"nav\">

    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "    
        <script type=\"text/javascript\" src=\"assets/js/jquery-1.11.1.min.js\"></script>         
        <script type=\"text/javascript\" src=\"assets/js/bootstrap.min.js\"></script>         
        <script type=\"text/javascript\" src=\"assets/js/plugins.js\"></script>
        <script src=\"https://maps.google.com/maps/api/js?sensor=true\"></script>
        <script type=\"text/javascript\" src=\"assets/js/bskit-scripts.js\"></script>       
    </body>     
</html>
";
    }

    // line 13
    public function block_style($context, array $blocks = array())
    {
        // line 14
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/normalize.css\">         
        <link href=\"assets/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">         
        <link href=\"assets/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700\" rel=\"stylesheet\">
        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\">
        <!-- Style Library -->         
        <link href=\"assets/css/style-library-1.css\" rel=\"stylesheet\">
        <link href=\"assets/css/plugins.css\" rel=\"stylesheet\">
        <link href=\"assets/css/blocks.css\" rel=\"stylesheet\">
        <link href=\"assets/css/custom.css\" rel=\"stylesheet\">
        ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "    


    ";
    }

    public function getTemplateName()
    {
        return "layouts/_layout-pine";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  88 => 33,  74 => 14,  71 => 13,  59 => 38,  57 => 33,  47 => 25,  45 => 13,  37 => 8,  27 => 5,  21 => 1,);
    }
}
