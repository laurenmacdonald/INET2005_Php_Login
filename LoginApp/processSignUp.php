<?php
if($_SERVER["REQUEST_METHOD"]==="POST") {
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $passwordConfirmation = trim($_POST["passwordConfirmation"]);

    try {
        // Unsetting and destroying any sessions that may already exist from previous log ins.
        session_start();
        session_unset();
        session_destroy();

        require_once 'databaseConnection.php';
        require_once 'queryFunctions.php';
        require_once 'validationFunctions.php';

        //USER INPUT VALIDATION
        // Declaring an array variable to hold the errors if they occur to be used later
        $errorList = [];
        // Checking to see if fields are empty
        if(isSignUpInputEmpty($fname, $lname, $email, $password, $passwordConfirmation)){
            $errorList["inputEmpty"] = "Please complete all fields.";
        } else {
            // If no fields empty, run the rest of the input validation
            if(isPasswordInvalid($password)){
                $errorList["passwordInvalid"] = "Password must be at least 8 characters and contain one letter and one number";
            }

            if(isPwConfirmationInvalid($password, $passwordConfirmation)){
                $errorList["pwConfirmationInvalid"] = "Password confirmation must match password.";
            }

            if(isEmailInvalid($email)){
                $errorList["emailInvalid"] = "Not a valid email.";
            }

            if(isEmailUsed($mysqli, $email)){
                $errorList["emailUsed"] = "Email is already registered in system.";
            }
        }

        // Start the session
        require_once 'sessionConfiguration.php';

        if($errorList){
            //If there are errors in the errorList, store them in a session variable, so they can be displayed to the user
            $_SESSION["errorSignUp"] = $errorList;
            //Go back to the SignUp page
            header("Location: SignUp.php");
            // Kill the validation script to try again.
            die();
        }

        // If no errors, add user to the database by calling the saveUser function from the query file.
        saveUser($mysqli, $fname, $lname, $email, $password);

        // Redirect to the successful sign-up page.
        header("Location: SignUpSuccess.html");
        // Kill the connection, SQL statement, and script.
        $mysqli = null;
        $stmt = null;
        die();


    } catch(mysqli_sql_exception $e){
        die("Error: ".$e->getMessage());
    }
} else {
    // If anything fails, redirect to the homepage and kill the script
    header("Location: Welcome.php");
    die();
}