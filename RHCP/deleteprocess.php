<?php 
	
	include 'database.php';	

	$id = $_GET['del'];	

	 $query = 'DELETE  FROM album WHERE id='.$id;
	 mysqli_query($con,$query);
	 echo "Deleted Sucessfully"; 	
	
 ?>