<?php

$db = new Database($config['database']);
// dd($notes);
$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

if ($uri=='/notes')
{
    $notes = $db->query("select * from notes,user where user.id = notes.user_id;",[])->fetchAll();
    require "views/notes.views.php";
}
    