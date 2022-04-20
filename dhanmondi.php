
<?php include 'main.php';?>
<?php include 'inc/dbcon.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>
	<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">
	</title>
</head>
<body>
	<section class="HomeKisii">
		
		<section class="Regions">
			<p>Parking Lots Status</p>
<p class="status">Red -> Reserved/Occupied , Yellow -> Available</p>
<div class="cont">
	<br>
	<br>
	<table class="gridtable">
		<thead>
<tr>
                                    
            <th>Slot</th>
            

</tr>

</thead>
<tbody>

<?php
$no=0; 
$query=mysqli_query($connection,"select * from kaium")or die(mysql_error());
while($row=mysqli_fetch_array($query)){
	
$no=$no+1;							

?>
                               
<tr>
										
<td><?php echo $row['slot'] ?></td>

                                                                               
</tr>
<?php  } ?>


</tbody>
						 
</table>
</div>
</section>
</section>
</body>
</html>