<?php

class Database
{
    private $conn;
    private $host;
    private $user;
    private $password;
    private $database;

    public function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'rabIT';
    }

    public function connect($sqlQuery){
        $res_data;

        //try to connect to dababase
        try{
            $this->conn = mysqli_connect($this->host, $this->user, $this->password);
        } catch (Exception $e){
            throw new Exception('Cannot connect database');
        }
        
        //select database
        try{
            if(mysqli_select_db($this->conn, $this->database)){
                $result = mysqli_query($this->conn, $sqlQuery);      //execute the query
                $res_data = $result->fetch_all();
            }
        } catch (Exception $e){
            throw new Exception('Cannot select database');
        }

        mysqli_close($this->conn);
        return $res_data;               //return the result of the query
    }
}
