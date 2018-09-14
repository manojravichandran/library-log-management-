<?php

if($c = mysqli_connect('localhost','root','')){ 
     if($a = mysqli_select_db($c,'library')){
     
     
       $result = mysqli_query($c,"select * from lend");
       
       echo "<table border='1'>
<tr>
<th>your id</th>
<th>your Name</th>
<th>Book ID</th>
<th>book name</th>
<th>date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['SID'] . "</td>";
echo "<td>" . $row['NAME'] . "</td>";
echo "<td>" . $row['BID'] . "</td>";
echo "<td>" . $row['BNAME'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
echo "</table>";
        
     }
     
 }

?>

