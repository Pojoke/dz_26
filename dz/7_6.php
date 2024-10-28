<?php


function square($n) {    
    return mb_strtolower($n);  
}

$text = array("Ваааав", "сВПВП", "НАПаП");
$got = array_map('square', $text);  

print_r($got) ;