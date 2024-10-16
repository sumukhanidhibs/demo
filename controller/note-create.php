<?php 
require 'Validator.php';
$heading = "create note";
require "notes.php";

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $error = [];

    $title = trim(htmlspecialchars(strip_tags($_POST['title'])));
    $content = trim(htmlspecialchars(strip_tags($_POST['content'])));
    $userid =  1;

    if(!Validator::string($title,1,1000) || !Validator::string($content,1,1000))
    {
        $error['warning'] = "The fields should not be empty or exceed 1000 characters";
    }

    if(empty($error))
    {
        $exe = $db->query('INSERT INTO notes(title,content,user_id) VALUES(:title,:content,:user_id);',[
            ':title' => $title,
            ':content' => $content,
            ':user_id' => $userid,
        ]);
    }
}

require "views/note-create.views.php";