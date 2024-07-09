<?php
if(!isset($_GET['appointmentID'])) {
    header('Location: ../appointments/index.php');
    exit();
}
?>