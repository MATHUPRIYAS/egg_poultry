<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
<center>
<?php

echo "<br>";
$res=mysqli_query($con,"select * from chickenegg");
?>
<table border=1 class="table table-dark table-striped">
<?php
$c=0;
$field=mysqli_fetch_fields($res);
if(mysqli_num_rows($res)>0)
{
	echo "<tr>";
	foreach($field as $col)
	{
		if($c==0) { ++$c; continue; }
		echo "<th>".$col->name."</th>";
	}
	echo "</tr>";	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		for($i=1;$i<mysqli_num_fields($res);$i++)
		{
			echo "<td>".$row[$i]."</td>";
		}
		echo "<td><button><a href='edit.php?id=$row[0]'>Edit</a></button></td>
			<td><a href='delete.php?id=$row[0]'>Delete</a></td></tr>";
	}
}


?>
</table>
</div>
</center>
</body>
</html>