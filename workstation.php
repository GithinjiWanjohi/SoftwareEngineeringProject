<link href= "tt.css" type="text/css" rel="stylesheet">

<?php

include"connection.php";

$result= mysqli_query($db," SELECT * FROM workstations");
echo "<table>
<tr>
<th> Constituency</th>
<th> Ward</th>
<th> Location </th>
<th> Facility </th>

</tr>";



while($row= mysqli_fetch_array ($result))
{      

 echo "<tr>";
  
 echo "<th>".$row['constituency']. "</td>";
 echo "<th>".$row['ward']. "</td>";
 echo "<th>".$row['location']. "</td>";
 echo "<th>".$row['facility']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database


