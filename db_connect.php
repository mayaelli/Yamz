<?php
// db_connect.php
$host = 'localhost'; // Replace with your database host if different
$username = 'your_username'; // Replace with your database username
$password = 'your_password'; // Replace with your database password
$database = 'your_database_name'; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
