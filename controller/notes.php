<?php
$config= require('config.php');

$db = new Database($config['database']);

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$heading = "Notes";

if ($uri=='/notes')
{
    $notes = $db->query("select notes.id,notes.title,notes.content,notes.user_id,user.name from notes,user where notes.user_id=user.id;",[])-> get();

    require "views/notes.views.php";
}
    