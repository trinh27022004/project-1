<?php

// $servername = "localhost:4306";
// $username = "root";
// $password = "";
// $sql = "CREATE DATABASE duan1";


// try {
//     $conn = new PDO("mysql:host=$servername", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $conn->exec($sql);
//     echo "Database created successfully<br>";
//   } catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
//   }

  $servername = "localhost";
  $username = "root";
  $password = "";
  
  try {
      $conn = new PDO("mysql:host=$servername", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "CREATE DATABASE duan1";
      $conn->exec($sql);
      echo "Database created successfully<br>";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

?>