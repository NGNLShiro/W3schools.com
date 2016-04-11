<?php
$servername = "server19.hostinger.vn";
$username = "khoa";
$password = "khoa1245";
$dbname = "khoa";
$conn = mysqli_connect ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>