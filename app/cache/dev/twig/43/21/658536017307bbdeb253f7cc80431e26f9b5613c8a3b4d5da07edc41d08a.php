<?php

/* ernestoalumnosBundle:Default:ejemplos.html.twig */
class __TwigTemplate_4321658536017307bbdeb253f7cc80431e26f9b5613c8a3b4d5da07edc41d08a extends Twig_Template
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
        echo "<h1>Ejemplos con twig</h1>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range("a", "z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 3
            echo "    * ";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), twig_upper_filter($this->env, "z")));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 7
            echo "    * ";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ernestoalumnosBundle:Default:ejemplos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  38 => 6,  35 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
