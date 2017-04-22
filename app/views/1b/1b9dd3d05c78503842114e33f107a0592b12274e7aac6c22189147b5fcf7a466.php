<?php

/* layout.twig */
class __TwigTemplate_035e66a177f58c24cb428e1b725cd0a8ed3469bbb3e96e163e123827db907cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <title>Наш сайт</title>
    <link rel=\"stylesheet\" href=\"/assets/template/css/bootstrap.css\"/>
    <link rel=\"stylesheet\" href=\"/assets/template/css/bootstrap-theme.css\"/>
</head>
<body>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"  data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle</span>
                <span class=\"icon-bar\"></span>
            </button>

        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">Главная</a></li>
                <li><a href=\"/autorization/\">Авторизация</a></li>
                <li><a href=\"/cabinet/\">Кабинет</a></li>
                <li><a href=\"/gallery/\">Галерея</a></li>
                <li><a href=\"/users/\">Пользователи</a></li>
                <li><a href=\"/mail/\">Написать письмо</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "    </div>
</div>

<div class=\"container\">
    <hr/>
    <footer>
        <p>&copy; 2017 LoftSchool</p>
    </footer>
</div>


<script src=\"https://code.jquery.com/jquery-1.12.4.min.js\"></script>
<script src=\"/assets/template/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 36,  76 => 35,  58 => 37,  56 => 35,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8"/>*/
/*     <title>Наш сайт</title>*/
/*     <link rel="stylesheet" href="/assets/template/css/bootstrap.css"/>*/
/*     <link rel="stylesheet" href="/assets/template/css/bootstrap-theme.css"/>*/
/* </head>*/
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle</span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/* */
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li><a href="/">Главная</a></li>*/
/*                 <li><a href="/autorization/">Авторизация</a></li>*/
/*                 <li><a href="/cabinet/">Кабинет</a></li>*/
/*                 <li><a href="/gallery/">Галерея</a></li>*/
/*                 <li><a href="/users/">Пользователи</a></li>*/
/*                 <li><a href="/mail/">Написать письмо</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         {% block content %}*/
/*         {% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*     <hr/>*/
/*     <footer>*/
/*         <p>&copy; 2017 LoftSchool</p>*/
/*     </footer>*/
/* </div>*/
/* */
/* */
/* <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>*/
/* <script src="/assets/template/js/bootstrap.min.js"></script>*/
/* </body>*/
/* </html>*/
