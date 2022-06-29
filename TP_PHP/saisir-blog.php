<?php

require_once "./connect.php";
require_once "Classe/Blog.php";

if(count($_POST) > 0)
{
//var_dump($_POST);

$blog = new Blog("", "");

foreach($_POST as $c => $v){
    $blog->$c = $v;
}

$blog->setBlog($pdo);
}
else header("Location: index.php");



?>