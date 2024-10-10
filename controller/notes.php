<?php

$db = new Database($config['database']);

$notes = $db->query("select * from notes,user where user.id = notes.user_id;",[])->fetchAll();
// dd($notes);
require "views/notes.views.php";