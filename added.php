<?php
Require_once('connection.php');
$number = $_POST['number'];
$driver = $_POST['driver'];
$seats = $_POST['seats'];
$destination = $_POST['destination'];
$insert = "INSERT INTO `buses`(`registration_number`, `driver`, `seats`, `destination`) 
VALUES ('$number','$driver','$seats','$destination')";
mysqli_query($db,$insert) or die("Error: ".mysqli_error($db));

mysqli_close($db);
echo 'Succesfully added';
      
?>