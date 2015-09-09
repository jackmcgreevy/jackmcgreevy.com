<?php

/* _elements/tableview/elements */
class __TwigTemplate_d47d7fcfcbc65b1fd0f70ca63c551639a88488ddcc8d488b846d775a1e9ce616 extends Craft\BaseTemplate
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
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["structure"] = ((array_key_exists("structure", $context)) ? ((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure"))) : (null));
        // line 4
        $context["structureEditable"] = ((array_key_exists("structureEditable", $context)) ? ((isset($context["structureEditable"]) ? $context["structureEditable"] : $this->getContext($context, "structureEditable"))) : (false));
        // line 6
        if ((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure"))) {
            // line 7
            $context["basePadding"] = (20 + ((((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")) == "index")) ? (((((isset($context["showCheckboxes"]) ? $context["showCheckboxes"] : $this->getContext($context, "showCheckboxes"))) ? (14) : (0)) + (((isset($context["structureEditable"]) ? $context["structureEditable"] : $this->getContext($context, "structureEditable"))) ? (14) : (0)))) : (24)));
            // line 8
            echo "\t";
            $context["padding"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method") == "ltr")) ? ("left") : ("right"));
        }
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 12
            echo "\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", array()), "html", null, true);
            echo "\"";
            if ((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure"))) {
                echo " data-level=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "level", array()), "html", null, true);
                echo "\" data-descendants=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "getTotalDescendants", array(), "method"), "html", null, true);
                echo "\"";
            }
            if (twig_in_filter($this->getAttribute($context["element"], "id", array()), (isset($context["disabledElementIds"]) ? $context["disabledElementIds"] : $this->getContext($context, "disabledElementIds")))) {
                echo " class=\"disabled\"";
            }
            echo ">
\t\t";
            // line 13
            if ((isset($context["showCheckboxes"]) ? $context["showCheckboxes"] : $this->getContext($context, "showCheckboxes"))) {
                // line 14
                echo "\t\t\t<td class=\"thin\" data-checkboxcell><div class=\"checkbox\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Select"), "html", null, true);
                echo "\"></div></td>
\t\t";
            }
            // line 16
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
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
            foreach ($context['_seq'] as $context["attribute"] => $context["label"]) {
                // line 17
                echo "\t\t\t";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 18
                    echo "\t\t\t\t<td data-title=\"";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\"";
                    if ((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure"))) {
                        echo " style=\"padding-";
                        echo twig_escape_filter($this->env, (isset($context["padding"]) ? $context["padding"] : $this->getContext($context, "padding")), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, ((isset($context["basePadding"]) ? $context["basePadding"] : $this->getContext($context, "basePadding")) + (($this->getAttribute($context["element"], "level", array()) - 1) * 44)), "html", null, true);
                        echo "px;\"";
                    }
                    echo " data-titlecell=\"\">";
                    // line 19
                    if ((isset($context["structureEditable"]) ? $context["structureEditable"] : $this->getContext($context, "structureEditable"))) {
                        echo "<a class=\"move icon\" title=\"";
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                        echo "\" role=\"button\">&nbsp;</a>";
                    }
                    // line 20
                    if (((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")) && $this->getAttribute($context["element"], "hasDescendants", array(), "method"))) {
                        echo "<span class=\"toggle";
                        if (!twig_in_filter($this->getAttribute($context["element"], "id", array()), (isset($context["collapsedElementIds"]) ? $context["collapsedElementIds"] : $this->getContext($context, "collapsedElementIds")))) {
                            echo " expanded";
                        }
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Show/hide children"), "html", null, true);
                        echo "\"></span>";
                    }
                    // line 21
                    $this->loadTemplate("_elements/element", "_elements/tableview/elements", 21)->display($context);
                    // line 22
                    echo "</td>
\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t<td data-title=\"";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\">";
                    // line 25
                    echo $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : $this->getContext($context, "elementType")), "getTableAttributeHtml", array(0 => $context["element"], 1 => $context["attribute"]), "method");
                    // line 26
                    echo "</td>
\t\t\t";
                }
                // line 28
                echo "\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_elements/tableview/elements";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 31,  156 => 29,  142 => 28,  138 => 26,  136 => 25,  132 => 24,  128 => 22,  126 => 21,  116 => 20,  110 => 19,  98 => 18,  95 => 17,  77 => 16,  71 => 14,  69 => 13,  53 => 12,  36 => 11,  32 => 8,  30 => 7,  28 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
