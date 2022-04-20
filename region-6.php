<?php include 'main.php';?>
<?php include 'inc/dbcon.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">
</head>
<body>
<section class="HomeKisii">
<img src="img/1.jpg" alt="Mountain View" style="width:604px;height:470px">
<section class="Regions">
<p>Parking Lots Status</p>
<p class="status">Red -> Reserved/Occupied , Yellow -> Available</p>
<!-- Table goes in the document BODY -->
<table class="gridtable">
<?php $street ="agargon"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018'";
	$result=mysqli_query($connection, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>

</section>   
</section>               
<section class="kisii-bottom">
<p>Safe Parking</p>
</section>
</body>
</html>
