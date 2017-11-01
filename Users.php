
<!DOCTYPE HTML>
<html>
<head>
<title>UserAccount</title>
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
<div>    
         <div class="float-left-area">
<div class="inner-left">
       
<fieldset>
<legend >My Profile </legend>
  <div class="float-left-area">
</div><br>

<link href= "Prr.css" type="text/css" rel="stylesheet">
<?php
session_start();

include"connection.php";
$uname = $_SESSION['login_user'];


if (isset($_SESSION['login_user'])) {



    // remove the key so we don't keep outputting the message
   
$id=($_SESSION['login_user']);

$run = mysqli_query($db,"Select Firstname,Lastname,IDnumber, Contact, Email, Account from users Where Firstname = '$id'");

    $row = mysqli_fetch_array($run, MYSQLI_BOTH); {}



    $firstname = $row[0]; 

    $lastname = $row[1];
    $ID = $row[2];
      $contact = $row[3];
        $email = $row[4];
          $account = $row[5];

echo"<div style='text-align:left'>";
   echo "<strong>ID number: ". $ID."</strong><br><br>";
       echo "<strong>Surname: ". $lastname."</strong><br><br>";

   echo "<strong>First Name: ". $firstname."</strong><br><br>";

   echo "<strong>Contact ". $contact."</strong><br><br>";
   echo "<strong>Email Address: ". $email."</strong><br><br>";
   echo "<strong>Account Number: ". $account."</strong><br>";
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
<a href= "myreport.php" > View my report </a><br>
<a href= "bid.php" > book a work slot </a> <br>
<a href= "logout.php"> Logout </a><br>
</div>

    </div>
    </div>
    
</body>

    </html>



