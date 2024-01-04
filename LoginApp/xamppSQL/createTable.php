<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffeeclub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(150) NOT NULL,
lname VARCHAR(150) NOT NULL,
email VARCHAR(255) UNIQUE NOT NULL,
passwordHash VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
