<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    try{
        require_once 'databaseConnection.php';
        require_once 'queryFunctions.php';
        require_once 'validationFunctions.php';

        //USER INPUT VALIDATION
        // Declaring an array variable to hold the errors if they occur to be used later
        $errorLoginList = [];
        // Checking to see if fields are empty
        if(isLoginInputEmpty($email, $password)){
            $errorLoginList["inputEmpty"] = "Please complete all fields.";
        } else {
            // Checking to see if email is valid email format
            if(isEmailInvalid($email)){
                $errorLoginList["emailInvalid"] = "Not a valid email.";
            } else {
                // If fields are not empty and email is valid format,
                // query the database and store the user record in a variable called user
                $user = getUserRecord($mysqli, $email);
                // Check to see if the email matches what is in the database query
                if(isLoginEmailWrong($user)){
                    $errorLoginList["unregisteredEmail"] = "Unregistered email.";
                } else {
                    // If email is correct, check the password
                    if(isPasswordWrong($password, $user["passwordHash"])){
                        $errorLoginList["incorrectPassword"] = "Incorrect password.";
                    }
                }

            }

        }

        // Start the session.
        require_once 'sessionConfiguration.php';

        // Store any login errors in a session variable to display on the login page, redirect so it 'refreshes'
        if($errorLoginList){
            $_SESSION["errorLogin"] = $errorLoginList;
            header("Location: Login.php");
            die();
        }

        //If there are no errors on login, create a new session id including the user id to update the session id:
        $newSessionID = session_create_id();
        $sessionID = $newSessionID."_".$user["id"];
        session_id($sessionID);

        // Setting the session variable userID to match the ID of the user from the DB
        $_SESSION["userID"] = $user["id"];
        $_SESSION["userName"] = htmlspecialchars($user["fname"]);

        // Resetting the time for session regeneration so that the counter resets upon log in
        $_SESSION["regeneratedIDTime"] = time();

        // Redirect to the index page once login complete.
        header("Location: index.php");

        // Kill the connection, SQL statement, and result.
        $mysqli = null;
        $result = null;
        die();


    } catch(mysqli_sql_exception $e){
        die("Error: ".$e->getMessage());
    }

}  else {
    // If anything fails, redirect to the homepage and kill the script
    header("Location: Welcome.php");
    die();
}