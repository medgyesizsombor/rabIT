<?php

class AdListController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->createModel('adListModel');
        $this->createView('pages/adListView', $this->model->getData());
        $this->view->renderView('pages/adListView');
    }
}