<?php

$host = "localhost";
$dbName = "todoapp";
$user = "root";
$password = "";
$protocol = "mysql:host={$host};dbname={$dbName}";
try {
  $conn = new PDO($protocol, $user, $password);
} catch (PDOException $e) {
  die($e->getMessage());
}
