<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "log_register";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>