<?php

class HomeController extends Controller {
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->createView('pages/homeView', '');
        $this->view->renderView('pages/homeView');
    }
}