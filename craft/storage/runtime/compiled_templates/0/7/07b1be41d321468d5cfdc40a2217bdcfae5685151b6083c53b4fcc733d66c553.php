<?php

/* portfolio */
class __TwigTemplate_07b1be41d321468d5cfdc40a2217bdcfae5685151b6083c53b4fcc733d66c553 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("layouts/_layout-pine", "portfolio", 5);
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
        $context["title"] = "Portfolio";
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        $this->loadTemplate("_includes/nav.html", "portfolio", 9)->display($context);
        // line 10
        echo "
\t<section class=\"content-block content-portfolio gallery-1 gallery-1-3\">
        <div class=\"container\">
            <div class=\"underlined-title\">
                <h1 class=\"header-black text-center\">Portfolio</h1>
                </br><hr>
                
            </div>
            <ul class=\"filter\">
                <li class=\"active\">
                    <a href=\"#\" data-filter=\"*\">All</a>
                </li>
                <li>
                    <a href=\"#\" data-filter=\".artwork\">HTML</a>
                </li>
                <li>
                    <a href=\"#\" data-filter=\".creative\">CSS</a>
                </li>
                <li>
                    <a href=\"#\" data-filter=\".creative\">PHP</a>
                </li>
                <li>
                    <a href=\"#\" data-filter=\".creative\">Java</a>
                </li>
            </ul>
            <!-- /.gallery-filter -->
            <div class=\"row\">
                <div class=\"isotope-gallery-container\">
                    <div class=\"col-sm-6 col-xs-12 gallery-item-wrapper artwork creative\">
                        <div class=\"gallery-item\">
                            <div class=\"gallery-thumb\">
                                <img src=\"../assets/img/project-1.jpg\" class=\"img-responsive\" alt=\"1st gallery Thumb\">
                                <div class=\"image-overlay\"></div>
                                <a href=\"http://placehold.it/800x600\" class=\"gallery-zoom\"><i class=\"fa fa-eye\" alt=\"This is the title\"></i></a>
                                <a href=\"#\" class=\"gallery-link\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"gallery-details\">
                                <h5>1st Gallery Item</h5>
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class=\"col-sm-6 col-xs-12 gallery-item-wrapper nature outside\">
                        <div class=\"gallery-item\">
                            <div class=\"gallery-thumb\">
                                <img src=\"../assets/img/project-2.jpg\" class=\"img-responsive\" alt=\"2nd gallery Thumb\">
                                <div class=\"image-overlay\"></div>
                                <a href=\"http://placehold.it/800x600\" class=\"gallery-zoom\"><i class=\"fa fa-eye\"></i></a>
                                <a href=\"#\" class=\"gallery-link\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"gallery-details\">
                                <h5>2nd Gallery Item</h5>
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class=\"col-sm-6 col-xs-12 gallery-item-wrapper photography artwork\">
                        <div class=\"gallery-item\">
                            <div class=\"gallery-thumb\">
                                <img src=\"../assets/img/project-3.jpg\" class=\"img-responsive\" alt=\"3rd gallery Thumb\">
                                <div class=\"image-overlay\"></div>
                                <a href=\"http://placehold.it/800x600\" class=\"gallery-zoom\"><i class=\"fa fa-eye\"></i></a>
                                <a href=\"#\" class=\"gallery-link\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"gallery-details\">
                                <h5>3rd Gallery Item</h5>
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class=\"col-sm-6 col-xs-12 gallery-item-wrapper creative nature\">
                        <div class=\"gallery-item\">
                            <div class=\"gallery-thumb\">
                                <img src=\"../assets/img/project-4.jpg\" class=\"img-responsive\" alt=\"4th gallery Thumb\">
                                <div class=\"image-overlay\"></div>
                                <a href=\"http://placehold.it/800x600\" class=\"gallery-zoom\"><i class=\"fa fa-eye\"></i></a>
                                <a href=\"#\" class=\"gallery-link\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"gallery-details\">
                                <h5>4th Gallery Item</h5>
                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

";
        // line 106
        $this->loadTemplate("_includes/footer.html", "portfolio", 106)->display($context);
    }

    public function getTemplateName()
    {
        return "portfolio";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 106,  36 => 10,  34 => 9,  31 => 8,  27 => 5,  25 => 6,  11 => 5,);
    }
}
