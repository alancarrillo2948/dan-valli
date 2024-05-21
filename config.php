<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "sistema_gestion_tatuajes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>