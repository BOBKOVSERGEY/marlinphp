<?php
require __DIR__ . '/config.php';

require __DIR__ . '/classes/QueryBuilder.php';

$id = $_GET['id'];

$db = new QueryBuilder();

$task = $db->findOne('tasks', $id);

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