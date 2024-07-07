<?php
session_start();

$uname = $_POST['email'];
$pass = $_POST['pass'];

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "docspot";

// Prepare and execute the SQL query to fetch the user details
$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->prepare("SELECT * FROM patient WHERE email = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    // Verify the password
    if ($user['password']===$pass) {
        $_SESSION['patientloggedin'] = $uname;
        // Redirect to the desired page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid password
        header("Location: loginPatient.php?invalidPass");
        exit();
    }
} else {
    // Invalid email or user does not exist
    header("Location: loginPatient.php?invalidEmail");
}

// Close the database connection
$stmt->close();
$conn->close();
exit();
?>