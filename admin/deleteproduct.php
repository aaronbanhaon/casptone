<?php
	include('session.php');
	$prid=$_GET['id'];
	mysqli_query($conn,"delete from pricing where pricing_ID = '$prid'");
	header('location:product.php');
?>