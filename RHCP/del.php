<link rel="stylesheet" type="text/css" href="style/ap.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<?php include'database.php';

		$query='SELECT * FROM album';
		$res  =mysqli_query($con,$query);
		$id = $_GET['id'];

	 ?>


	 <div class="Tdiv">


		<div class="listFN">
			
			<a href="#">Album</a> </div>

		<div class="listFN">
			<a href="#">Song</a> </div>

		<div class="listFN">
			<a href="#">Link</a> </div>

		<div class="listFN">
		   	Action</div>
		 </div>  	



		   	<?php while ($row=mysqli_fetch_array($res)) : ?>
		   	<div class="Tdiv">


				<div class="listD"><?php echo $row['album']; ?>
				 </div>

				<div class="listD"><?php echo $row['song']; ?>
				 </div>

				<div class="listD"><?php echo $row['link']; $link = $row['link']; ?>	
			 	 </div>

				<div class="listD"><a id="a_edit" class="<?php echo $row['id']; ?>" href="#">Edit
						<script type="text/javascript">
									$(document).ready(function(){



											$('.listD > #a_edit').click(function(){

												var asd = $(this).attr('class');
												var idd = <?php echo $id ?>;
												console.log(asd);
												
													$('#edt_del').show().load('edit_show.php?edt='+asd+'&&id='+idd+'');	
											});

									});
						</script>	



				</a>&nbsp;<a id="a_del" class="<?php echo $row['id']; ?>" href="#">Delete
						
						<script type="text/javascript">
									$(document).ready(function(){



											$('.listD > #a_del').click(function(){

												var asd = $(this).attr('class');
												var idd = <?php echo $id ?>;
												console.log(asd);
												
													$('#edt_del').show().load('del_show.php?del='+asd+'&&id='+idd+'');	
											});

									});
						</script>

				</a>
					
				 </div>	
				 			
	 		   	
			</div>	 
			<?php endwhile; ?>	 


	 	<div id="edt_del">

	 		
	 	</div>


	