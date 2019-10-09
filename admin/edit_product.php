<?php
	
	include('session.php');
	$id=$_GET['id'];
	
	$p=mysqli_query($conn,"select * from product");
	$prow=mysqli_fetch_array($p);
	
	$name=$_POST['name'];
	$category=$_POST['category'];
	$sizeid = $_POST['size'];
	$price=$_POST['price'];
	$prid=$_POST['prid'];
	$pid =$_POST['pid'];

	mysqli_query($conn,"update product set product_name='$name', categoryid='$category' where productid='$pid'");
	mysqli_query($conn,"update pricing set price='$price', sizeid = '$sizeid' where pricing_ID = '$prid'");
	
	?>
		<script>
			window.alert('Product updated successfully!');
			window.history.back();
		</script>
	<?php

?>