<?php 
include 'config.php';
$todoId= $_GET['id'];
$todoStore->deleteById($todoId);
header("location:/index.php"); 
?>