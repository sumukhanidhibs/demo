<?php

$db = new Database($config['database']);

$notes = $db->query("select * from notes;")->fetchAll();

foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
}



require "views/notes.views.php";