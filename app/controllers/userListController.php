<?php

class UserListController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->createModel('userListModel');
        $this->createView('pages/userListView', $this->model->getData());
        $this->view->renderView('pages/userListView');
    }
}