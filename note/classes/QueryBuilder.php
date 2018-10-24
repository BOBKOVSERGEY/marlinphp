<?php

class QueryBuilder
{

  public $pdo;

  public function __construct()
  {
    $this->pdo = new PDO("mysql:host=localhost; dbname=note", "root", "");
  }

  // все задачи
  public function findAll($table)
  {
    // формируем запрос
    $sql = "SELECT * FROM $table ORDER BY id DESC";

    // Подготавливаем запрос
    $statement = $this->pdo->prepare($sql);

    // выполняем запрос возвращает true или false
    $statement->execute();

    $results = $statement->fetchAll(PDO::FETCH_ASSOC); // или передать 2

    return $results;

  }

  // добавляем задачу
  public function add($table, $data)
  {



    $keys = array_keys($data);
    $stringOfKeys = implode(',', $keys);

    $placeholders = ":" . implode(',:', $keys);

    // формируем запрос для вставки
    $sql = "INSERT INTO $table ($stringOfKeys) VALUES($placeholders)";


    // подготавливаем запрос
    $statement = $this->pdo->prepare($sql);

    // связываем метку со значением

    //$statement->bindParam(":title", $title, PDO::PARAM_STR);
    //$statement->bindParam(":content", $content, PDO::PARAM_STR);

    // выполняем запрос
    $result = $statement->execute($data);

  }

  // вывод одной задачи
  public function findOne($table,$id)
  {
    // формируем запрос
    $sql = "SELECT * FROM $table WHERE id = :id";

// подготавливаем запрос
    $statement = $this->pdo->prepare($sql);

// передаем параметризованнные параметры
    $statement->bindParam(":id", $id);

// выполняем запрос
    $statement->execute();

// записываем релультат
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
  }

  // обновление задачи
  public function update($table,$data)
  {
    $fields = '';

    foreach ($data as $key => $value) {
      $fields .= $key . "=:" .$key . ",";
    }

    $fields = rtrim($fields, ',');

    // формируем запрос
    $sql = "UPDATE $table SET $fields WHERE id=:id";


// подготавливаем запрос
    $statement = $this->pdo->prepare($sql);


// выполняем запрос
    $statement->execute($data);


// перенаправляем на главную
    header("Location: /note/");
    exit;
  }

  // удаление задач
  public function delete($table, $id)
  {
    // формируем запрос
    $sql = "DELETE FROM $table WHERE id = :id";

    // подготавливаем запрос
    $statement = $this->pdo->prepare($sql);

    // передаем параметры
    $statement->bindParam(":id", $id);

    // выполняем запрос
    $statement->execute();

  }
}