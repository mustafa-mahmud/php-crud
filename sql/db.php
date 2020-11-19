<?php

$server = 'localhost';
$username = 'root';
$password = '';
$port = 3308;
$db = 'mycrud';

try {
  $conn = new PDO("mysql:host=$server;port=$port;dbname=$db", $username, $password);

  //set error mode exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($conn) {
    // echo 'DB Connected';
  }
} catch (PDOException $e) {
  echo 'Connection failed' . $e->getMessage();
}