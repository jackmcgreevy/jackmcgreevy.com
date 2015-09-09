<?php

/* contact/index */
class __TwigTemplate_1896e26cf7edf54692e8e0b8775e76fa35cc8f831ff37e2046e65fd1cb6719a4 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("layouts/_layout-pine", "contact/index", 5);
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
        $context["title"] = "Contact";
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        $this->loadTemplate("_includes/nav.html", "contact/index", 9)->display($context);
        // line 10
        echo "
\t<section class=\"content-block contact-1\">
\t    <div class=\"container text-center\">
\t        <div class=\"col-sm-10 col-sm-offset-1\">
\t            <div class=\"underlined-title\">
\t                <h1 class=\"header-black text-center\">Contact</h1>
\t                </br><hr>
\t            </div>
\t            <div class=\"row\">
\t                <div class=\"contact-module-1 col-lg-6\">
\t                    <p>Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.
\t                    </p>
\t                </div>
\t                <div class=\"contact-module-2 col-lg-6\">
\t                    <ul class=\"contact-info\">
\t                        <li class=\"contact-item\">
\t                            <span class=\"fa fa-map-marker\"></span>
\t                            <wp-span>123 Main St, Langley, VA</wp-span>
\t                        </li></br>
\t                        <li class=\"contact-item\">
\t                            <span class=\"fa fa-phone\"></span>
\t                            <wp-span>+44 (0) 1234 5678</wp-span>
\t                        </li></br>
\t                        <li class=\"contact-item\">
\t                            <span class=\"fa fa-envelope\"></span>
\t                            <a href=\"mailto:buyme@example.com\">buyme@example.com</a> 
\t                        </li>
\t                    </ul>
\t                </div>
\t            </div>
\t            <div id=\"contact\" class=\"form-container\">
\t                <div id=\"message\"></div>
\t                <form method=\"post\" action=\"js/contact-form.php\" name=\"contactform\" id=\"contactform\">
\t                    <div class=\"row\">
\t                        <div class=\"col-sm-4\">
\t                            <div class=\"form-group\">
\t                                <input name=\"name\" id=\"name\" type=\"text\" value=\"\" placeholder=\"Name\" class=\"form-control\" />
\t                            </div>
\t                        </div>
\t                        <div class=\"col-sm-4\">
\t                            <div class=\"form-group\">
\t                                <input name=\"email\" id=\"email\" type=\"text\" value=\"\" placeholder=\"Email\" class=\"form-control\" />
\t                            </div>
\t                        </div>
\t                        <div class=\"col-sm-4\">
\t                            <div class=\"form-group\">
\t                                <input name=\"phone\" id=\"phone\" type=\"text\" value=\"\" placeholder=\"Phone\" class=\"form-control\" />
\t                            </div>
\t                        </div>
\t                    </div>
\t                    <!-- /.row -->
\t                    <div class=\"form-group\">
\t                        <textarea name=\"comments\" id=\"comments\" class=\"form-control\" rows=\"3\" placeholder=\"Message\" id=\"textArea\"></textarea>
\t                        <p class=\"small text-muted\"><span class=\"guardsman\">* All fields are required.</span> Once we receive your message we will respond as soon as possible.</p>
\t                    </div>
\t                    <div class=\"form-group\">
\t                        <button class=\"btn btn-primary\" type=\"submit\" id=\"cf-submit\" name=\"submit\">Send</button>
\t                    </div>
\t                </form>
\t            </div>
\t            <!-- /.form-container -->
\t        </div>
\t        <!-- /.col-sm-10 -->
\t    </div>
\t    <!-- /.container -->
\t</section>

";
        // line 77
        $this->loadTemplate("_includes/footer.html", "contact/index", 77)->display($context);
    }

    public function getTemplateName()
    {
        return "contact/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 77,  36 => 10,  34 => 9,  31 => 8,  27 => 5,  25 => 6,  11 => 5,);
    }
}
