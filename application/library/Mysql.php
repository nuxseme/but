<?php
namespace application\library;

class Mysql {
  private static $instance = NULL;

  private function __construct() { }
  private function __clone() { }

  public static function getInstance() {
    if (null === self::$instance) {
      self::$instance = new \PDO('mysql:host=47.105.94.234;port=3306;dbname=but', 'root', '123456');;
      self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    return self::$instance;
  }
}