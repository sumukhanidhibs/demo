<?php

class Database
{
    public $conn;

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
        $stmt = $this -> conn -> prepare($query);
        $stmt -> execute($params);
        return $stmt;
    }

}