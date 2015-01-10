<?php

/* ernestoalumnosBundle::main.html.twig */
class __TwigTemplate_561fc2caaef6dd2dda96536127a77b514ef281ff8cba6ad01e00c6ecfc810334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alumnos/css/main.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"pagina\" class=\"cfix\">
        <div id=\"contenido\">
            ";
        // line 11
        $this->displayBlock('contenido', $context, $blocks);
        // line 14
        echo "        </div>
        <div id=\"menu\">
            ";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        // line 20
        echo "        </div>     
    </div>            
";
    }

    // line 11
    public function block_contenido($context, array $blocks = array())
    {
        // line 12
        echo "                Contenido
            ";
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        echo "                
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/alumnos/images/opensource.png"), "html", null, true);
        echo "\"height=\"50\" width=\"50\"/>
                Menu
            ";
    }

    public function getTemplateName()
    {
        return "ernestoalumnosBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  78 => 16,  73 => 12,  70 => 11,  64 => 20,  62 => 16,  58 => 14,  56 => 11,  52 => 9,  49 => 8,  42 => 5,  39 => 4,  11 => 2,);
    }
}
