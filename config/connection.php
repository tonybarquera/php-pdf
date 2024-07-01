<?php
  class Connection {
    private $serverName;
    private $username;
    private $dbName;
    private $password;
    public $connection;
  
    public function __construct() {
      $this->serverName = "localhost";
      $this->username = "root";
      $this->password = "root";
      $this->dbName = "sakila";
    }
  
    function connect() {
      $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->dbName", $this->username, $this->password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function close() {
      $this->connection = null;
    }
  }