<link href= "tt.css" type="text/css" rel="stylesheet">
<?php
include 'connection.php';



$result=  mysqli_query ($db,"SELECT* FROM users");
echo "<table>
<tr>
<th> Image</th>
<th> Firstname</th>
<th> Last Name </th>
<th> ID Number </th>
<th> Contact </th>
<th> Email</th>
<th> Account </th>
<th> Religion </th>
<th> Residence </th>
<th> Next of Kin </th>
<th> Next Of Kin ID </th>
</tr>";

while ($row= mysqli_fetch_array($result))//fetch data 
{      

 echo "<tr>";
echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" style="width:150px;height:130px"/></td>';
 echo "<td>".$row['Firstname']. "</td>";
 echo "<td>".$row['Lastname']. "</td>";
 echo "<td>".$row['IDnumber']. "</td>";
 echo "<td>".$row['Gender']. "</td>";
  echo "<td>".$row['Contact']. "</td>";
   echo "<td>".$row['Email']. "</td>";
    echo "<td>".$row['Account']. "</td>";
     echo "<td>".$row['Religion']. "</td>";
      echo "<td>".$row['Nextofkin']. "</td>";
       echo "<td>".$row['NextofkinID']. "</td>";
 echo "</tr>";
};

echo "</table>";//display the tale

mysqli_close($db);//close database

?>