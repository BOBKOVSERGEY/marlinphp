<?php
require __DIR__ . '/config.php';

// формируем запрос
$sql = "UPDATE tasks SET title=:title, description=:description WHERE id=:id";

// подготавливаем запрос
$statement = $pdo->prepare($sql);


// выполняем запрос
$statement->execute($_POST);


// перенаправляем на главную
header("Location: /note/");
exit;