<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DocSpot Channeling Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon_io//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon_io//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon_io//favicon-16x16.png">
    <link rel="manifest" href="imgs/favicon_io//site.webmanifest">
    <style>
      .hero-text {
          text-align: center;
          padding: 100px 0;
          background-color: #1f1f1f;
          color: #ffffff;
          font-weight: 100;
      }

      .hero-text h1 {
          font-size: 40px;
          margin-bottom: 24px;
          font-weight: 300;
      }

      .form-control {
        background-color: #171717;
        border-color: #405D72;
        color: whitesmoke;
      }

      .form-control:focus {
        background-color: #e6e6e6;
        border-color: #405D72;
        color: black;
      }

      .form-control::placeholder {
        color: grey;
        opacity: 0.7;
      }

      .hero-text p {
          font-size: 18px;
          margin-bottom: 48px;
      }
    </style>
  </head>
  <body style="background-color: #171717;">
  <?php
    include_once('nav-common.php');
  ?>
  <div class="container-md text-center mt-4 mb-4 hero-text" style="max-width: 500px; padding: 20px; border: 2px solid #405D72;">
    <h1 class="mb-4">Patient Registration</h1>
    <form action="dbregisterPatient.php" method="post">
        <div class="mb-3">
            <input type="email" onkeyup="hideAlert()" class="form-control text-center" id="exampleInputEmail1" name ="email" aria-describedby="emailHelp" placeholder="Email address" required>
            <div id="emailHelp" class="form-text" style="color: #ffffff;">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control text-center" id="password" name="password" placeholder="Password" required>
      </div>
        <div class="mb-3">
            <input type="text" class="form-control text-center" id="exampleInputFirstName" name="firstName" placeholder="First Name" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control text-center" id="exampleInputLastName" name="lastName" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
            <input type="tel" class="form-control text-center" id="exampleInputPhone" name="phone" placeholder="Phone" required>
        </div>
        <div class="mb-3">
            <label class="fw-normal">Date of Birth</label>
            <input type="date" class="form-control text-center fw-light" id="exampleInputDOB" name="dateOfBirth" placeholder="Date of Birth" required>
        </div>
        <div class="mb-3">
            <div class="row text-center">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="exampleInputMale" value="m" checked>
                        <label class="form-check-label" for="exampleInputMale">Male</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="exampleInputFemale" value="f">
                        <label class="form-check-label" for="exampleInputFemale">Female</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-3" onclick="register()">Register</button>
        <p>Already have an Account? <a href="loginPatient.php">Sign In</a></p>
    </form>
    <?php
    if(isset($_GET['error'])) {
      echo('<div id="alert" class="alert alert-danger mt-3" role="alert">
        User with the same email already exists
      </div>');
    }
    
    ?>
  </div>
  <script>
    function hideAlert() {
      var alertBox = document.getElementById("alert");
      alertBox.style.display = "none";
    }

    document.addEventListener("DOMContentLoaded", function() {
        var today = new Date();
        var datePicker = document.getElementById("exampleInputDOB");
    
        // Set the maximum date to today
        datePicker.max = today.toISOString().slice(0, 10);
    });
  </script>
  </body>
</html>