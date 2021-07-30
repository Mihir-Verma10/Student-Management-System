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
<h1 style="position:absolute;top:50px;left:300px;font-family:'algerian';color:black">pay fees for bca students</h1>
<h1 style="position:absolute;top:150px;left:150;color:black;left:200px">ENTER NAME OF STUDENT</h1>
<input type="text" name="name" style="position:absolute;top:210px;left:200px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:240px;color:black;left:200px">ENTER EMAIL OF STUDENT</h1>
<input type="text" name="email"style="position:absolute;top:300px;left:200px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:330px;color:black;left:200px">ENTER AMOUNT</h1>
<input type="text" name="amount"  style="border-width:2px;position:absolute;top:400px;left:200px;height:35px;width:400px" required>
<input type="submit" value="pay" style="position:absolute;top:460px;left:200px;height:40px;width:400px;color:blue;background-color:white;font-size:20px;font-family:algerian" required>
</form>
<a href="faculty work.php"><h1><u>Back</h1></a>
<body>
</body>
</html>
<?php
include("connecting.php");
$name=$_POST['name'];
$email=$_POST['email'];
$amount=$_POST['amount'];
if(empty($name) and empty($email) and empty($amount))
{
	echo"<h3 style='color:red;position:absolute;left:200px;top:480px'><u>"."PLESAE ENTER NAME,EMAIL AND AMOUNT"."</u></h3>";
}
else
{
$query="select * from bca where name='$name' and email='$email';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	$q1="update bca set remaining_fees=(remaining_fees-$amount) where name='$name' and email='$email';";
	$que=mysqli_query($conn,$q1);
	if($que)
	{
		echo"<h3 style='color:red;position:absolute;left:200px;top:480px'><u>"."PAYMENT DONE"."</u></h3>";

	}
}
else
{
	echo"<h3 style='color:red;position:absolute;left:200;top:480px'><u>"."THIS STUDENT IS NOT IN INSTITUTE"."</u></h3>";
}
}
?>