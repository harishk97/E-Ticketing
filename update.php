<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'trains');
$sql="UPDATE trains SET name='$_POST[pname]',age='$_POST[age]',salary='$_POST[salary]' ,WHERE name='$_POST[pname]'";

if(mysqli_query($con,$sql))
   header("refersh:1; url=new.php");
else
   echo"not updated";
?>