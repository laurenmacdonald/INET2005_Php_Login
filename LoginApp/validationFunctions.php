<?php

// Functions to be used to validate user input
function isSignUpInputEmpty($fname, $lname, $email, $password, $passwordConfirmation): bool
{
    // If any of the fields are empty, return bool true.
    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($passwordConfirmation)){
        return true;
    } else {
        return false;
    }
}

function isLoginInputEmpty($email, $password): bool
{
    // If any of the fields are empty, return bool true.
    if(empty($email) || empty($password)){
        return true;
    } else {
        return false;
    }
}

function isPasswordInvalid($password): bool
{
    // If password doesn't meet requirements, return true
    if(strlen($password) < 8 || !preg_match("/[a-z]/i", $password) || !preg_match("/[0-9]/i", $password)){
        return true;
    } else {
        return false;
    }
}

function isPwConfirmationInvalid($password, $passwordConfirmation): bool
{
    // If password doesn't match the confirmation, return true
    if($password !== $passwordConfirmation){
        return true;
    } else {
        return false;
    }
}
function isEmailInvalid($email): bool
{
    // Using the php method to check if email is valid email format
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    }
}

function isEmailUsed($mysqli, $email): bool
{
    // To be used in signup
    // If the email already exists in the database, return true
    if(getEmail($mysqli, $email)){
        return true;
    }else{
        return false;
    }
}

function isLoginEmailWrong($user) : bool
{
    // To be used in login
    // If the user doesn't exist in database
    if(!$user){
        return true;
    } else {
        return false;
    }
}

function isPasswordWrong($password, $passwordHash): bool
{
    // To be used in login
    // If the password doesn't match the password in database, return true
    if(!password_verify($password, $passwordHash)) {
        return true;
    } else {
        return false;
    }
}
