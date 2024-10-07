<?php 

require 'functions.php';
require 'db.php';
require 'router.php';

$db = new Database();
$posts = $db->query("select * from posts;")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
}