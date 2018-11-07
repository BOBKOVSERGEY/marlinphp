<?php
class Account
{
  private $balance = 0;

  public function withDrow($amount)
  {
    if ($this->balance == 0 ) {
      throw new Exception('Пополните баланс');
    }
    $this->balance - $amount;
    return true;
  }
}


try {

  $bankAccount = new Account();
  $bankAccount->withDrow(123);

} catch (Exception $exception) {
  echo $exception->getMessage();
}