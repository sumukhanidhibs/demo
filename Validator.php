<?php

class Validator
{
    public static function string($value,$min=1,$max=INF)
    {
        $value = trim(strip_tags(htmlspecialchars($value)));

        return strlen($value)>= $min && strlen($value)<= $max;
    } 
}