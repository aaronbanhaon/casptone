<?php
	include('session.php');
	
	
	$size =$_POST['size'];
	

	
	 mysqli_query($conn,"insert into size (size) values ('$size') ");
	?>
		<script>
			window.alert('Size added successfully!');
			window.history.back();
		</script>
	<?php
?>