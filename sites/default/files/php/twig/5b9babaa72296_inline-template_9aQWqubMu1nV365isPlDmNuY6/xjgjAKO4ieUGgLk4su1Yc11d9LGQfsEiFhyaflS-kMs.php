<?php

/* {# inline_template_start #}<a href="#" class="cke-icon-only" role="button" title="Язык" aria-label="Язык"><span class="cke_button_icon cke_button__language_icon">Язык</span></a> */
class __TwigTemplate_29448db68dcc7153890ccdcf37e3c33b61d4f486dae53564677f834a21d46b26 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<a href=\"#\" class=\"cke-icon-only\" role=\"button\" title=\"Язык\" aria-label=\"Язык\"><span class=\"cke_button_icon cke_button__language_icon\">Язык</span></a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#\" class=\"cke-icon-only\" role=\"button\" title=\"Язык\" aria-label=\"Язык\"><span class=\"cke_button_icon cke_button__language_icon\">Язык</span></a>";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<a href=\"#\" class=\"cke-icon-only\" role=\"button\" title=\"Язык\" aria-label=\"Язык\"><span class=\"cke_button_icon cke_button__language_icon\">Язык</span></a>", "");
    }
}
