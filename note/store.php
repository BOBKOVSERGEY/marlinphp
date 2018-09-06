<?php

require __DIR__ . '/config.php';

$title = $_POST['title'];
$content = $_POST['content'];

// формируем запрос для вставки
$sql = "INSERT INTO tasks (title, description) VALUES(:title, :content)";

// подготавливаем запрос
$statement = $pdo->prepare($sql);

// связываем метку со значением

//$statement->bindParam(":title", $title, PDO::PARAM_STR);
//$statement->bindParam(":content", $content, PDO::PARAM_STR);





// выполняем запрос
$result = $statement->execute($_POST);

// перенаправляем пользователя на главную страницу
header("Location: /note/");
exit;

/*if ($result) {
  echo "Данные успешно добавлены";
} else {
  echo "Ошибка";
}*/


// сохранение новой задачи

