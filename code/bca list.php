<html>
<head>
<style>
body{
background-image:url("bg2.jpg");
background-position:center;
background-size:cover;
}
table{
	position:absolute;
	top:150;
	left:200;
	background-color:white;
}
</style>
</head>
<body>
<h1 style="position:absolute;top:20;left:250px;font-family:algerian;color:red;width:380px"><u>here is the list of all bca students </u></h1></body></html>
<a href="faculty work.php"><h1><u>Back</h1></a>
<?php
include("connecting.php");
$q1="select * from bca;";
	$query1=mysqli_query($conn,$q1);
	echo"<center/><table border='1'>
	<tr>
	<th>SNO</th>
	<th>NAME</th>
	<th>ADDRESS</th>
	<th>MOBILE</th>
	<th>EMAIL</th>
	<th>remaining fees</th>
	</tr>";
	while($row=mysqli_fetch_array($query1))
{
	echo "<tr><td>".$row["sno"]."</td> <br/><td>";
	echo $row["name"]." </td><br/><td>";
    echo $row["address"]."</td><td>";
	echo $row["mobile"]." </td><br/><td>";
    echo $row["email"]." </td><br/><td>";
    echo $row["remaining_fees"]." </td><br/></tr>";
    
}
echo"</table>";
?>


