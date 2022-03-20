<?php

class View {
    protected $view_data;
    protected $view_name;

    public function __construct($view_name, $view_data){
        $this->view_data = $view_data;
        $this->view_name = $view_name;
    }

    public function renderView($name){
        $file = '../app/views/' . $name . '.php';
        if(file_exists($file)){
            require_once $file;
        } else {
            throw new Exception('The view: ' . $file . 'Does not exists.');
        }
        
    }
}