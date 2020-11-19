<?php
include 'db.php';

//insert users data to DB
function insert($name, $age, $password) {
  try {
    global $conn;

    //Run Query
    $sql = $conn->prepare("insert into users (name,age,password) values (:name,:age,:password)");
    $sql->bindParam(':name', $name);
    $sql->bindParam(':age', $age);
    $sql->bindParam(':password', $password);
    $sql->execute();

  } catch (pdoexception $e) {
    echo $sql . "<br/>" . $e->getMessage();
  }
}

//read data from DB
function read() {
  try {
    global $conn;

    //Run Query
    $sql = $conn->prepare("select * from users");
    $sql->execute();

    //Get result
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $result;

  } catch (PDOException $e) {
    echo $sql . "<br/>" . $e->getMessage();
  }
}