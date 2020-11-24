<?php 
	include 'database.php';
	$song = $_GET['song'];
	$query = "SELECT * FROM album WHERE song='$song'";
	$res = mysqli_query($con,$query);
	$row = mysqli_fetch_array($res);	
?>
<link rel="stylesheet" type="text/css" href="style/style.css">
<h3><?php echo $song; ?></h3>
<iframe width="560" height="315" src="<?php echo $row['link']; ?>" frameborder="0" allowfullscreen></iframe>
<h4>Lyrics</h4>
<div id="lyrics"><?php echo $row['lyrics']; ?></div>
