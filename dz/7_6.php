<?php
global $text;

function square($n) {    
    return strtolower($n);  
}

$text = array("Ваааав", "сВПВП", "НАПаП");
$got = array_map('square', $text);  

var_dump($got) ;