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
            <h1 class="page-header">Products
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addproduct"><i class="fa fa-plus-circle"></i> Add Product</button>
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addsizeonExisting"><i class="fa fa-plus-circle"></i> Add Size on Existing Product </button>
					
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addsize"><i class="fa fa-plus-circle"></i> New Size </button>
					<?php include('add_modal.php'); ?>
					</span>
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="prodTable">
                <thead>
                    <tr>
                    	<th>Category</th>
                        <th>Product Name</th>
                        <th>Price</th>
						<th>Size</th>
						<th>Duration(mins)</th>
						<th>Action</th>

                    </tr>
                </thead>
                <tbody>
				<?php
					
					$pq=mysqli_query($conn,"select * from product join pricing on product.productid = pricing.prodid join size on size.sizeid = pricing.sizeid join Category on category.category_id = product.categoryid");
					while($pqrow=mysqli_fetch_array($pq)){
						$pid=$pqrow['productid'];
						$prid = $pqrow['pricing_ID'];
					?>
						<tr>
							
							<td><?php echo $pqrow['category_name']; ?></td>
							<td><?php echo $pqrow['product_name']; ?></td>
							<td><?php echo $pqrow['price']; ?></td>
							<td><?php echo $pqrow['size']; ?></td>
							<td><?php echo $pqrow['durationMins']; ?></td>
							
							
							<td>
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editprod_<?php echo $prid; ?>"><i class="fa fa-edit"></i> Edit</button>
								<!-- <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delproduct_<?php echo $prid; ?>"><i class="fa fa-trash"></i> Delete</button>-->
								<?php include('product_button.php'); ?>

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
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<script  src="custom.js">

</script>
</body>
</html>