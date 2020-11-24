<link rel="stylesheet" type="text/css" href="style/ap.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php 
	$id = $_GET['del'];
	$mid = $_GET['id'];
	include 'database.php';

	$query = 'SELECT * FROM album WHERE id='.$id;
	$res = mysqli_query($con,$query);
	$row = mysqli_fetch_array($res);
	
  ?>
 	<div class="display"><p id="display_s"></p></div>
<div id="del_ques">
	Are you sure you want to delete this profile ? song = "<b><?php echo $row['song']; ?></b>"

</div>
	<form id="del_form" action="deleteprocess.php?del=<?php echo $id ?>&&id=<?php echo $mid ?>" method="POST">
	<input class="submit s_yes" type="submit" name="yes_btn" value="Yes">
	</form>
	<a class="submit s_no" href="nav.php?id=<?php echo $mid ?>">No</a>

			<script type="text/javascript">
			$(document).ready(function(){
			         $('#del_form').submit(function(e){
			         			e.preventDefault();
			        
			                  $.ajax({
											   		url: $(this).attr('action'),
											   		type : $(this).attr('method'),
											   		data : $(this).serialize(),
											   		success : function(data){

											   				$('#display_s').text(data).show('clip');
											   				$('#del_form , #del_ques , .s_no').hide();
											   				setTimeout(location.reload.bind(location), 5000);

											   			}	
											   	});
			                  return false ;


					});



			});
		</script>

