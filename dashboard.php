<?php
    session_start();
    if(isset($_SESSION['doctorloggedin'])) {
        header('Location: appointments.php');
        exit();
    }
    else if(!isset($_SESSION['patientloggedin'])) {
        header('Location: loginPatient.php');
        exit();
    }
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DocSpot Channeling Service</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon_io//apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon_io//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon_io//favicon-16x16.png">
  <link rel="manifest" href="imgs/favicon_io//site.webmanifest">
  <style>
    .hero-text {
        text-align: center;
        padding: 75px 0;
        background-color: #171717;
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

    .dash-card-text {
        color: #ffffff;
        text-align: center;
        font-size: 28px;
        margin-top: 1vh;
        font-weight: 200;
    }

    .dash-card {
        width: 18rem; 
        background-color: #1e1e1e;
        border-color: grey;
        text-decoration: none;
        transition: all 0.5s;
    }

    .dash-card:hover {
        background-color: #171717;
        border-color: #405D72;
        box-shadow: 0px 0px 10px rgb(0, 30, 51);
        transform: scale(1.02);
    }

    .row {
        display: flex;
        justify-content: center;
    }
  </style>
</head>

<body style="background-color: #171717;">

  <?php
    include_once ('nav-logged.php');
  ?>

  <div class="container-md text-center mt-5 hero-text" style="max-width: 900px; padding: 0px; background-color: #171717;">
    <h1>Patient Dashboard</h1>

    <div class="row">
      <div class="col-md-4 mb-4">
        <a href="docDetails.php" class="card p-4 rounded-5 dash-card">
          <img src="imgs/dashboard/channel.png" class="card-img-top mb-2" alt="...">
          <h6 class="dash-card-text">Doctor Channeling</h6>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a href="appointments.php" class="card p-4 rounded-5 dash-card">
          <img src="imgs/dashboard/appoint.png" class="card-img-top mb-2" alt="...">
          <h6 class="dash-card-text">Appointments</h6>
        </a>
      </div>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>


</body>

</html>