<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../classes/QueryBuilder.php';
require __DIR__ . '/../classes/Auth.php';


$db = new QueryBuilder();
$tasks = $db->findAll('tasks');

$auth = new Auth($db);


$url = $_SERVER['REQUEST_URI'];

if ($url == '/list') {

} else if ($url == '/') {
  require __DIR__ . '/../index.php'; exit;
} else if($url == '/contact') {
  echo 'Подключен файл contacts.php';exit;
} else {
  echo "404 | NOT FOUND";
}

