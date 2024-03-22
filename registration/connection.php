<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'RES';

// Connect to the database
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>