<?php
require __DIR__ . '/config.php';

require __DIR__ . '/classes/QueryBuilder.php';

$id = $_GET['id'];

$db = new QueryBuilder();


// удаление задачи

$db->delete('tasks', $id);

header('Location: /note/');

