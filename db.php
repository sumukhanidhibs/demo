<?php

class Database
{
    public $conn;

    function __construct()
    {
        $username="sumukha";
        $pass="1144";
        $dsn = "mysql:host=localhost;port=3306;dbname=todo;charset=utf8mb4";
        $this->conn = new PDO($dsn,$username,$pass);
    }

    public function check()
    {
        if ($this->conn){
            echo "connection succesful";
        }else{
            echo "error";
        }
    }
    

    public function query($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

}








// $db->check();
// $statement->execute();

// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// foreach ($posts as $post){
//     echo "<li>".$post['title']."</li>";
// }
// // dd($posts);
