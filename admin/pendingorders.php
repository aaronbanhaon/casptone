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
			            <h1 class="page-header">Pending Orders
							
						</h1>
						<table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Date Created</th>
                        <th>Work Type</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$cq=mysqli_query($conn,"select orderid,statuscode,customer_name, product_name,priority as type, size, quantity, date_created from orders left join product on product.productid = orders.prodid left join size on size.sizeid = orders.sizeid left join papertype on papertype.typeid = orders.orderid left join customer on customer.userid = orders.customerid where statuscode = 1 order by date_created,type desc");
					while($cqrow=mysqli_fetch_array($cq)){
					?>
						<tr>
							<td><?php echo $cqrow['customer_name']; ?></td>
							<td><?php echo $cqrow['orderid']; ?></td>
							<td><?php echo $cqrow['product_name']; ?></td>
							<td><?php echo $cqrow['size']; ?></td>
							<td><?php echo $cqrow['quantity']; ?></td>
							<td><?php echo $cqrow['date_created']; ?></td>
							<td><?php 
								if ($cqrow['type'] == 3){
									echo ("<strong style='color:red'>Rush</strong>");
								} 
								else {
									echo "Normal";
								}?></td>
							<td> 
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#approve_<?php echo $cqrow['orderid']; ?>"><i class="fa fa-check-square"></i> Approve</button>
								<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#view_<?php echo $cqrow['orderid']; ?>"><i class="fa fa-check-square"></i> View Proof of Payment</button>
                                <?php include('orders_button.php'); ?>
							</td>
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
<script type="text/javascript">

</script>
</body>
</html>