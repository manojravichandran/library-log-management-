<?php

   $sid = $_POST['SID'];
   $name = $_POST['NAME'];
   $bid = $_POST['BID'];
   $bname = $_POST['BNAME'];
   $date = $_POST['DATE'];
 


 $c = mysqli_connect("localhost","root","");
 
 if(mysqli_select_db($c,"library")){

   $check = mysqli_query($c,"insert into lend values('$sid','$name','$bid','$bname','$date')");
     

 }

?>

