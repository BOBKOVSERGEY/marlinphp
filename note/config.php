<?php

error_reporting(-1);

// 1 Connect
$pdo = new PDO("mysql:host=localhost; dbname=note", "root", "");



// DEBUG

function debugPrintR($arr) {
  echo '<pre>';
    print_r($arr);
  echo '</pre>';
}

function debugVarDump($arr) {
  echo '<pre>';
  var_dump($arr);
  echo '</pre>';
}