<link rel="stylesheet" type="text/css" href="style/ap.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php

		if (isset($_GET['edt'])) {

			include 'database.php';
			$mid = $_GET['id'];

			$id = $_GET['edt'];
			$query = 'SELECT * FROM album WHERE id='.$id;
			$res = mysqli_query($con,$query);
			$row = mysqli_fetch_array($res); 

		}
 ?>
 	<div class="display"><p id="display"></p></div>
<div id="addwrapper">
		<form id='addform' class="editform" action="editprocess.php?edt=<?php echo $id ?>" method="POST">	
			<table>
					<tr>
			<td><input class="asd" id="input" type="text" name="album" placeholder="Enter Your First Name" value="<?php echo $row['album']; ?>"></td>
					</tr>

					<tr>
			<td><input class="asd" id="input" type="text" name="song" placeholder="Enter Your Last Name" value="<?php echo $row['song']; ?>"></td>
					</tr>

					<tr>
			<td><input class="asd" id="input" type="text" name="link" placeholder="Age" value="<?php echo $row['link']; ?>"></td>
					</tr>

					<tr>
			<td><textarea cols="500" rows="100" class="asd" name="lyrics" ><?php echo $row['lyrics']; ?>
			</textarea>

					</tr>

					

			<table>
				<input class="submit" type="submit" name="submit" value="Edit!"	>
		</form>
				
	</div>

	

			<script type="text/javascript">
			$(document).ready(function(){
			         $('.editform').submit(function(e){
			         			e.preventDefault();
			        
			                  $.ajax({
											   		url: $(this).attr('action'),
											   		type : $(this).attr('method'),
											   		data : $(this).serialize(),
											   		success : function(data){

											   				$('#display').text(data).show('clip');
											   				setTimeout(location.reload.bind(location), 50000);

											   		}	
											   	});
			                  return false ;


					});



			});
		</script>


		<script type="text/javascript">
			
			
		</script>