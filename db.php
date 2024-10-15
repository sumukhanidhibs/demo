<?php

class Database
{
    public $conn;
    public $stmt;

    function __construct($config,$username="sumukha",$pass="1144")
    {
        $dsn = "mysql:".http_build_query($config,'',';');
        // dd($dsn);
        $this -> conn = new PDO($dsn,$username,$pass,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    
    public function query($query,$params = [])
    {
        $this -> stmt = $this -> conn -> prepare($query);
        $this->stmt -> execute($params);
        return $this;
    }

    public function find(){
        return $this->stmt->fetch();
    }

    public function findorobort(){
        $result = $this->find();

        if (!$result)
        {
            abort($code=404);
        }

        return $result;
    }

    public function get(){
        // dd($this->stmt->fetchAll());

       return $this->stmt->fetchAll();
    }

}