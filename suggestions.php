<?php
Require_once('connection.php');
$comments = $_POST['suggestions'];
$insert = "INSERT INTO `suggestions`(`suggestion`) 
VALUES ('$comments')";
mysqli_query($db,$insert) or die("Error: ".mysqli_error($db));

mysqli_close($db);
echo 'Thanks for your suggestion!';
      header('Refresh: 3; URL=supervisorpage.php');
?>