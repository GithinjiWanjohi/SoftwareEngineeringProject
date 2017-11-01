<link href= "prr.css" type="text/css" rel="stylesheet">
<table class="table">
<tr>
<th> image</th>
<th> name</th>
<th> position </th>
<th> age </th>
<th> course </th>
</tr>
<?php

include"connection.php";

$result= mysqli_query($db," SELECT * FROM january");



while($row= mysqli_fetch_array ($result))
{      

 echo "<tr>";
  echo '<td><img src="data:image/docx;base64,'.base64_encode($row['report']).'" style="width:150px;height:130px"/></td>';
 echo "<td>".$row['Firstname']. "</td>";
 echo "<td>".$row['Lastname']. "</td>";
 echo "<td>".$row['IDnumber']. "</td>";
 echo "<td>".$row['Contacts']. "</td>";
  echo "<td>".$row['report']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database




