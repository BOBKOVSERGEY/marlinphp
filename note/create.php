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
      Create Task
    </h1>
    <form action="store.php" method="post">
      <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Введите название">
      </div>
      <div class="form-group">
        <textarea name="content" class="form-control" placeholder="Введите описание"></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>