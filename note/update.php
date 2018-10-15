<?php
require __DIR__ . '/config.php';

require __DIR__ . '/classes/QueryBuilder.php';

$data = $_POST;
$db = new QueryBuilder();

// изменение или обновление задачи

$db->update('tasks', $data);
