<?php
// Functions for displaying information from PHP to HTML file directly
function signUpErrorCheck(){
    // If there are errors stored in the session variable, create a new list to iterate through holding the array
    // value from the session variable. Then a foreach loop iterates through the errors in the list to print them.
    // Once iterated through, unset the session variable.
    if(isset($_SESSION["errorSignUp"])){
        $errorList = $_SESSION["errorSignUp"];

        echo "<br>";
        foreach($errorList as $error){
            echo '<div class="alert alert-warning" role="alert">
            <p>'.$error.'</p></div>';
        }
        unset($_SESSION["errorSignUp"]);
    }
}

function loginError(){
    // If there are errors stored in the session variable, create a new list to iterate through holding the array
    // value from the session variable. Then a foreach loop iterates through the errors in the list to print them.
    // Once iterated through, unset the session variable.
    if(isset($_SESSION["errorLogin"])){
        $errorLoginList = $_SESSION["errorLogin"];

        foreach($errorLoginList as $error){
            echo "<br>";
            echo "<div class='alert alert-warning' role='alert'>
            <p>".$error."</p></div>";
        }
        unset($_SESSION["errorLogin"]);
    }
}

function displayUserName($greeting){
    // If the user is signed in - aka session variable for userID exists...
// Display the username, with custom greeting (hello, welcome, etc.) as a parameter
    if(isset($_SESSION["userID"])){
        echo "<h3 class='display-3'>".$greeting." ".$_SESSION["userName"]."</h3>";
    } else {
        header("Location: errorIndex.php");
    }
}
