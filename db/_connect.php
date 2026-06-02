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
?>