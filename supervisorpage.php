<!DOCTYPE HTML>
<html>
<head>
<title>Supervisor</title>
<link
rel="stylesheet"
type="text/css"
href="ycsms.css"/>
<div>
    <nav >
<a ><img class="img" src="contact.PNG" style="width:2%;height:2%;">07112228222</a>
<a style="float:right" href="www.facebook.com"><img class="img" src="facebook.ico" style="width:10%;height:10%;"></a>
<a style="float:right"href="www.twitter.com"><img src="twitter.PNG" style="width:10%;height:10%;"></a>
<a style="float:right"href="www.youtube.com" ><img src="youtube.JPG" style="width:10%;height:10%;"></a>
</nav>


<hr style="color:green">
</div>
    </head>
    <body>
         <div class="float-left-area">
<div class="inner-left">
       
<fieldset>
<legend >Supervisor </legend>
  <div class="float-left-area">

</div><br>

<link href= "Prr.css" type="text/css" rel="stylesheet">
<?php
session_start();


include"connection.php";
$username = $_SESSION['login_user'];


if (isset($_SESSION['login_user'])) {



    // remove the key so we don't keep outputting the message
   
$id=($_SESSION['login_user']);

$run = mysqli_query($db,"Select Image, Firstname,Lastname,IDnumber, Religion,Contact, Email, Account from supervisors Where Firstname = '$id'");

    $row = mysqli_fetch_array($run, MYSQLI_BOTH); {}


    $firstname = $row[0];
    $firstname = $row[1]; 

    $lastname = $row[2];
    $ID = $row[3];
      $religion = $row[4];
        $contact = $row[5];
          $email = $row[6];
              $account = $row[7];
          

echo"<div style='text-align:left'>";
echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" style="width:150px;height:130px"/></td><br>';
   echo "<strong>ID number: ". $ID."</strong><br><br>";
       echo "<strong>Surname: ". $lastname."</strong><br><br>";

   echo "<strong>First Name: ". $firstname."</strong><br><br>";

   echo "<strong>Contact ". $contact."</strong><br><br>";
   echo "<strong>Email Address: ". $email."</strong><br><br>";
   echo "<strong>Account Number: ". $account."</strong><br><br>";
    echo "<strong>Religion:  ". $religion."</strong><br><br>";
echo"</div>";

    

}
else
{

echo('wrong');
}?>
</fieldset>


</div>
</div>
<div class="float-right-area" >
<div class="inner-right" style= "font-family:Baskerville Old Face;
font-size:30px;">
<a href= "assignedworkers.php" > Assigned workers </a><br><br>
<form action="suggestions.php" method="post">
<div>
<textarea name="suggestions" id="suggestions" style="font-family:sans-serif;font-size:1.2em;">
Hey... say something!
</textarea>
</div>
<input type="submit" value="Suggest">
</form><BR>
<a href= "logout.php"> Logout </a><br>


    </div>
    </div>
</body>

    </html>