<?php
require __DIR__ . '/../vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];
$data = [];




  if ($url == '/') {
    $data = ["\App\controllers\HomeController", 'index'];
  } else if ($url == '/about') {
    $data = ["\App\controllers\HomeController", 'about'];
  }

if (empty($data)) {
  echo 'Страница не найдена 404';
} else {
  call_user_func($data);
}



