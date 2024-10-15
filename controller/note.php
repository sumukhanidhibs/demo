<?php
// $db = new Database($config['database']);
require 'notes.php';

$id = $_GET['id'];

$note = $db->query("select * from notes where id=:id",[':id'=>$id])->findorobort();

$curruser = 1;

authorize($note['user_id']==$curruser,Response::FORBIDDEN);

$heading = "Note";

require "views/note.views.php";