<?php
	include('session.php');


	$customer =$_SESSION['id'];
    $subcat = $_POST ['subcat'];
    $size = $_POST ['size'];
    $quan = $_POST ['quantity'];
    $paper = $_POST ['paper'];
    $lam = $_POST ['lam'];
    $work = $_POST ['work'];
    $est = $_POST ['est1'];




    mysqli_query($conn,"insert into orders (customerid, prodid,sizeid, quantity, typeid,addservice,priority,est_price) values  
    	('$customer','$subcat','$size','$quan','$paper','$lam','$work','$est')");


?>
<script>

    window.alert('Ordered Succesfully');
    window.location.href = "./index.php";

</script>