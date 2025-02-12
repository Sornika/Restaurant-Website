<?php
$servername = "localhost";
$username = "root";
$password = ""; // No password since you logged in without one
$dbname = "database1"; // Make sure this database exists

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
