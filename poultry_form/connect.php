<?php
$con=new mysqli("localhost","root","","backend");
$db=mysqli_select_db($con,"backend");
if(!$con)
{
    die(mysqli_error($con));
}
?>