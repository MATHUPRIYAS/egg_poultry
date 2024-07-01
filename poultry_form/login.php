<?php
$host="localhost";
$user="root";
$password="";
$db="backend";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection_abroted");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select *from login where username='".$username."' AND passwor='".$password."'";
    
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="user")
    {
        header("location:products.html");
    }
    elseif($row["usertype"]=="admin")
    {
        header("location:conn.php");
    }
    else{
        echo "username or pass is incorrect";
    }
}
?>

