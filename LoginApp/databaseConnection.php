<?php
$host = "localhost";
$username = "root";
$serverPassword = "";
$dbname = "coffeeclub";

// Opening a new connection to MySQL server
$mysqli = new mysqli($host, $username, $serverPassword, $dbname);

// If there's an error in connecting to the server, kill the program
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL server:  " . $mysqli->connect_error);
}