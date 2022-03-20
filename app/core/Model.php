<?php

class Model{
    protected $db;
    protected $data;

    public function __construct(){
        $this->db = new Database();
    }

    public function sqlQuery($sqlQuery){
        if(isset($this->db)){
            $this->data = $this->db->query($sqlQuery);   //$this-data will be the result of the executed query
        }
    }

    public function getData(){
        return $this->data;
    }
}