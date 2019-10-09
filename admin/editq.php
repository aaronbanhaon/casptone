<?php
	include('session.php');
	
	
	$price =$_POST['price'];
	$qid = $_POST['qid'];

	
	 mysqli_query($conn,"update quote set qprice = '$price',q_status='Reviewed' where qid = '$qid'");
	?>
		<script>
			window.alert('Quote Price updated successfully!');
			window.history.back();
		</script>
	<?php
?>