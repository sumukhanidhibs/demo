<?php 
$heading = "create note";
require "notes.php";

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $title =$_POST['title'];
    $content = $_POST['content'];
    $userid =  1;
    if(!empty($title) && !empty($content))
    {
        $exe = $db->query('INSERT INTO notes(title,content,user_id) VALUES(:title,:content,:user_id);',[
            ':title' => $title,
            ':content' => $content,
            ':user_id' => $userid,
        ]);
    }else{
        die();
    }

    if($exe){
        $msg = "A new note is created";
    }else{
        $msg = "Note is not created";
    }
    $title='';
    $content='';
}

require "views/note-create.views.php";