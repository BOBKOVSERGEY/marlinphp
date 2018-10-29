<?php

$url = $_SERVER['REQUEST_URI'];

if ($url == '/note/web/about') {
  echo 'Подключен файл about.php'; exit;
} elseif ($url == '/note/web/contact') {
  echo 'Подключен файл contacts.php';exit;
}

echo "404 | NOT FOUND";