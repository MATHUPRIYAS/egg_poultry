<?php
include "connect.php";
$id=$_GET['id'];
$sql="delete from login where Id='$id'";
$query=mysqli_query($con,$sql);
header("location:adduser.php?msg=Record Deleted Successfully");
?> 