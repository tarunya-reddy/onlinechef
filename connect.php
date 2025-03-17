<?php
$servername = "localhost"; // Database server (e.g., localhost)
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "chef4u"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>