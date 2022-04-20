<?php include 'logged-index.php';?>
<?php
$id=$_POST['submit_multi'];


?>
<?php 
include('inc/dbcon.php');

$sql = "DELETE FROM kaium WHERE id=0";

if (mysqli_query($connection, $sql)) {
  
} else {
  echo "Error deleting record: " . mysqli_error($connection);
}

mysqli_close($connection);
?>