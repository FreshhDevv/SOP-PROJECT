<?php


// Database configuration
$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "project_db";

// Create database connection
$con = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
