<?php
  // Replace with your MySQL credentials
$host = "localhost";
$username = "root";
$password = ">";
$dbname = "rfid";

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>