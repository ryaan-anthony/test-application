<?php
namespace Tests;

class Hello
{
  protected $message;
  
  public function setMessage($message)
  {
    $this->message = $message;
  }
  
  public function getMessage()
  {
    return $this->message;
  }
  
}
