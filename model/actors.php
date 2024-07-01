<?php

  class Model_Actor {
    private $connection;

    function __construct() {
      require_once '../config/connection.php';
      $this->connection = new Connection();
      $this->connection->connect();
    }

    function getActors() {
      $sql = "CALL SP_ALL_ACTORS()";
      $stmt = $this->connection->connection->prepare($sql);
      $stmt->execute();

      $array = array();
      $array['data'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $array;
    }
  }