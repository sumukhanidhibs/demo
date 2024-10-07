<?php 

require 'functions.php';
require 'db.php';
require 'router.php';

$config = require('config.php');

$db = new Database($config['database'],$username="sumukha",$pass="1144");

$posts = $db->query("select * from posts;")->fetchAll();

foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
}