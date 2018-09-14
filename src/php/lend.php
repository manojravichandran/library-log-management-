<?php

$reg = $_POST['reg'];
$name = $_POST['name'];
$book_id = $_POST['bk_id'];
$lend = $_POST['lend'];

 if($c = mysqli_connect('localhost','root','')){
          echo "done";
     if($a = mysqli_select_db($c,'library')){
     
     echo "done";
       if(mysqli_query($c,"insert into lending values('$reg','$name','$book_id','$lend')"))
          echo "done";
     }
     
 }
?>