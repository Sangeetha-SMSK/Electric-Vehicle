<?php
session_start();

// Check if the user is logged in by verifying the session variable
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Electric Vehicle Station</title>
    <link rel="stylesheet" href="path/to/your/styles.css"> <!-- Link to your CSS file -->
</head>
<body>

<section class="section about" aria-labelledby="about-label">
    <div class="container">
        <div class="about-content">
            <p class="section-subtitle has-before" id="about-label">Choose your Vehicle.</p>
            <h2 class="h2 section-title">Our mission is to get an electric vehicle charger and find the nearby station</h2>
            <p class="section-text">
              Charge your electric vehicle at home using one of our smart home charge solutions or gain access to over
              3,000 public charging stations.
            </p>
  
            <div class="about-wrapper">
                <div class="about-card">
                    <div class="title-wrapper">
                        <ion-icon name="bonfire-outline" aria-hidden="true"></ion-icon>
                        <h3 class="card-title" id="cars-title">Cars</h3>
                    </div>
                    <p class="card-text">We love our customers and we love the way they come.</p>
                </div>
  
                <div class="about-card">
                    <div class="title-wrapper">
                        <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                        <h3 class="card-title">Bike</h3>
                    </div>
                    <p class="card-text">We love our customers and we love the way they come.</p>
                </div>
            </div>
  
            <ul class="about-list">
                <li class="about-item">
                    <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                    <span class="span">Detachable battery, take home and charge in 3 hours.</span>
                </li>
                <li class="about-item">
                    <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                    <span class="span">Enjoy a hassle-free ride by charging just for 3 hours.</span>
                </li>
            </ul>
  
            <a href="#" class="btn btn-primary">
                <span class="span">Select Vehicle</span>
                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>
        </div>
  
        <!-- Car Details Section (initially visible after login) -->
        <ul class="blog-list" id="about-banner" data-reveal>
            <li>
                <div class="blog-card">
                    <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                        <img src="./assets/images/kia-ev6.webp" width="770" height="550" loading="lazy" alt="Energy Star Certified Electric Vehicle Chargers" class="img-cover">
                    </figure>
                    <div class="card-content">
                        <time class="publish-date" datetime="2022-06-03">Kia EV6</time>
                        <h3 class="h5"><a href="#service-section" class="card-title">Nearby Station</a></h3>
                    </div>
                </div>
            </li>
            <li>
                <div class="blog-card">
                    <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                        <img src="./assets/images/Tata.jpg" width="770" height="550" loading="lazy" alt="Charging Solution For Electric Car & Hybrid Car" class="img-cover">
                    </figure>
                    <div class="card-content">
                        <time class="publish-date" datetime="2022-06-03">TATA</time>
                        <h3 class="h5"><a href="#" class="card-title">Nearby Station</a></h3>
                    </div>
                </div>
            </li>
            <li>
                <div class="blog-card">
                    <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                        <img src="./assets/images/MG Comet.jpg" width="770" height="550" loading="lazy" alt="Home Charging Station For Electric Vehicles" class="img-cover">
                    </figure>
                    <div class="card-content">
                        <time class="publish-date" datetime="2022-06-03">MG Comet</time>
                        <h3 class="h5"><a href="#" class="card-title">Nearby Station</a></h3>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

</body>
</html>
