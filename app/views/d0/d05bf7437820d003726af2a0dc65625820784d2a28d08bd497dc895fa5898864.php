<?php

/* cabinet_view.twig */
class __TwigTemplate_5b48fd0ba3ec6febfdae62c7fa8c8463bd46eaec1ca4f676a4280fee493b1b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "cabinet_view.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\" >
        <h3><b>здесь можно дополнить данные о себе</b><br></h3>

        <input type=\"text\" name=\"name\" placeholder=\"Имя\" class=\"inputForm\"> ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["errorName"]) ? $context["errorName"] : null), "html", null, true);
        echo "<Br>
        <input type=\"number\" name=\"age\" placeholder=\"возраст\" class=\"inputForm\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["errorAge"]) ? $context["errorAge"] : null), "html", null, true);
        echo "<Br>

        <textarea name=\"description\" placeholder=\"описание\" class=\"inputForm\"> </textarea> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["errorDesc"]) ? $context["errorDesc"] : null), "html", null, true);
        echo "<Br>
        ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "<br>
        <input type=\"file\" name=\"image\" placeholder=\"картинка\" class=\"inputForm\"><Br>
        <input type=\"submit\" name=\"отправить\">
    </form><br>
    <a href=\"../gallery\">перейти в галерею</a>
";
    }

    public function getTemplateName()
    {
        return "cabinet_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 13,  50 => 11,  46 => 10,  40 => 7,  35 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.twig' %}*/
/* */
/* {% block content %}*/
/*     {#<h1>{{ title }}</h1>#}*/
/*     {#<p>{{ content }}</p>#}*/
/*     <h1>{{ title }}</h1>*/
/*     <form action="{{ action }}" method="POST" enctype="multipart/form-data" >*/
/*         <h3><b>здесь можно дополнить данные о себе</b><br></h3>*/
/* */
/*         <input type="text" name="name" placeholder="Имя" class="inputForm"> {{ errorName }}<Br>*/
/*         <input type="number" name="age" placeholder="возраст" class="inputForm">{{ errorAge }}<Br>*/
/* */
/*         <textarea name="description" placeholder="описание" class="inputForm"> </textarea> {{ errorDesc }}<Br>*/
/*         {{ error  }}<br>*/
/*         <input type="file" name="image" placeholder="картинка" class="inputForm"><Br>*/
/*         <input type="submit" name="отправить">*/
/*     </form><br>*/
/*     <a href="../gallery">перейти в галерею</a>*/
/* {% endblock %}*/
