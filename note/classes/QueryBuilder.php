<?php

class QueryBuilder
{

  public $pdo;

  public function __construct()
  {
    $this->pdo = new PDO("mysql:host=localhost; dbname=note", "root", "");
  }

  // все задачи
  public function getAllTasks()
  {
    // формируем запрос
    $sql = "SELECT * FROM tasks ORDER BY id DESC";

    // Подготавливаем запрос
    $statement = $this->pdo->prepare($sql);

    // выполняем запрос возвращает true или false
    $statement->execute();

    $tasks = $statement->fetchAll(PDO::FETCH_ASSOC); // или передать 2

    return $tasks;

  }

  // добавляем задачу
  public function addTask($data)
  {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // формируем запрос для вставки
    $sql = "INSERT INTO tasks (title, description) VALUES(:title, :content)";

    // подготавливаем запрос
    $statement = $this->pdo->prepare($sql);

    // связываем метку со значением

    //$statement->bindParam(":title", $title, PDO::PARAM_STR);
    //$statement->bindParam(":content", $content, PDO::PARAM_STR);

    // выполняем запрос
    $result = $statement->execute($data);

  }

  // вывод одной задачи
  public function getTask($id)
  {
    // формируем запрос
    $sql = "SELECT * FROM tasks WHERE id = :id";

// подготавливаем запрос
    $statement = $this->pdo->prepare($sql);

// передаем параметризованнные параметры
    $statement->bindParam(":id", $id);

// выполняем запрос
    $statement->execute();

// записываем релультат
    $task = $statement->fetch(PDO::FETCH_ASSOC);

    return $task;
  }

  // обновление задачи
  public function updateTask($data)
  {

    // формируем запрос
    $sql = "UPDATE tasks SET title=:title, description=:description WHERE id=:id";

// подготавливаем запрос
    $statement = $this->pdo->prepare($sql);


// выполняем запрос
    $statement->execute($data);


// перенаправляем на главную
    header("Location: /note/");
    exit;
  }

  // удаление задач
  public function deleteTask($id)
  {
    // формируем запрос
    $sql = "DELETE FROM tasks WHERE id = :id";

    // подготавливаем запрос
    $statement = $this->pdo->prepare($sql);

    // передаем параметры
    $statement->bindParam(":id", $id);

    // выполняем запрос
    $statement->execute();

  }
}