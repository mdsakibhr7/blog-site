<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogwebsite";

$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$create_db = "CREATE DATABASE IF NOT EXISTS $dbname";

if (!mysqli_query($conn, $create_db)) {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select database
mysqli_select_db($conn, $dbname);

// Create table
$create_table = "CREATE TABLE IF NOT EXISTS users (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL UNIQUE,
mobile VARCHAR(255) NOT NULL,
role VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
token VARCHAR(255),
datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


if (!mysqli_query($conn, $create_table)) {
    echo "Error creating table:" . mysqli_error($conn);

}
