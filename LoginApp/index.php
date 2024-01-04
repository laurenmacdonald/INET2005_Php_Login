<?php
require_once 'databaseConnection.php';
require_once 'sessionConfiguration.php';
require_once 'displayFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Club</title>
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="p-5 text-center bg-image" style="
      background-image: url('Images/coffeebeans.jpg');
      height: 400px;
    ">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <?php
                displayUserName("Hello, ");
                ?>
                <a class="btn btn-light btn-lg" href="#" role="button">Manage subscriptions</a>
            </div>
        </div>
</div>
<div class="container mt-4">
    <h4 class="display-4">Discover</h4>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="Images/multiplecoffeebags.jpg" class="card-img-top" alt="Multiple bags of coffee and espresso">
                <div class="card-body">
                    <h5 class="card-title">The Kitchen Sink</h5>
                    <p class="card-text">Two bags of espresso, one specialty blend and two simple bags.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="Images/specialty.jpg" class="card-img-top" alt="Bag of specialty coffee and accessories">
                <div class="card-body">
                    <h5 class="card-title">Specialty</h5>
                    <p class="card-text">Rotating small batch blends, changes every month.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="Images/regularcoffee.jpg" class="card-img-top" alt="Bag of regular coffee and accessories">
                <div class="card-body">
                    <h5 class="card-title">Simply Good</h5>
                    <p class="card-text">Just the good stuff. No nonsense medium roast with smooth finish.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="Images/coffeesupplies.jpg" class="card-img-top" alt="Coffee brewing supplies">
                <div class="card-body">
                    <h5 class="card-title">Brewing Supplies</h5>
                    <p class="card-text">Everything you need to make a great cup of coffee.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="py-3 mt-4 absolute">
    <p class="text-center text-muted">Lauren MacDonald W0230178</p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
