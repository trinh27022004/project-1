<?php
// function connect_db() {
//     $servername = "localhost:4306";
//     $username = "root";
//     $password = "";
//     $dbname = "duan1";
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $conn;
// }
// function connect_db() {
//     $servername = "localhost:3307";
//     $username = "root";
//     $password = "";
//     $dbname = "duan1";
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $conn;
// }
// 
function connect_db() {
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "duan1";
    
    // Thêm options vào mảng để cấu hình PDO
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");

    try {
        // Thêm $options vào cuối chuỗi kết nối PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $options);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        // Xử lý nếu có lỗi kết nối
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}
?>
