<?php

/* blog */
class __TwigTemplate_71a224c28ed5b2f3b49ee637fbcb778dce4cda8633758c5c0d0f4ae82e3c25a3 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("layouts/_layout-pine.html", "blog", 5);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/_layout-pine.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["title"] = "Blog";
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        echo "\t
";
        // line 9
        $this->loadTemplate("_includes/nav.html", "blog", 9)->display($context);
        // line 10
        echo "
    <div class=\"content-block blog-1\">
            <div class=\"container text-center\">
                <div class=\"underlined-title\">
                    <h1 class=\"header-black text-center\">My Blog</h1>
                    </br><hr>
                    <h2>Can you say intermittent?</h2>
                </div>
                <div class=\"col-sm-10 col-sm-offset-1\">
                    

                    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries", array()), "section", array(0 => "blog"), "method"), "find", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 22
            echo "
                        ";
            // line 23
            if ($this->getAttribute($context["loop"], "index", array())) {
                // line 24
                echo "
                        <div class=\"post\">

                            <h2><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
                echo "</a></h2>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">                                
                                </div>
                                <div class=\"col-sm-6\">
                                
                                    
                                    
                                </div>
                                <div class=\"col-sm-3\">
                                    
                                </div>
                            </div>
                            ";
                // line 43
                echo "                            <p class=\"capsule\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "articleSummary", array()), "html", null, true);
                echo "</p>
                            ";
                // line 47
                echo "                            <div class=\"text-center button-space\">
                                <div>
                                    <p class=\"small text-muted post-date\">
                                        Posted on ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "postDate", array()), "format", array(0 => "F d, Y"), "method"), "html", null, true);
                echo "
                                    </p>
                                </div>
                                <p>
                                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "url", array()), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary button-center\">
                                        Read More
                                    </a>
                                </p>
                                
                            </div>

                        ";
            } else {
                // line 62
                echo "
                        </div>

                        ";
            }
            // line 65
            echo "                            

                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                    </div>
                    <hr>
                    <nav>
                        <ul class=\"pagination\">
                            <li class=\"disabled\">
                                <a href=\"#\" aria-label=\"Previous\"><span class=\"fa fa-angle-double-left\"></span></a>
                            </li>
                            <li class=\"active\">
                                <a href=\"#\">1</a>
                            </li>
                            <li>
                                <a href=\"#\">2</a>
                            </li>
                            <li>
                                <a href=\"#\">3</a>
                            </li>
                            <li>
                                <a href=\"#\">4</a>
                            </li>
                            <li>
                                <a href=\"#\">5</a>
                            </li>
                            <li>
                                <a href=\"#\" aria-label=\"Next\"><span class=\"fa fa-angle-double-right\"></span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /.col-sm-10 -->
            </div>
            <!-- /.container -->
        </div>

";
        // line 102
        $this->loadTemplate("_includes/footer.html", "blog", 102)->display($context);
    }

    public function getTemplateName()
    {
        return "blog";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 102,  146 => 68,  130 => 65,  124 => 62,  113 => 54,  106 => 50,  101 => 47,  96 => 43,  78 => 27,  73 => 24,  71 => 23,  68 => 22,  51 => 21,  38 => 10,  36 => 9,  31 => 8,  27 => 5,  25 => 6,  11 => 5,);
    }
}
