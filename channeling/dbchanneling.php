<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "docspot";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ");
}

// Retrieve data submitted by the form
$docEmail = $_GET['docEmail'];
$description = $_POST['description'];
$date = $_POST['date'];

// Retrieve Patient email from session
$patientEmail = $_SESSION['patientloggedin'];

// Prepare and execute the SQL query to insert the data into the Doctor table
$sql = "INSERT INTO appointment (docEmail, patientEmail, description, date) VALUES ('$docEmail', '$patientEmail', '$description', '$date')";

if ($conn->query($sql) === TRUE) {
    header('Location: appointments.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the database connection
$conn->close();

?>