<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DocSpot Channeling System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="imgs/favicon_io/site.webmanifest">
    <style>
      .hero-text {
          text-align: center;
          padding: 75px 0;
          background-color: #1e1e1e;
          color: #ffffff;
          font-weight: 100;
      }

      .hero-text h1 {
          font-size: 48px;
          margin-bottom: 24px;
          font-weight: 300;
      }

      .hero-text p {
          font-size: 18px;
          margin-bottom: 48px;
      }
  </style>
  </head>
  <body style="background-color: #1e1e1e;">
    <?php
    if(isset($_SESSION['adminloggedin']) || isset($_SESSION['userloggedin'])) {
      include_once('nav-logged.php');
    }else {
      include_once('nav-common.php');
    }
    ?>

    
  <div class="container">
    <div class="hero-text">
      <img src="imgs/favicon_io/android-chrome-192x192.png" alt="Logo">
      <h1>DocSpot Channeling Service</h1>
      <p class="lead">Find the best doctors and schedule your appointments easily.</p>
      <?php
      if(isset($_SESSION['adminloggedin'])) {
        echo(
          '<a href="usersList.php" class="btn btn-primary btn-lg">Admin Panel</a>'
        );
      } else if(isset($_SESSION['userloggedin'])) {
        echo(
          '<a href="dashboard.php" class="btn btn-primary btn-lg">User Dashboard</a>'
        );
      } else {
        echo(
          '<a href="register.php" class="btn btn-primary btn-lg">Channel Your Doctor</a>'
        );
      }
      ?>
  </div>

  <div id="services" class="container mt-3" style="text-align: center;">
    <div class="columns">
      <h2 class="hero-text" style="padding: 50px; font-weight: 150;">Our Services</h2>
        <div class="row-md-4 mt-3" style="width: 50%;">
            <div class="card" style="border-color: grey;">
              <img src="imgs/1.png" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: #1e1e1e;">
                    <h5 class="card-title" style="font-weight: 400; color: #ffffff;">Doctor Channeling</h5>
                </div>
            </div>
        </div>
        <div class="row-md-4 mt-5" style="width: 50%; margin-left: 50%;">
          <div class="card" style="border-color: grey;">
            <img src="imgs/2.png" class="card-img-top" alt="..."> 
                <div class="card-body" style="background-color: #1e1e1e;">
                    <h5 class="card-title" style="font-weight: 400; color: #ffffff;">Viewing Appointments</h5>
                </div>
            </div>
        </div>
        <div class="row-md-4 mt-5 mb-4" style="width: 50%;">
            
          <div class="card" style="border-color: grey;">
              <img src="imgs/3.png" class="card-img-top" alt="...">  
                <div class="card-body" style="background-color: #1e1e1e;">
                    <h5 class="card-title" style="font-weight: 400; color: #ffffff;">Doctor - Patient Communication</h5>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
  </div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>