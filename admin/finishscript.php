<?php
	
	include('session.php');
	$id=$_GET['id'];
	
	$orderid = $_POST['orderid'];
	mysqli_query($conn,"update orders set statuscode='4' where orderid='$orderid'");
	mysqli_query($conn,"update orders set date_finished=now() where orderid='$orderid'");

	?>
		<script>
			window.alert('Action Success!');
			window.history.back();
		</script>
	<?php

?>