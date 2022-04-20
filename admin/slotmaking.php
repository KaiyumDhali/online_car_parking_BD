<?php include 'admin-main.php';?>
<?php include 'inc/dbcon.php';?>
<!DOCTYPE HTML>
<html>
<head>


</head>
<body>
	

<form action="" method="POST">


	 <input type="text" id="FullName" name="name" placeholder="Add plot number"   required />
	 <input type="submit" name="submit" value="submit">


</form>











<?php
if(isset($_POST['submit']))
{
	$slot=$_POST['name'];

	$result=mysqli_query($connection,"INSERT into kaium values('','$slot')");

	header("location:view.php");
}
?>


</body>
</html>
