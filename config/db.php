<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "student_mgmt";

// Create MySQLi connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
