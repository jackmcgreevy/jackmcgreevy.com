<?php

/* _components/widgets/RecentEntries/body */
class __TwigTemplate_e379f6b2af74720c66fc600b9a6e3aa17314ca1ccaf8747e78c7f748d0ed6b09 extends Craft\BaseTemplate
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
        echo "<div class=\"recententries-container\">
\t";
        // line 2
        if (twig_length_filter($this->env, (isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")))) {
            // line 3
            echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 5
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<span class=\"light\">";
                // line 9
                if ($this->getAttribute($context["entry"], "postDate", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "postDate", array()), "uiTimestamp", array(), "method"), "html", null, true);
                }
                // line 10
                if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : $this->getContext($context, "CraftEdition")) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : $this->getContext($context, "CraftClient"))) && $this->getAttribute($context["entry"], "author", array()))) {
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "author", array()), "username", array()), "html", null, true);
                }
                // line 11
                echo "</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t</table>
\t";
        } else {
            // line 17
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No entries exist yet."), "html", null, true);
            echo "</p>
\t";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  63 => 17,  59 => 15,  50 => 11,  45 => 10,  41 => 9,  35 => 7,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
