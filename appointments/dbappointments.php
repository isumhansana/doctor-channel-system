<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "docspot";

//check if delete request is made
if(isset($_GET['delid'])){
    $id = $_GET['delid'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "DELETE FROM appointment WHERE appointmentID = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?deleted");
        exit();
    }
    $conn->close();
} 
?>