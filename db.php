<?php

 // Kết nối đến cơ sở dữ liệu
 $servername = "localhost";
 $username = "root";
 $password = "12345678";
 $dbname = "eproject";

 $conn = new mysqli($servername, $username, $password, $dbname);

 // Kiểm tra kết nối
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 ?>
    
