<?php

	include 'database.php';
	$id = $_GET['edt'];
	$album = $_POST['album'];
	$song = $_POST['song'];
	$link = $_POST['link'];
	$lyrics = $_POST['lyrics'];	

				if ($album=='' || $song=='' || $link=='' || $lyrics=='' ) {
						echo "Enter all feild";
						exit();
					}

						


		$query = "UPDATE album SET album ='$album' , song='$song' , link='$link' , lyrics='$lyrics' WHERE id=".$id;
		if(mysqli_query($con,$query)){
			echo "Successfully Updated";
		}							



  ?>

  