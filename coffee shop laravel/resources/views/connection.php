<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "userform";

// Create a connection
$db = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Set the charset to UTF-8
mysqli_set_charset($db, "utf8");
?>
