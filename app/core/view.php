<?php
require_once dirname(__DIR__).'/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
class View {

    private $twig;

    function __construct()
    {
        $loader = new Twig_Loader_Filesystem(dirname(__DIR__).'/views/twig');
        $twig = new Twig_Environment($loader, array(
            'cache' => dirname(__DIR__).'/views'
        ));
        $this->twig = $twig;

    }

//    function generate($content_view, $template_view, $data = null){
//        include 'app/views/'.$template_view;
//    }

    function generate($content_view, $data = null){
        echo $this->twig->render($content_view, $data);
    }

}