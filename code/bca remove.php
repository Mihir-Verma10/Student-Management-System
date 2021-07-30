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
<h1 style="position:absolute;top:100px;left:300px;font-family:'algerian';color:black">REMOVE bca student</h1>
<h1 style="position:absolute;top:190px;left:150;color:black;left:200px">ENTER NAME OF STUDENT</h1>
<input type="text" name="name"style="position:absolute;top:260px;left:200px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:black;left:200px">ENTER EMAIL OF STUDENT</h1>
<input type="text" name="email"  style="border-width:2px;position:absolute;top:345px;left:200px;height:35px;width:400px" required>
<input type="submit" value="remove" style="position:absolute;top:410px;left:200px;height:40px;width:400px;color:blue;background-color:white;font-size:20px;font-family:algerian" required>
</form>
<a href="faculty work.php"><h1><u>Back</h1></a>
<body>
</body>
</html>
<?php
include("connecting.php");
$name=$_POST['name'];
$email=$_POST['email'];
if(empty($name) and empty($email))
{
	echo"<h3 style='color:red;position:absolute;left:200px;top:450px'><u>"."PLESAE ENTER NAME AND EMAIL"."</u></h3>";
}
else
{
$query="select * from bca where name='$name' and email='$email';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num>=1)
{
	$q1="delete from bca where name='$name' and email='$email';";
	$que=mysqli_query($conn,$q1);
	if($que)
	{
		echo"<h3 style='color:red;position:absolute;left:200px;top:450px'><u>"."STUDENT REMOVED SUCCESSFULLY"."</u></h3>";

	}
}
else
{
	echo"<h3 style='color:red;position:absolute;left:200;top:450px'><u>"."THIS STUDENT IS NOT IN INSTITUTE"."</u></h3>";
}
}
?>