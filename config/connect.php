<?php
function connect_db() {
    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $dbname = "duan1";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
// function connect_db() {
//     $servername = "localhost:3307";
//     $username = "root";
//     $password = "";
//     $dbname = "duan1";
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $conn;
// }
?>