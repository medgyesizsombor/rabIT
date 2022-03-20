<?php

class Controller {
    protected $view;
    protected $model;

    public function __construct(){
    }

    public function createModel($model){
        $file = '../app/models/pages/' . $model . '.php';
        if(file_exists($file)){
            require_once '../app/core/Model.php';
            require_once $file;
            $this->model = new $model;
        } 
    }

    public function createView($view_name, $data){
        $this->view = new View($view_name, $data);
    }
}