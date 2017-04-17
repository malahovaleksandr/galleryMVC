<?php

class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
        
       
    }

    function action_index(){

    }

    public function checkAyth()
    {
        if($_SESSION['auth'] !== "autorization"){
            header("Location: /");
        }
    }
    public function incomingData($data)
    {
        $dataCheck=trim(htmlspecialchars($data));
        return $dataCheck;
    }
}