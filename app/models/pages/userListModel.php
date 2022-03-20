<?php

class UserListModel extends Model{

    public function __construct(){
        parent::__construct();
        $this->sqlQuery('SELECT * from users ORDER BY users.name');
    }
}