<?php
    session_start();
    if(!(isset($_SESSION['doctorloggedin']) || isset($_SESSION['patientloggedin']))) {
        header('Location: ../index.php');
        exit();
    }

    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "docspot";
    $appointmentID = $_GET['appointmentID'];

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $title = $_POST['title'];
        $description = $_POST['description'];

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO note (title, description, appointmentID) VALUES (?, ?,?)");
        $stmt->bind_param("sss", $title, $description, $appointmentID);

        if ($stmt->execute()) {
            header("Location: index.php?appointmentID=" . $appointmentID);
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }

    //check if delete request is made
    if(isset($_GET['delid'])){
        $id = $_GET['delid'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "DELETE FROM note WHERE noteID = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php?appointmentID=" . $appointmentID);
            exit();
        }
        $conn->close();
    }    
?>