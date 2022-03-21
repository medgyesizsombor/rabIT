<?php

class AdListModel extends Model{
    public function __construct(){
        parent::__construct();
        $this->sqlQuery('SELECT users.name, advertisements.text FROM users, advertisements WHERE advertisements.author = users.id ORDER BY users.name');  
    }

}