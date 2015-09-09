<?php

/* about */
class __TwigTemplate_d7086d147c8479c125dc5df781005c9def7adf1ad04434db84e3d8653611a85b extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("layouts/_layout-pine", "about", 5);
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
        // line 6
        $context["title"] = "About";
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        $this->loadTemplate("_includes/nav.html", "about", 9)->display($context);
        // line 10
        echo "\t
\t<section class=\"content-block team-1 team-1-1\">
        <div class=\"container\">
            <div class=\"underlined-title\">
                <h1 class=\"header-black text-center\">About Me</h1>
                </br><hr>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-2 team-member-wrap\">
                    
                </div>
                <!-- /.team-member-wrap -->
                <div class=\"col-sm-8 team-member-wrap\">
                    <div class=\"team-member\">
                        <img src=\"../assets/img/jack-tumblr.jpg\" class=\"img-responsive\" alt=\"Member Image\">
                        <div class=\"team-details\">
                            <h4 class=\"member-name\">Jack McGreevy</h4>
                            <p class=\"position\">Adult Wrench</p>
                            <p>Donec in velit vel ipsum auctor pulvinar. Vesti bulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod auctor pulvinar.</p>
                            <ul class=\"social social-dark\">
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-2x fa-facebook\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-2x fa-twitter\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-2x fa-google-plus\"></i></a>
                                </li>
                            </ul>
                            <!-- /.social -->
                        </div>
                    </div>
                </div>
                <!-- /.team-member-wrap -->
                <div class=\"col-sm-2 team-member-wrap\">
                    
                </div>
                <!-- /.team-member-wrap -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

";
        // line 55
        $this->loadTemplate("_includes/footer.html", "about", 55)->display($context);
    }

    public function getTemplateName()
    {
        return "about";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 55,  36 => 10,  34 => 9,  31 => 8,  27 => 5,  25 => 6,  11 => 5,);
    }
}
