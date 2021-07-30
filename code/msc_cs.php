<html>
<head>
<style>
body{
background-image:url("bg2.jpg");
background-position:center;
background-size:cover;
}
</style>
</head>
<form method="POST">
<h1 style="position:absolute;top:120px;left:520px;color:black;font-family:'algerian">ADD BCA STUDENT DETAILS</h1>
<input type="text" name="name" placeholder="ENTER NAME" style="position:absolute;top:220px;left:500px;height:35px;width:215px" required>
<input type="text" name="address" placeholder="ENTER ADDRESS" style="position:absolute;top:220px;left:800px;height:35px;width:215px" required>
<input type="text" name="mobile" placeholder="ENTER MOBILE NUMBER" style="position:absolute;top:290;left:500px;height:35px;width:215px" required>
<input type="text" name="email" placeholder="ENTER EMAIL ID" style="position:absolute;top:290;left:800px;height:35px;width:215px" required>
<input type="text" name="fees" placeholder="ENTER FEES" style="position:absolute;top:360;left:500px;height:35px;width:215px" required>
<input type="submit" value="DONE" style="position:absolute;top:430;left:500px;height:35px;width:520px;color:white;background-color:blue;font-size:20px;font-family:'algerian'">
</form>
<body>
<a href="faculty work.php"><h1><u>Back</h1></a>

</body>
</html>
<?php
include("connecting.php");
$na=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$fees=$_POST['fees'];

if(empty($na) or empty($mobile) or empty($address) or empty($email) or empty($fees))
{
	echo'<h3 style="position:absolute;top:460px;left:480px;color:red;font-family:algerian"><u><blink>'."please enter data required data with correct manner"."</blink></h3>";

}
else
{
$query1="select * from msc_cs where email='$email';";
$q1=mysqli_query($conn,$query1);
$num=mysqli_num_rows($q1);
	if($num>=1)
	{
	echo'<h3 style="position:absolute;top:460px;left:500px;color:red;font-family:algerian"><u><blink>'."the student is in the institute"."</blink></h3>";
	}
	else
	{

	$query="insert into msc_cs values('','$na','$address',$mobile,'$email',$fees);";
$q=mysqli_query($conn,$query);
		if($q)
		{
	echo'<h3 style="position:absolute;top:460px;left:550px;color:red;font-family:algerian"><u><blink>'."student added"."</blink></h3>";

		}
	}
}
?>