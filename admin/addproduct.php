<?php
	include('session.php');
	
	$name=$_POST['name'];
	$category=$_POST['category'];
	$price=$_POST['price'];
	$size =$_POST['size'];
	$duration = $_POST['duration'];

	
	 mysqli_query($conn,"insert into product (product_name,categoryid,durationMins) values ('$name','$category','$duration')");
	 $prodid=mysqli_insert_id($conn);
	
	 mysqli_query($conn,"insert into pricing (prodid, price,sizeid) values ('$prodid','$price','$size') ");
	?>
		<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script>
	<?php
?>