<?php
$host = "your-db-endpoint";
$user = "your-db-username";
$password = "your-db-password";
$dbname = "your-db-name";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
