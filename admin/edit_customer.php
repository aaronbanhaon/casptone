<?php
	include('session.php');
	
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$use=mysqli_query($conn,"select * from user where userid='$id'");
	$urow=mysqli_fetch_array($use);
	
	if ($password==$urow['password']){
		$pass=$password;
	}
	else{
		$pass=md5($password);
	}

	mysqli_query($conn,"update user set username='$username', password='$password' where userid='$id'");
	mysqli_query($conn,"update customer set customer_name='$name', address='$address',email='$email', contact='$contact' where userid='$id'");
	
	?>
		<script>
			window.alert('Data Updated Successfully!');
			window.history.back();
		</script>
	<?php

?>