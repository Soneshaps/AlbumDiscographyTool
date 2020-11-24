<?php 

	#conection 

	$con = mysqli_connect('localhost'  , 'root' , '' ,'RHCP'); 


	#test Con 

	if (mysqli_connect_errno()) {
		
		echo "Error";

	}



?>