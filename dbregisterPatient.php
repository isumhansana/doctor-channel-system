<?php
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
    die("Connection failed: " );
}

// Retrieve data submitted by the form
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$dateOfBirth = $_POST['dateOfBirth'];
$password = $_POST['password'];

// Prepare and execute the SQL query to insert the data into the Doctor table
$sql = "INSERT INTO patient (email, firstName, lastName, gender, phone, dateOfBirth, password) VALUES ('$email', '$firstName', '$lastName', '$gender', '$phone', '$dateOfBirth', '$password')";

try {
    if ($conn->query($sql) === TRUE) {
        header('Location: loginPatient.php?newAccount');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
        header('Location: registerPatient.php?error');
        exit();
    } else {
        echo "Error: " . $e->getMessage();
    }
}

// Close the database connection
$conn->close();

?>