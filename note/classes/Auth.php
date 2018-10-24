<?php

class Auth
{

  public $db;

  public function __construct(QueryBuilder $db)
  {
    $this->db = $db;
  }

  public function register($email, $password)
  {
    $this->db->add('users', ['email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
  }

  public function login($email, $password)
  {
    // create request
    $sql = "SELECT * FROM users WHERE email=:email LIMIT 1";
    // prepare request
    $statement = $this->db->pdo->prepare($sql);
    // pass parameters
    $statement->bindParam(":email", $email);
    // выполняем запрос
    $statement->execute();
    // вытвскиваем результат
    $user = $statement->fetch(PDO::FETCH_OBJ);

    if (password_verify($password, $user->password)) {
      $_SESSION['user'] = $user;
      return true;
    }
    return false;
  }

  public function logout()
  {
    unset($_SESSION['user']);
  }

  public function check()
  {
    if (isset($_SESSION['user'])) {
      return true;
    }

    return false;
  }

  public function currentUser()
  {
    if (isset($_SESSION['user'])) {
      return $_SESSION['user'];
    }
  }

}