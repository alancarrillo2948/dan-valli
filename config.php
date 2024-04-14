<?php
$host = "localhost";
$db = "dan-valli";
$user = "admin";
$pass = "password";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>