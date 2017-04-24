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
    // пишется auth
    public function checkAyth()
    {
        if($_SESSION['auth'] !== "autorization"){
            header("Location: /");
        }
    }
    // пробелы между равно
    public function incomingData($data)
    {
        $dataCheck=trim(htmlspecialchars($data));
        return $dataCheck;
    }
}