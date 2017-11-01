<?php
require_once'connection.php';
 $firstname=$_POST['firstname'];
$result= mysqli_query($db," SELECT * FROM january");
while($row= mysqli_fetch_array ($result))
{      

 $firstname=$row['Firstname'];
 $Lastname=$row['Lastname'];
 $ID=$row['IDnumber'];
 $contacts=$row['Contacts'];
 
}



     if(isset($_FILES['report'])){
         
      $errors= array();
      $file_name = $_FILES['report']['name'];
      $file_size =$_FILES['report']['size'];
      $file_tmp =$_FILES['report']['tmp_name'];
      $file_type=$_FILES['report']['type'];
      $imagetmp=addslashes (file_get_contents($_FILES['report']['tmp_name']));
      
      $expensions= array("docx");
      
  
   
      
     }
      
      if(empty($errors)==true){
         $insert = "UPDATE `january`  SET report= '$imagetmp' WHERE Firstname = '$firstname'"; 

mysqli_query($db,$insert) or die("Error: ".mysqli_error($db));
  echo'successfully added';       
          //header('Refresh: 10; URL=assignedworkers.php');
      }else{
         print_r($errors);
         echo'not successfull';
      }

//Get the content of the image and then add slashes to it 

     
mysqli_close($db);



?>