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
			            <h1 class="page-header">Quotations
							
						</h1>
						<table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
                    <tr>
                        <th>Quotation ID</th>
                        <th>Customer Name</th>
                        <th>Date Created</th>
						<th>Quote Name</th>
                        <th>Product Name</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Papertype</th>
                        <th>Price Quoted</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$cq=mysqli_query($conn,"SELECT * FROM quote join customer on customer.userid = quote.user_id where q_status = 'Pending'");
					while($cqrow=mysqli_fetch_array($cq)){
					?>
						<tr>
							<td><?php echo $cqrow['qid']; ?></td>
							<td><?php echo $cqrow['customer_name']; ?></td>
							<td><?php echo $cqrow['q_date_created']; ?></td>
							<td><?php echo $cqrow['qtitle']; ?></td>
							<td><?php echo $cqrow['qname']; ?></td>
							<td><?php echo ucwords($cqrow['qwidth'])."in x ".ucwords($cqrow['qheight'])."in"; ?></td>
							<td><?php echo $cqrow['qquantity']; ?></td>
							<td><?php echo $cqrow['qpaper']; ?></td>
							<td><?php echo $cqrow['qprice']; ?></td>
							<td> 
								
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editq_<?php echo $cqrow['qid']; ?>"><i class="fa fa-check-square"></i> Quote Price</button>
								
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
<script src="custom.js">

</script>
</body>
</html>