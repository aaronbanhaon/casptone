<?php
	include('session.php');
	
	$pid=$_POST['pid'];
	
	$price=$_POST['price'];
	$size =$_POST['size'];
	

	
	 mysqli_query($conn,"insert into pricing (prodid, price,sizeid) values ('$pid','$price','$size') ");
	?>
		<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script>
	<?php
?>