<?php
	
	include('session.php');
	$id=$_GET['id'];
	
	$orderid = $_POST['orderid'];
	mysqli_query($conn,"update orders set statuscode='2' where orderid='$orderid'");
	mysqli_query($conn,"update orders set date_accepted=now() where orderid='$orderid'");

	?>
		<script>
			window.alert('Approved successfully!');
			window.history.back();
		</script>
	<?php

?>