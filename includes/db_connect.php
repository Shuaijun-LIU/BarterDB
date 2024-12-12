<?php
// Read environment variables for sensitive data
$host = getenv('DB_HOST') ?: 'db4free.net';  
$user = getenv('DB_USER') ?: 'barterdb_yueyu';
$password = getenv('DB_PASSWORD') ?: '12345678'; 
$database = getenv('DB_NAME') ?: 'barterdb_yueyu';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
