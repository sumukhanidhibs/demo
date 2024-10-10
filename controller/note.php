<?php
// $db = new Database($config['database']);
require 'notes.php';

$id = $_GET['id'];

$note = $db->query("select * from notes where id=:id",[':id'=>$id])->fetch();

$heading = "Note";

require "views/note.views.php";