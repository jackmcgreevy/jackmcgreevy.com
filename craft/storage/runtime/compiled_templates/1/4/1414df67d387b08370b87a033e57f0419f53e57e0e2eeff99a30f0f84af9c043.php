<?php

/* services/index */
class __TwigTemplate_1414df67d387b08370b87a033e57f0419f53e57e0e2eeff99a30f0f84af9c043 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("layouts/_layout-pine", "services/index", 5);
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
        $context["title"] = "Services";
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        $this->loadTemplate("_includes/nav.html", "services/index", 9)->display($context);
        // line 10
        echo "
    <section id=\"content-2-2\" class=\"content-block  content-2-2 bg-stalemate\">
        
        <div class=\"container underlined-title\">
        <h1 class=\"header-black text-center\">Services</h1>
        </br><hr>
            <!-- Start Row -->
            <div class=\"row\">
                <div class=\"col-sm-4 col-xs-12 text-center\">
                    <div class=\"icon-outline\">
                        <span class=\"fa fa-send\"></span>
                    </div>
                    <h3 class=\"link-black\">Create excellent paper airplanes</h3>
                    <p>Etsy ethnic actually hella Odd Future meggings shabby chic leggings salvia master cleanse stumptown.</p>
                </div>
                <div class=\"col-sm-4 col-xs-12 text-center\">
                    <div class=\"icon-outline\">
                        <span class=\"fa fa-star\"></span>
                    </div>
                    <h3 class=\"link-black\">Draw stars that are out of this world!</h3>
                    <p>Etsy ethnic actually hella Odd Future meggings shabby chic leggings salvia master cleanse stumptown.</p>
                </div>
                <div class=\"col-sm-4 col-xs-12 text-center\">
                    <div class=\"icon-outline\">
                        <span class=\"fa fa-tags\"></span>
                    </div>
                    <h3 class=\"link-black\">Claim a complimentary dogtag necklace</h3>
                    <p>Etsy ethnic actually hella Odd Future meggings shabby chic leggings salvia master cleanse stumptown.</p>
                </div>
            </div>
            <!--// END Row -->
        </div>
    </section>

";
        // line 44
        $this->loadTemplate("_includes/footer.html", "services/index", 44)->display($context);
    }

    public function getTemplateName()
    {
        return "services/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 44,  36 => 10,  34 => 9,  31 => 8,  27 => 5,  25 => 6,  11 => 5,);
    }
}
