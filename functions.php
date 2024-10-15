<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] == $value;
}

function authorize($condition,$status=Response::NOT_FOUND){
    if(!$condition)
    {
        if($status==404)
        {
            abort($status);
        }elseif($status==403)
        {
            abort($status);
        }
    }
}

