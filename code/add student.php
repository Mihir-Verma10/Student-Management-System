<html>
<head>
<style>
body{
background-image:url("cv19.jpg");
background-position:center;
background-size:cover;
}
</style>
</head>
<form method="POST">
<h1 style="position:absolute;top:120px;left:520px;color:black;font-family:'algerian">ADD DETAILS</h1>
<input type="text" name="name" placeholder="ENTER NAME" style="position:absolute;top:220px;left:500px;height:35px;width:215px" required>
<input type="text" name="address" placeholder="ENTER ADDRESS" style="position:absolute;top:220px;left:800px;height:35px;width:215px" required>
<input type="text" name="aadhar" placeholder="ENTER AADHAR" style="position:absolute;top:290;left:500px;height:35px;width:215px" required>
<input type="text" name="phone" placeholder="ENTER MOBILE NUMBER" style="position:absolute;top:290;left:800px;height:35px;width:215px">
<input type="text" name="dose" placeholder="ENTER 1 OR 2 FOR FIRST AND SECOND" style="position:absolute;top:360;left:500px;height:35px;width:215px">
<input type="submit" value="DONE" style="position:absolute;top:430;left:500px;height:35px;width:520px;color:white;background-color:blue;font-size:20px;font-family:'algerian'">
</form>
<body>
<a href="work.php"><h1 style="position:absolute;color:black;top:600;left:50"><u>Back</h1></a>

</body>
</html>
<?php
include("connection.php");
$na=$_POST['name'];
$address=$_POST['address'];
$aadhar=$_POST['aadhar'];
$phone=$_POST['phone'];
$dose=$_POST['dose'];
$date=date("d.m.Y");
if(empty($na) or empty($aadhar) or empty($address) or empty($dose) or empty($phone))
{
	echo'<h3 style="position:absolute;top:460px;left:480px;color:red;font-family:algerian"><u><blink>'."please enter data required data with correct manner"."</blink></h3>";

}
else
{
$query1="select * from vaccine where aadhar=$aadhar and dose=$dose;";
$q1=mysqli_query($conn,$query1);
$num=mysqli_num_rows($q1);
	if($num>=1)
	{
	echo'<h3 style="position:absolute;top:460px;left:500px;color:red;font-family:algerian"><u><blink>'."the people has vaccinated before"."</blink></h3>";
	}
	else
	{

	$query="insert into vaccine values('','$na','$address',$aadhar,$dose,$phone,'$date');";
$q=mysqli_query($conn,$query);
		if($q)
		{
	echo'<h3 style="position:absolute;top:460px;left:550px;color:red;font-family:algerian"><u><blink>'."vaccinated"."</blink></h3>";

		}
	}
}
?>