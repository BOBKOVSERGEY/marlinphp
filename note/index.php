<?php
require __DIR__ . '/config.php';

// Подготавливаем запрос
$statement = $pdo->prepare("SELECT * FROM tasks");

// выполняем запрос
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_ASSOC); // или передать 2

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
      All Tasks
    </h1>
    <a href="#" class="btn btn-success">Add Task</a>
    <table class="table mt-5 mb-5">
      <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($tasks as $task) {?>
      <tr>
        <td><?php echo $task['id']; ?></td>
        <td><?php echo $task['title']; ?></td>
        <td>
          <a href="#" class="btn btn-warning">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
</body>
</html>