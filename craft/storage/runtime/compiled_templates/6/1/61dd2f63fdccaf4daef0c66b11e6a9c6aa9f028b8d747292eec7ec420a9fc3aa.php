<?php

/* _includes/forms/field */
class __TwigTemplate_61dd2f63fdccaf4daef0c66b11e6a9c6aa9f028b8d747292eec7ec420a9fc3aa extends Craft\BaseTemplate
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
        $context["id"] = ((array_key_exists("id", $context)) ? ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) : (null));
        // line 2
        $context["label"] = (((array_key_exists("label", $context) && ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) != "__blank__"))) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : (null));
        // line 3
        $context["locale"] = ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "isLocalized", array(), "method") && array_key_exists("locale", $context))) ? ((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))) : (null));
        // line 4
        $context["instructions"] = ((array_key_exists("instructions", $context)) ? ((isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions"))) : (null));
        // line 5
        $context["warning"] = ((array_key_exists("warning", $context)) ? ((isset($context["warning"]) ? $context["warning"] : $this->getContext($context, "warning"))) : (null));
        // line 6
        $context["orientation"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(0 => (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))) ? ((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))) : ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "locale", array())))), "method"), "getOrientation", array(), "method");
        // line 7
        $context["errors"] = ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) : (null));
        // line 9
        echo "<div class=\"field";
        if ((array_key_exists("first", $context) && (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")))) {
            echo " first";
        }
        echo "\"";
        if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "-field\"";
        }
        echo ">
\t";
        // line 10
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) || (isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions")))) {
            // line 11
            echo "\t\t<div class=\"heading\">
\t\t\t";
            // line 12
            if ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) {
                // line 13
                echo "\t\t\t\t<label";
                if ((array_key_exists("required", $context) && (isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")))) {
                    echo " class=\"required\"";
                }
                if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 14
                echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                // line 15
                echo "</label>
\t\t\t\t";
                // line 16
                if ((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))) {
                    // line 17
                    echo "\t\t\t\t\t<span class=\"locale\">";
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo "</span>
\t\t\t\t";
                }
                // line 19
                echo "\t\t\t";
            }
            // line 20
            echo "\t\t\t";
            if ((isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions"))) {
                // line 21
                echo "\t\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : $this->getContext($context, "instructions"))), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 23
            echo "\t\t</div>
\t";
        }
        // line 25
        echo "\t<div class=\"input ";
        echo twig_escape_filter($this->env, (isset($context["orientation"]) ? $context["orientation"] : $this->getContext($context, "orientation")), "html", null, true);
        if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
            echo " errors";
        }
        echo "\">
\t\t";
        // line 26
        echo (isset($context["input"]) ? $context["input"] : $this->getContext($context, "input"));
        echo "
\t</div>
\t";
        // line 28
        if ((isset($context["warning"]) ? $context["warning"] : $this->getContext($context, "warning"))) {
            // line 29
            echo "\t\t<p class=\"warning\">";
            echo twig_escape_filter($this->env, (isset($context["warning"]) ? $context["warning"] : $this->getContext($context, "warning")), "html", null, true);
            echo "</p>
\t";
        }
        // line 31
        echo "\t";
        $this->loadTemplate("_includes/forms/errorList", "_includes/forms/field", 31)->display(array_merge($context, array("errors" => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")))));
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  114 => 31,  108 => 29,  106 => 28,  101 => 26,  93 => 25,  89 => 23,  83 => 21,  80 => 20,  77 => 19,  71 => 17,  69 => 16,  66 => 15,  64 => 14,  53 => 13,  51 => 12,  48 => 11,  46 => 10,  33 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
