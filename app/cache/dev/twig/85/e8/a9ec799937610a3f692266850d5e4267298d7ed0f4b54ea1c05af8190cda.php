<?php

/* ernestoalumnosBundle:Default:alumno.html.twig */
class __TwigTemplate_85e8a9ec799937610a3f692266850d5e4267298d7ed0f4b54ea1c05af8190cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ernestoalumnosBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ernestoalumnosBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Vista de alumno ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Detalles del alumno</h1>
    <div>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "matricula", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ernestoalumnosBundle:Default:alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  50 => 6,  47 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
