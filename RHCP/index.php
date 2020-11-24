

<?php include 'database.php';


  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Red Hot Chilli Peppers</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="js/bgmove.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>


</head>
<body>
	<div class="bg" style="background-image: url(image/RHCP.png);">
	  	<div class="overlay">
				<div class="content">

					<div class="contents home">
						<div id="photos">
							<ul>
								<li title="bg.jpg"><img src="image/bg.jpg"></li>
								<li title="RHCP3.jpg"><img src="image/RHCP3.jpg"></li>
								<li title="RHCP.png"><img src="image/RHCP.png"></li>
								<li title="RHCP1.png"><img src="image/RHCP1.png"></li>
							</ul>
						</div>
					</div>


					<div class="contents discography">
						<div id="albums">
								<h3>Discography</h3>
							<ul>
							<?php 
								$query = 'SELECT DISTINCT album FROM album';
								$res = mysqli_query($con,$query);
							   while ($row=mysqli_fetch_array($res)) { ?>
							    		<li title="<?php echo $row['album']; ?>"><?php echo $row['album']; ?></li><img class="img" id="<?php echo $row['album']; ?>" src="image/arrow.png" >
							    <?php
							    } ?>		
							</ul>
						</div>

						<div id="songs">
					

						</div>								
					
					</div>

					<div class="contents events">
								
					</div>

					<div class="contents contact">
								
					</div>	

					<div class="contents shop">
								
					</div>	
				</div>



		</div>
	</div>	

			<nav class="main_nav">
				
						<div class="logo">
							<img src="image/logo.png">
						</div>

				<nav class="nav">		
						<ul class="list">

							<li><a href = "#" title="discography"> DISCOGRAPHY</a></li>
							<li><a href = "#" title="events"> EVENTS</a></li>
							<li><a href = "#" title="contact"> CONTACT</a></li>
							<li><a href = "#" title="shop"> SHOP</a></li>
						

						</ul>
				</nav>			
			</nav>
		

	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/slidecontent.js"></script>
	<script type="text/javascript" src="js/show.js"></script>
		<script type="text/javascript" src="js/bg.js"></script>
	<script type="text/javascript" src="js/slidesongs.js"></script>	
			<script type="text/javascript" >
			$(document).ready(function(){	
				$('#albums ul li').click(function(){
			   			var title = $(this).attr('title');	
			   			$('#albums ul .img').hide();
			   			$('#albums ul #'+title).toggle('slide');

						$('#songs').hide('slide',{direction: 'left'}, 500);
						$('#songs').show('slide');
						$('#songs').load('songs.php?album='+title);
				});	



				});


		</script>	
</body>

</html>