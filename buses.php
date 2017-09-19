
<link  href= "buses.css" type="text/css" rel= "stylesheet">
<table class= "table">
<tr>
<th> Registration Number <th>
<th> driver </th>
<th> seats <th>
<th> Destination <th>
</tr>

<?php

include ('connection.php'); //includes the connection class

$result = mysqli_query($db, "SELECT * FROM buses");//select all data in the buses table

while($row= mysqli_fetch_array ($result))
{      

 echo "<tr>";
 echo "<td>".$row['Registration']. "</td>";
 echo "<td>".$row['driver']. "</td>";
 echo "<td>".$row['seats']. "</td>";
 echo "<td>".$row['Destination']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database

