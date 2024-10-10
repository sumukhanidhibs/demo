<?php
$config= require('config.php');

$db = new Database($config['database']);

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$heading = "Notes";

if ($uri=='/notes')
{
    $notes = $db->query("select * from notes,user where user.id = notes.user_id;",[])->fetchAll();
    require "views/notes.views.php";
}
    