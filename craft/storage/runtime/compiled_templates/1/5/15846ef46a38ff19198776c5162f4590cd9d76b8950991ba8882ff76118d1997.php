<?php

/* _elements/tableview/container */
class __TwigTemplate_15846ef46a38ff19198776c5162f4590cd9d76b8950991ba8882ff76118d1997 extends Craft\BaseTemplate
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
        echo "<div class=\"tableview\">
\t<table class=\"data fullwidth\"";
        // line 2
        if ((array_key_exists("structureEditable", $context) && (isset($context["structureEditable"]) ? $context["structureEditable"] : $this->getContext($context, "structureEditable")))) {
            echo " data-structure-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "id", array()), "html", null, true);
            echo "\" data-max-levels=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "maxLevels", array()), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t<thead>
\t\t\t";
        // line 4
        if ((isset($context["showCheckboxes"]) ? $context["showCheckboxes"] : $this->getContext($context, "showCheckboxes"))) {
            // line 5
            echo "\t\t\t\t<th></th>
\t\t\t";
        }
        // line 7
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
        foreach ($context['_seq'] as $context["attribute"] => $context["label"]) {
            // line 8
            echo "\t\t\t\t<th scope=\"col\" data-attribute=\"";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 12
        $this->loadTemplate("_elements/tableview/elements", "_elements/tableview/container", 12)->display($context);
        // line 13
        echo "\t\t</tbody>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/tableview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  59 => 12,  55 => 10,  44 => 8,  39 => 7,  35 => 5,  33 => 4,  22 => 2,  19 => 1,);
    }
}
