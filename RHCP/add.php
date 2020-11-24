<link rel="stylesheet" type="text/css" href="style/ap.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


									<div class="display"><p id="display"></p></div>
	<div id="addwrapper">
		<form id='addform' method="POST" action="addprofile.php" >	
			<table>
					<tr>
			<td><input class="asd" id="input" type="text" name="album" placeholder="Enter Album name"></td>
					</tr>

					<tr>
			<td><input class="asd" id="input" type="text" name="song" placeholder="Enter Song Name"></td>
					</tr>

					<tr>
			<td><input class="asd" id="input" type="text" name="link" placeholder="Enter Youtube Embed Link"></td>
					</tr>


					<tr>
			<td><textarea cols="500" rows="100" class="asd" name="lyrics">
			</textarea>

					</tr>

					

			</table>
				<input class="submit" type="submit" name="submit">
		</form>
				
	</div>	

			<script type="text/javascript">
			$(document).ready(function(){
			         $('#addform').submit(function(e){
			         			e.preventDefault();
			         			$('#display').hide();
			                  $.ajax({
											   		url: $(this).attr('action'),
											   		type : $(this).attr('method'),
											   		data : $(this).serialize(),
											   		success : function(data){

											   				$('#display').text(data).show('clip');
											   				$('.asd').val('');

											   		}	
											   	});
			                  return false ;


					});



			});
		</script>
