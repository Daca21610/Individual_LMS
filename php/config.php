<?php
$host = "localhost";
$username = "root";
$password = ""; // Set your MySQL password if required
$database = "school_db";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>