<?php
require_once 'sessionConfiguration.php';
require_once 'displayFunctions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair Display">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header id="header" class="header is-transparent">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="Welcome.php">Coffee Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <?php
                    if(isset($_SESSION['userID'])){
                ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Manage Subscriptions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                        <?php
                } else {
                ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="Login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="SignUp.php">Signup</a>
                            </li>
                        </ul>
                <?php
                    }
                ?>
            </div>
        </div>
    </nav>
</header>
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('Images/background.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    height: 600px;">
    <div class="d-flex justify-content-center align-items-flex-start h-100">
        <div class="text-dark">

            <?php
            if(isset($_SESSION['userID'])){
                displayUserName("Welcome back,");
            ?>
                <?php
            } else {
            ?>
                <h1 class="mb-3 display-1">Coffee Club</h1>
                <p class="lead mb-3">Luxury coffee delivered to your door.</p>
                <a class="btn btn-light btn-lg" href="Login.php" role="button">Login</a>
                <a class="btn btn-light btn-lg" href="SignUp.php" role="button">Sign Up</a>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<div class="container mt-4 d-flex justify-content-center text-center">
    <div id="cardID" class="card" style="width: 20rem;">
        <img id="cardIMG" src="../Images/mandrinkingcoffee.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 id="cardTitle" class="card-title">Espresso Subscription</h5>
            <p id="cardText" class="card-text">Premium espresso.</p>
            <a id="prevBtn" href="#cardID" class="btn btn-secondary"><-</a>
            <a id="nextBtn" href="#cardID" class="btn btn-secondary">-></a>
            <br>
            <br>
            <a id="learnBtn" href="#" class="btn btn-primary">Learn more</a>
        </div>
    </div>
</div>
<footer class="py-3 mt-4 absolute">
    <p class="text-center text-muted">Lauren MacDonald W0230178</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/javascript.js"></script>
</body>
</html>