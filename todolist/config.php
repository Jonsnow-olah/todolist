<?php
session_start();
require_once 'function.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>