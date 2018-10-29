<?php
require __DIR__ . '/config.php';
require __DIR__ . '/classes/QueryBuilder.php';
require __DIR__ . '/classes/Auth.php';


$db = new QueryBuilder();
$tasks = $db->findAll('tasks');

$auth = new Auth($db);

//$auth->register('sergey_bobkov2@inbox.ru','123456');
debugPrintR($_SERVER);
debugPrintR($_SESSION);

debugVarDump($auth->login('sergey_bobkov2@inbox.ru', '123456'));

//$auth->logout();

debugVarDump($auth->check());

debugPrintR($auth->currentUser());
$user = $auth->currentUser();

debugPrintR($user);
echo $user->email;



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
    <a href="create.php" class="btn btn-success">Add Task</a>
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
          <a href="show.php?id=<?php echo $task['id']; ?>" class="btn btn-info">Read</a>
          <a href="edit.php?id=<?php echo $task['id']; ?>" class="btn btn-warning">Edit</a>
          <a onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $task['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php }?>
      </tbody>
    </table>
  </div>
</body>
</html>