<?php

/**
 * Created by PhpStorm.
 * User: matthewlambert
 * Date: 13/07/2017
 * Time: 21:08
 */

namespace Acme;


use PDO;

class DatabaseAdapter {

  protected $connection;

  function __construct(PDO $connection) {
    $this->connection = $connection;
  }

  public function fetchAll($tableName) {

    return $this->connection->query('select * from ' . $tableName)->fetchAll();
  }

  public function query($sql, $parameters){
    return $this->connection->prepare($sql)->execute($parameters);
  }

}