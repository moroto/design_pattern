<?php
class SingletonSample
{
  private $id;
  private static $instance;

  private function __construct() {
    $this->id = md5(date('r') . mt_rand());
  }

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new SingletonSample();
      echo 'a SingletonSample instance was created !';
    }

    return self::$instance;
  }
  
  public function getID() {
    return $this->id;
  }

  // 複製を許可しない
  public final function __clone() {
    throw new RuntimeException ('Clone is not allow against ' . get_class($this));
  }
}
