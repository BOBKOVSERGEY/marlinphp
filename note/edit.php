<?php
require __DIR__ . '/config.php';
// формируем запрос
$sql = "SELECT * FROM tasks WHERE id = :id";

// подготавливаем запрос
$statement = $pdo->prepare($sql);

// передаем параметризованнные параметры
$statement->bindParam(":id", $_GET['id']);

// выполняем запрос
$statement->execute();

// записываем релультат
$task = $statement->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>
      Edit Task
    </h1>
    <form action="update.php" method="post">
      <div class="form-group">
        <input type="text" name="title" class="form-control" value="<?php echo $task['title'];?>">
        <input type="hidden" name="id" value="<?php echo $task['id'];?>">
      </div>
      <div class="form-group">
        <textarea name="description" class="form-control"><?php echo $task['description'];?></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-warning" type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>