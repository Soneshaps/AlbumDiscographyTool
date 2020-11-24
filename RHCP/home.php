2<link rel="stylesheet" type="text/css" href="style/ap.css">
	<?php include'database.php';

		$query='SELECT * FROM album';
		$res  =mysqli_query($con,$query);


	 ?>
	 <div class="Tdiv">

		<div class="listFN">
			
			<a href="#">Album</a> </div>

		<div class="listFN">
			<a href="#">Song</a> </div>

		 </div>  	



		   	<?php while ($row=mysqli_fetch_array($res)) : ?>
		   	<div class="Tdiv">


				<div class="listD"><?php echo $row['album']; ?>
				 </div>

				<div class="listD"><?php echo $row['song']; ?>
				 </div>
	   	
			</div>	 
			<?php endwhile; ?>	 
