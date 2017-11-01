<link href= "tt.css" type="text/css" rel="stylesheet">
<table class="table">
<?php

include"connection.php";

$result= mysqli_query($db," SELECT * FROM suggestions");
echo "<table>
<tr>
<th> Suggestion</th>
<th> Time stamp</th>

</tr>";



while($row= mysqli_fetch_array ($result))
{      

 echo "<tr>";
 echo "<td>".$row['suggestion']. "</td>";;
      echo "<td>".$row['Timestamp']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database
?>
