<?php
require_once 'sessionConfiguration.php';
// If session variable for userID exists, aka user logged in, then go to index page.
if ( ! empty( $_SESSION['userID'] ) ) {
    header('Location:index.php');
    exit;
}
require_once 'displayFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../LoginApp/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair Display">
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SignUp.php">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container my-4 pb-4">
    <div class="form-div">
        <h3 class="display-3">Login</h3>
        <?php loginError(); ?>
        <form action="processLogin.php" name="login" method="post" id="login" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class='alert alert-warning' role='alert'>Note: You will stay logged in unless you log out!</div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<footer class="pb-3 mt-4 absolute">
    <p class="text-center text-muted">Lauren MacDonald W0230178</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


