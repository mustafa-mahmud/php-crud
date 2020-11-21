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

//update data to DB
function update($id, $name, $age, $password) {
  try {
    global $conn;

    //Run Query
    $sql = $conn->prepare("UPDATE users SET name='$name', age='$age', password='$password' WHERE id='$id'");
    $sql->execute();

    //msg to success updated
    if ($sql->rowCount()) {
      echo $sql->rowCount() . ' row update successfully';
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function delete($id) {
  try {
    global $conn;

    //query run
    $sql = $conn->prepare("DELETE FROM users WHERE id=$id");
    $sql->execute();

    echo "Record deleted successfully.";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}