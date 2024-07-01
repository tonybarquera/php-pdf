<?php

$serverName = "localhost";
$username = "root";
$password = "root";
$dbName = "sakila";

try {
  $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("CALL SP_ALL_ACTORS()");
  $stmt->execute();

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
} catch (PDOException $ex) {
  echo "Conexión fallida: " . $ex->getMessage();
}
