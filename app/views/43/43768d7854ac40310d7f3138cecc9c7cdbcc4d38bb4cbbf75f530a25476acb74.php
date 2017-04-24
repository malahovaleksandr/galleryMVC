<?php

/* base_view.twig */
class __TwigTemplate_bafc6f35241ed6af276bce961fd6971ba11f13faf33f2729e1e99562c69a9600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "base_view.twig", 1);
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
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["titleFrom"]) ? $context["titleFrom"] : null), "html", null, true);
        echo "</h1>

    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\" method=\"POST\" >
        <p>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "</p>
        <input class=\"inputForm\" type=\"text\" name=\"login\" placeholder=\"Логин\" ><Br>
        <input class=\"inputForm\" type=\"password\" name=\"password\" placeholder=\"Пароль\"><Br>

        <input type=\"submit\" name=\"отправить\">
    </form><br><br>
";
    }

    public function getTemplateName()
    {
        return "base_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 8,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.twig' %}*/
/* */
/* {% block content %}*/
/* {#<h1>{{ title }}</h1>#}*/
/* {#<p>{{ content }}</p>#}*/
/*     <h1>{{ titleFrom }}</h1>*/
/* */
/*     <form action="{{ action }}" method="POST" >*/
/*         <p>{{ error }}</p>*/
/*         <input class="inputForm" type="text" name="login" placeholder="Логин" ><Br>*/
/*         <input class="inputForm" type="password" name="password" placeholder="Пароль"><Br>*/
/* */
/*         <input type="submit" name="отправить">*/
/*     </form><br><br>*/
/* {% endblock %}*/
