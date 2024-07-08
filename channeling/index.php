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
    <link rel="apple-touch-icon" sizes="180x180" href="../imgs/favicon_io//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../imgs/favicon_io//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../imgs/favicon_io//favicon-16x16.png">
    <link rel="manifest" href="../imgs/favicon_io//site.webmanifest">
    <style>
        .hero-text {
            text-align: center;
            padding: 75px 0;
            background-color: #171717;
            color: #ffffff;
            font-weight: 100;
        }

        .hero-text h1 {
            font-size: 44px;
            margin-bottom: 24px;
            font-weight: 300;
        }

        .hero-text p {
            font-size: 18px;
            margin-bottom: 48px;
        }

        .clickable-row {
            cursor: pointer;
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

    <div class="container-md text-center mt-5 hero-text"
        style="max-width: 900px; padding: 0px; background-color: #171717;">
        <h1>Select Your Doctor</h1>

        <form action="" method="GET">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Search By Name" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="spec" name="spec" placeholder="Search By Specialization" required/>
                </div>
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                    </svg>
                </button>
            </div>
        </div>
        </form>


        <table class="table table-hover mt-5">
            <thead>
                <tr>
                    <th class="hero-text" style="font-weight: 500;">List Name</th>
                    <th class="hero-text" style="font-weight: 500;">Caption</th>
                    <th class="hero-text" style="font-weight: 500;">Date Created</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aiphp";
                $email = $_SESSION['patientloggedin'];

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //Check if a search request is made
                if(isset($_GET['name']) && !empty($_GET['spec'])) {
                    $search=$_GET['search'];
                    $sql = "SELECT taskID,createdDate,listName,caption FROM task WHERE email = '$email' AND listName LIKE '%$search%' ORDER BY createdDate DESC";
                }else{
                    // SQL query to select the desired columns from the "Employee" table
                    $sql = "SELECT taskID,createdDate,listName,caption FROM task WHERE email = '$email' ORDER BY createdDate DESC";
                }

                // Execute the query
                $result = $conn->query($sql);

                // Check if the query was successful
                if ($result) {
                    // Fetch the rows
                    while ($row = $result->fetch_assoc()) {
                        // Display the data in table rows
                        echo "<tr class='clickable-row' data-href='items/index.php?taskID=" . $row["taskID"] . "'>";
                        echo "<td class='p-3'>" . $row["listName"] . "</td>";
                        echo "<td class='p-3'>" . $row["caption"] . "</td>";
                        echo "<td class='p-3'>" . $row["createdDate"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        var rows = document.querySelectorAll(".clickable-row");

        rows.forEach(function(row) {
            row.addEventListener("click", function() {
            window.location.href = row.dataset.href;
            });
        });
        });
    </script>


</body>

</html>