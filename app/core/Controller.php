<?php

class Controller {
    protected $view;
    protected $model;

    public function __construct(){
    }

    //if the model exists import and create the new model otherwise error
    public function createModel($model){
        $file = '../app/models/pages/' . $model . '.php';
        if(file_exists($file)){
            require_once $file;
            $this->model = new $model;
        } else {
            throw new Exception('This model: ' . $file . 'Does not exists.');
        }
    }

    //create the view with the data
    public function createView($view_name, $data){
        $this->view = new View($view_name, $data);
    }
}