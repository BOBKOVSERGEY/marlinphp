<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../classes/QueryBuilder.php';
require __DIR__ . '/../classes/Auth.php';


$db = new QueryBuilder();


$auth = new Auth($db);


$url = $_SERVER['REQUEST_URI'];
echo $url;
if ($url == '/list') {
  echo 'hello';
} else if ($url == '/') {
  require __DIR__ . '/../index.php'; exit;
} else if($url == '/contact') {
  echo 'Подключен файл contacts.php';exit;
} else {
  echo "404 | NOT FOUND";
}

