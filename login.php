<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   
   {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT * FROM userlogin WHERE username = '$username' and password = '$password'";
    $result_set=mysqli_query($db,$sql)  or die("Error: ".mysqli_error($db));
	if($row=mysqli_fetch_array($result_set))
    {
         $_SESSION['login_user'] = $username;
          mysqli_close($db);
          if($row['userType'] == "admin")
          {
              $suid = $row['userId']; 
$url = "adminn.php";
         header("location: $url");
          }
          else if($row['userType'] == "user") 
          {
               $suid = $row['userId'];
$url = "users.php";
         header("location: $url");
          }
      
	   else if($row['userType'] == "supervisor")
          {
               $suid = $row['userId'];
$url = "supervisorpage.php";
         header("location: $url");
          }
      }
	  
	  else {
          echo "invalid Login.Dispatching...";
          mysqli_close($db);
         header('Refresh: 5; URL=login.html');
         
      }}

?>