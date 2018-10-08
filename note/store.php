<?php

require __DIR__ . '/config.php';
require __DIR__ . '/classes/QueryBuilder.php';


$db = new QueryBuilder();

$data = [
  'title' => $_POST['title'],
  'description' => $_POST['content'],
];

$db->add('tasks', $data);
header("Location: /note/");
exit;

