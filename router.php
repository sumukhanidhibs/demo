<?php

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = [
    '/' => 'controller/index.php',
    '/about' => 'controller/about.php',
    '/contact' => 'controller/contact.php',
    '/notes' => 'controller/notes.php',
    '/notes/create' => 'controller/note-create.php',
    '/note' => 'controller/note.php'
];

function abort($code=404)
{
    http_response_code($code);
    if ($code==404)
    {
        require "views/404.php";
    }elseif($code==403){
        require "views/403.php";
    }
    
    die();
}

function checkandrender($uri,$routes)
{
    if (array_key_exists($uri,$routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}

checkandrender($uri,$routes);
