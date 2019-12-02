<?php
namespace Models;

abstract class Model
{
  private static $connection;
  protected $db;
  public function __construct()
  {
    if (!self::$connection) {
      self::$connection = new \PDO('mysql:dbname=ligue1;host=localhost', 'root', null, array(
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
      ));
      self::$connection->setAttribute(\PDO::ATTR_CASE, \PDO::CASE_NATURAL );
    }
    $this->db = self::$connection;
  }
}
