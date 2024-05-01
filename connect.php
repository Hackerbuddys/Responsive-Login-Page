<?php
// Database connection parameters
$host = "localhost";
$user = "root";
$pass = "";
$db = "registration_db";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
   echo "Failed to connect DB".$conn->connect_error;
}
?>