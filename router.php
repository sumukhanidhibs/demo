<?php

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = [
    '/' => 'controller/index.php',
    '/about' => 'controller/about.php',
    '/contact' => 'controller/contact.php',
    '/notes' => 'controller/notes.php',
    '/note' => 'controller/note.php'
];

function abort(){
    http_response_code(404);
    require "views/404.php";
    die();
}

if (array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
    abort();
}