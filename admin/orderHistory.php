<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
	<?php include('navbar.php'); ?>
	<div style="height:50px;"></div>
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
			        <div class="col-lg-12">
			            <h1 class="page-header">Orders History
							
						</h1>
						<table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Product Name</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Date Created</th>
						<th>Date Finished</th>
						
                    </tr>
                </thead>
                <tbody>
				<?php
					$cq=mysqli_query($conn,"select orderid,statusdesc,date_finished,customer_name, product_name, size, quantity, date_created from orders left join product on product.productid = orders.prodid left join size on size.sizeid = orders.sizeid left join papertype on papertype.typeid = orders.orderid left join customer on customer.userid = orders.customerid left join status on status.statuscode = orders.statuscode order by date_finished desc");
					while($cqrow=mysqli_fetch_array($cq)){
					?>
						<tr>
							<td><?php echo $cqrow['customer_name']; ?></td>
							<td><?php echo $cqrow['product_name']; ?></td>
							<td><?php echo $cqrow['size']; ?></td>
							<td><?php echo $cqrow['quantity']; ?></td>
							<td><?php echo $cqrow['statusdesc']; ?></td>
							<td><?php echo $cqrow['date_created']; ?></td>
							<td><?php echo $cqrow['date_finished']; ?></td>
							
						</tr>
					<?php
					}
				?>
                </tbody>
            </table>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<script  src="custom.js">

</script>
</body>
</html>