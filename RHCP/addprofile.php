<?php
	include 'database.php';

		$album = $_POST['album'];
		$song = $_POST['song'];
		$link = $_POST['link'];
		$lyrics = $_POST['lyrics'];

					if ($album=='' || $song=='') {
						echo "Enter all feild";
						exit();
					}

						$gg = 'SELECT song FROM album';
						$res = mysqli_query($con,$gg);
						

							while ($row= mysqli_fetch_array($res)) {
						if ($row['song'] == $song) {
										echo "The song has already been entered";
										
								die();								
						}
					}	

						

		$query = "INSERT INTO album(album , song  , lyrics , link ) VALUES ('$album' , '$song' , '$lyrics' , '$link') " ;

		if(mysqli_query($con,$query)){
			echo "Submitted";

		}
	
 ?>	

