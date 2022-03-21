<?php

class Core {
    protected $currentController = 'HomeController';

    public function __construct(){
        $url = $_SERVER['REQUEST_URI']; //get uri
        $url = rtrim($url, '/');        
        $url = explode('/', $url);  //split into an array
        //  http://localhost/rabIT/public/index -> [localhost, rabIt, public, index]
        
        $file;

        /*
            If $url[3] would be index or index.php it calls the HomeController as the controller,
            Otherwise the $currentController will be the $url[3];
        */
        if(sizeof($url) == 3 || $url[3] == 'index.php' || $url[3] == 'index'){
            $file = '../app/controllers/' . $this->currentController  . '.php';
            $currentController = $this->currentController;
        } else {
            $file = '../app/controllers/' . $url[3] . '.php';
            $currentController = $url[3];
        }

        if(file_exists($file)){
            require $file;
        } else {
            throw new Exception('The file: ' . $file . ' Does not exists.');
        }

        //the selected controller will be the new controller and call its index method 
        $controller = new $currentController;
        $controller->index();
    }
}


