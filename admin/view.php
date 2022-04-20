<?php
session_start();
if( isset( $_SESSION['email'] ) )
     {
	 }
	else{
	 exit;
  }
   ?>
<?php include 'admin-main.php';?>
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

$query=mysqli_query($connection,"select * from kaium")or die(mysql_error());
while($row=mysqli_fetch_array($query)){
	
							

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
