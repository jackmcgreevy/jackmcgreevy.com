<?php

/* _includes/nav.html */
class __TwigTemplate_272651300badd4913b558d3ed7b9e2c8f7d31c187179598ec0df408f715ceda7 extends Craft\BaseTemplate
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
<section class=\"content-block content-1-8 hydrogen\">
    <header id=\"header-2\" class=\"header-2\">
        <nav class=\"main-nav navbar navbar-default navbar-fixed-top\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">

                        <span class=\"sr-only\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\">Home</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("about"), "html", null, true);
        echo "\">About</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("services"), "html", null, true);
        echo "\">Services</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("portfolio"), "html", null, true);
        echo "\">Portfolio</a>
                                </li>
                                <!-- /.dropdown -->                                 
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("contact"), "html", null, true);
        echo "\">Contact</a>
                                </li>
                                
                                <li class=\"nav item\">
                                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("blog"), "html", null, true);
        echo "\">Blog</a>
                                </li>
                                
                            </ul>
                        </span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        
                    </button>



                    <!--
                    <a href=\"#\">
                        <img src=\"images/brand/pgblocks-logo-nostrap.png\" class=\"brand-img img-responsive\">
                    </a>
                    -->
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"nav-item active\">
                            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("about"), "html", null, true);
        echo "\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("services"), "html", null, true);
        echo "\">Services</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("blog"), "html", null, true);
        echo "\">Blog</a>
                        </li>
                        <!-- /.dropdown -->                                 
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("contact"), "html", null, true);
        echo "\">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- /.container -->
</section>

";
    }

    public function getTemplateName()
    {
        return "_includes/nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 66,  109 => 62,  103 => 59,  97 => 56,  91 => 53,  65 => 30,  58 => 26,  51 => 22,  45 => 19,  39 => 16,  33 => 13,  19 => 1,);
    }
}
