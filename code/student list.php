<html>
<head>
<style>
body{
background-image:url("cv19.jpg");
background-position:center;
background-size:cover;
}
table{
	position:absolute;
	top:150;
	left:200;
}
</style>
</head>
<body>
<h1 style="position:absolute;top:20;left:250px;font-family:algerian;color:red;width:380px"><u>here is the list of all availabel books </u></h1></body></html>
<a href="work.php"><h1 style="position:absolute;color:black;top:600;left:50"><u>Back</h1></a>
<?php
include("connection.php");
$q1="select * from vaccine;";
	$query1=mysqli_query($conn,$q1);
	echo"<center/><table border='1'>
	<tr>
	<th>NO</th>
	<th>NAME</th>
	<th>ADDRESS</th>
	<th>AADHAR</th>
	<th>DOSE</th>
	<th>MOBILE</th>
	<th>DATE</th>
	</tr>";
	while($row=mysqli_fetch_array($query1))
{
	echo "<tr><td>".$row["no"]."</td> <br/><td>";
	echo $row["name"]." </td><br/><td>";
    echo $row["address"]."</td><td>";
	echo $row["aadhar"]." </td><br/><td>";
    echo $row["dose"]." </td><br/><td>";
    echo $row["mobile"]." </td><br/><td>";
    echo $row["date"]." </td><br/></tr>";
    
}
echo"</table>";
?>

