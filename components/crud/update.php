<?php
include 'config.php';

$todoId = $_GET['id'];
$todoId = (int)$todoId;
$activeTodo2 = $todoStore->findBy(
    [
        ["status", "=", "active"], ["_id", "=", $todoId]
    ]
);
$activeTodo2 = json_encode($activeTodo2);
$doneTodo2 = $todoStore->findBy(
    [
        ["status", "=", "done"], ["_id", "=", $todoId]
    ]
);

$doneTodo2 = json_encode($doneTodo2);
echo $doneTodo2;

if($activeTodo2 != "[]") {
    $setDone = $todoStore->updateById($todoId, [ "status" => "done" ]);
}else if ($doneTodo2 != "[]"){
    $setActive = $todoStore->updateById($todoId, [ "status" => "active" ]);
} 

header("location:/index.php"); 