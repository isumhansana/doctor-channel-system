<?php
    session_start();
    if(isset($_SESSION['doctorloggedin'])) {
        header('Location: ../appointments.php');
        exit();
    }
    else if(!isset($_SESSION['patientloggedin'])) {
        header('Location: ../loginPatient.php');
        exit();
    }
    
    if(!isset($_GET['docEmail'])) {
        header('Location: index.php');
        exit();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DocSpot Channeling Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="../imgs/favicon_io//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../imgs/favicon_io//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../imgs/favicon_io//favicon-16x16.png">
    <link rel="manifest" href="../imgs/favicon_io//site.webmanifest">
    <style>
      .hero-text {
          text-align: center;
          padding: 100px 0;
          background-color: #171717;
          color: #ffffff;
          font-weight: 100;
      }

      .hero-text h1 {
          font-size: 38px;
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
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #1f1f1f;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../index.php"><img src="../imgs/favicon_io/favicon-32x32.png" alt="Logo"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0"">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="../dashboard.php">Dashboard</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <a class="btn btn-outline-danger" href="../signOut.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                                    </svg>
                                </a>
                            </form>
                        </div>
                    </div>
            </nav>
    <div class="container-md text-center mt-5 hero-text" style="max-width: 500px; position: absolute; top: 0; bottom: 0; right: 0; left: 0; align-self: center; padding: 40px;">
      <h1 class="mb-5">Enter Appointment Details</h1>
      <form action = "dbchanneling.php?docEmail=<?php echo $_GET['docEmail']; ?>" method="POST">
          <div class="mb-3">
              <input type="text" name="description" class="form-control text-center" id="exampleInputDescription" aria-describedby="descriptionHelp" placeholder="Description" required>
          </div>
          <div class="mb-3">
              <input type="date" name="date" class="form-control text-center" id="exampleInputDate" placeholder="Date" required>
          </div>
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
      </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var today = new Date();
            var tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1); // Calculate tomorrow's date

            var datePicker = document.getElementById("exampleInputDate");

            // Set the minimum date to tomorrow
            datePicker.min = tomorrow.toISOString().slice(0, 10);
        });
    </script>
  </body>
</html>