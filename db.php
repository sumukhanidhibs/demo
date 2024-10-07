<?php

require "functions.php";
$username="sumukha";
$pass="1144";

$dsn = "mysql:host=localhost;port=3306;dbname=todo;charset=utf8mb4";
$query = "select * from posts;";

$pdo = new PDO($dsn,$username,$pass);

$statement = $pdo->prepare($query);

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
}
// dd($posts);
