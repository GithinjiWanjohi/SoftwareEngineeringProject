<?php
Require_once('connection.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$ID = $_POST['ID'];
$gender = $_POST['gender'];
$Contact = $_POST['contact'];
$Email = $_POST['email'];
$account = $_POST['account'];
$religion = $_POST['religion'];
$residence = $_POST['residence'];
$kin = $_POST['kin'];
$kinID = $_POST['kinID'];

   if(isset($_FILES['Image'])){
      $errors= array();
      $file_name = $_FILES['Image']['name'];
      $file_size =$_FILES['Image']['size'];
      $file_tmp =$_FILES['Image']['tmp_name'];
      $file_type=$_FILES['Image']['type'];
      $imagetmp=addslashes (file_get_contents($_FILES['Image']['tmp_name']));
      
      $expensions= array("jpeg","jpg","png");
    
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         $insert = "INSERT INTO `users`(`Image`, `Firstname`, `Lastname`, `IDnumber`, `Gender`, `Contact`,`Email`, `Account`,`Religion`,`Residence`,`Nextofkin`, `NextofkinID`) 
VALUES ('$imagetmp','$firstname','$lastname','$ID','$gender','$Contact','$Email','$account','$religion','$residence', '$kin', '$kinID')";
mysqli_query($db,$insert) or die("Error: ".mysqli_error($db));
         echo "Success";
          header('Refresh: 3; URL=login.html');
      }else{
         print_r($errors);
      }
 
//Get the content of the image and then add slashes to it 

}
mysqli_close($db);



?>