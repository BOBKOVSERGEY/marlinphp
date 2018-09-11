<?php
require __DIR__ . '/config.php';

require __DIR__ . '/classes/QueryBuilder.php';

$id = $_GET['id'];

$db = new QueryBuilder();

$task = $db->getTask($id);

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
    <?php echo $task['title'];?>
  </h1>
  <div class="mt-2 mb-2">
    <?php echo $task['description'];?>
  </div>
  <a href="/note/">Go Back</a>
</div>
</body>
</html>