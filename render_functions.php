<?php

function getHtml($fileName){
    return file_get_contents($fileName);
}

function render($template, $content,$title){

    $container = getHtml($template);
    $container = str_replace("{{content}}", $content, $container);
    $container = str_replace("{{title}}", $title, $container);
    return $container;
}