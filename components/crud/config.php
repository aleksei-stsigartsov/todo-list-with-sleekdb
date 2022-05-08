<?php
require_once __DIR__ .'../../../vendor/autoload.php';

use SleekDB\Store;
use SleekDB\Query;

$databaseDirectory = __DIR__ . "/database";

$storeConfiguration = [
  "auto_cache" => true,
  "cache_lifetime" => null,
  "timeout" => 120,
  "primary_key" => "_id",
  "search" => [
    "min_length" => 2,
    "mode" => "or",
    "score_key" => "scoreKey",
    "algorithm" => Query::SEARCH_ALGORITHM["hits"]
  ]
];

$todoStore= new Store("todos", $databaseDirectory, $storeConfiguration);

$todoQueryBuilder = $todoStore->createQueryBuilder();
$todoQueryBuilder->orderBy(["status" => "asc"]);

$doneTodo = $todoStore->findBy(["status", "=", "done"]);
$activeTodo = $todoStore->findBy(["status", "=", "active"]);

$todoList= $todoQueryBuilder->getQuery()->fetch();
$todoList = json_decode(json_encode($todoList));
