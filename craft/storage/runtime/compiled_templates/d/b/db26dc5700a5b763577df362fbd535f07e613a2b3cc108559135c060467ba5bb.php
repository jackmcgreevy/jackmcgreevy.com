<?php

/* index */
class __TwigTemplate_db26dc5700a5b763577df362fbd535f07e613a2b3cc108559135c060467ba5bb extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("layouts/_layout-pine", "index", 5);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->loadTemplate("_includes/nav.html", "index", 8)->display($context);
        // line 9
        echo "
    <section id=\"content-3-8\" class=\"content-block content-3-8 helium homepage\">
        <div class=\"container\">
            
            <div id=\"row1\" class=\"row\">
                <div class=\"col-lg-1\">
                    <span></span> 
                </div>
                <div class=\"col-lg-10 col-sm-4\">
                    <h2 class=\"header-black text-center\">Shalom aleikhem</h2> 
                    <p></p> 
                </div>
                <div class=\"col-lg-1\"> 
                    <span></span>
                </div>
            </div>
            <div id=\"container-div\" class=\"row\">
                <div id=\"container-div2\" id=\"outer-box\">
                    <span></span>
                </div>
            </div>
            <div id=\"row2\" class=\"row\">
                <div class=\"col-sm-6\"> 
                    <h3 class=\"header-black indented\"><i>Lorem ipsum</i></h3>
                    <p id=\"row-2-paragraph\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna.</p>
                </div>
                <div class=\"col-sm-6\"> 
                    <h3 class=\"header-black indented\"><i>Dolor sit amet</i></h3>
                    <p id=\"row-2-paragraph\">Morbi ac nulla pharetra, pellentesque enim sed, efficitur lorem. Aliquam eget ipsum ac orci tempor pulvinar sit amet eu lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi finibus semper enim, nec tempor enim fermentum nec. Nullam pellentesque tristique pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla ex, venenatis id dui quis, iaculis elementum est. Morbi sit amet mauris ante. Vestibulum massa erat, sollicitudin eget ipsum ut, pellentesque convallis urna.</p>
                </div>
            </div>
        </div>
        
    </section>
        
";
        // line 44
        $this->loadTemplate("_includes/footer.html", "index", 44)->display($context);
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 44,  33 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }
}
