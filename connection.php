<?php
$servername = "localhost";
$username = "u318822451_khoa";
$password = "khoa1245";
$dbname = "u318822451_khoa";
$conn = mysqli_connect ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>