<?php

require __DIR__ . '/config.php';
require __DIR__ . '/classes/QueryBuilder.php';


$db = new QueryBuilder();

$db->addTask($_POST);
header("Location: /note/");
exit;

