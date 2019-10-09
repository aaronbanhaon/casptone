<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">


	<div style="width: 100%; height: 500px;">

				<div class="row">
			        <div class="col-lg-12" >
			            <h1 class="page-header">Queue
							
						</h1>
						<table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
		                <thead>
		                    <tr>
		                        <th>Customer Name</th>
		                        <th>Order ID</th>
		                        <th>Product Name</th>
		                        <th>Size</th>

		                        <th>Quantity</th>
		                        <th>Date Accepted</th>
                                <th>Priority</th>
		                        <th>Work Type</th>
								<th>Action</th>
		                    </tr>
		                </thead>
		                <tbody>
						<?php
							$cq=mysqli_query($conn,"select orderid,statuscode,wtype, customer_name, product_name,datediff(now(),date_accepted) + priority as 'prio',priority, size, quantity, date_accepted from orders left join product on product.productid = orders.prodid left join size on size.sizeid = orders.sizeid left join papertype on papertype.typeid = orders.orderid left join customer on customer.userid = orders.customerid left join worktype on orders.priority = worktype.wtypeid where statuscode = 2 order by prio desc");
							while($cqrow=mysqli_fetch_array($cq)){
							?>
								<tr>
									<td><?php echo $cqrow['customer_name']; ?></td>
									<td><?php echo $cqrow['orderid']; ?></td>
									<td><?php echo $cqrow['product_name']; ?></td>
									<td><?php echo $cqrow['size']; ?></td>
									<td><?php echo $cqrow['quantity']; ?></td>
									<td><?php echo $cqrow['date_accepted']; ?></td>
                                    <td><?php if ($cqrow['prio']>=10){
                                            echo ("<strong style='color:red'>HIGH</strong>");
                                        }
                                        else if ($cqrow['prio']>5){
                                            echo ("<strong style='color:orange'>Normal</strong>");
                                        }
                                        else {
                                            echo ("<strong style='color:green'>Low</strong>");
                                        }?></td>
									<td><?php if ($cqrow['wtype']=='Rush'){
										 echo ("<strong style='color:red'>".$cqrow['wtype']."</strong>");
									}
									else{echo $cqrow['wtype'];} ?></td>

									<td> 
										<button class="btn btn-sm" style="background: lightgreen; border-color: rgb(0,0,0,0.2)" data-toggle="modal" data-target="#finish_<?php echo $cqrow['orderid']; ?>"><i class="fa fa-edit"></i> Finish Order</button>
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
