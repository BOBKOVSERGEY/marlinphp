<?php
require __DIR__ . '/config.php';

$id = $_GET['id'];
// формируем запрос
$sql = "DELETE FROM tasks WHERE id = :id";

// подготавливаем запрос
$statement = $pdo->prepare($sql);

// передаем параметры
$statement->bindParam(":id", $id);

// выполняем запрос
$statement->execute();

// перенаправляем
header('Location: /note/');


// удаление задачи
