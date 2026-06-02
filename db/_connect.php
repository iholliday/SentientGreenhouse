<?php
// Connection details
// define('DB_HOST', 'plesk.remote.ac');
$host     = "plesk.remote.ac";
$database = "WS371298_iot";
$username = "WS371298_iotweb";
$password = "2D10n8_rl";

// Start database connection
$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
    die(json_encode(['error' => 'Connection failed: ' . mysqli_connect_error()]));
}

$pdo = new PDO(
    "mysql:host=localhost;dbname=mydb;charset=utf8mb4",
    $username,
    $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
?>