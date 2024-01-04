<?php
// Functions that directly query the database
function getEmail($mysqli, $email){
    $sql = "SELECT email FROM users WHERE email = ?";

    // Using prepared statements to send in query separately from user input data to prevent SQL injection.
    $stmt = $mysqli->prepare($sql);
    // Using the bind parameter method to replace the string placeholder in the above query
    $stmt->bind_param('s', $email);
    $stmt->execute();

    // Grabbing the result from the database. If there is an email that matches, will return true.
    $result = $stmt->fetch();

    return $result;
}

function saveUser($mysqli, $fname, $lname, $email, $password){
    $sql = "INSERT INTO users(fname, lname, email, passwordHash) VALUES (?, ?, ?, ?)";

    $stmt = $mysqli->prepare($sql);

    // Hash the password using the PASSWORD_DEFAULT algorithm
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param('ssss', $fname, $lname, $email, $passwordHash);
    $stmt->execute();
}

function getUserRecord($mysqli, $email){
    // Query to database for email and return associative array of user data corresponding to the email.
    $sql = sprintf("SELECT * FROM users WHERE email = '%s'", $mysqli -> real_escape_string($email));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    return $user;

}