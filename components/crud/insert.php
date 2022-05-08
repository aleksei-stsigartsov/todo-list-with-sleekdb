<?php 
include 'config.php';
echo $LIST = $_POST['list'];
$newTodo = ["description" => $_POST['list'], "status" => "active"];
$newTodo = $todoStore->insert($newTodo);
header("location:/index.php"); 

?> 