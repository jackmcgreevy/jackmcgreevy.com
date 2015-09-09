<?php

/* _components/widgets/Feed/body */
class __TwigTemplate_1b2687703fc1efeb8fbf667c6f1fb9fd67246ad654e9b58270b3fe0492147445 extends Craft\BaseTemplate
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
        echo "<table class=\"data fullwidth\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "\t\t<tr>
\t\t\t<td>&nbsp;</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }
}
