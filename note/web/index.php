<?php

$url = $_SERVER['REQUEST_URI'];

if ($url == '/about') {
  echo 'Подключен файл about.php'; exit;
} else if ($url == '/') {
  echo 'Подключен файл index.php';exit;
} else if($url == '/contact') {
  echo 'Подключен файл contacts.php';exit;
} else {
  echo "404 | NOT FOUND";
}

