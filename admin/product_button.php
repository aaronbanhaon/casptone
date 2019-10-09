<!-- Delete Product -->
    <div class="modal fade" id="delproduct_<?php echo $prid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"SELECT * FROM pricing join product on product.productid = pricing.prodid join size on size.sizeid = pricing.sizeid where pricing_ID = '$prid'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Product Name: <strong><?php echo $b['product_name']; ?></strong></center></h5>
                    <h5><center>Size: <strong><?php echo $b['size']; ?></strong></center></h5>
                    <form role="form" method="POST" action="deleteproduct.php<?php echo '?id='.$prid; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $prid; $pid ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Product</h4></center>

                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
                    
						$a=mysqli_query($conn,"select * from product left join category on product.categoryid = Category.categoryid join pricing on product.productid = pricing.prodid join size on size.sizeid = pricing.sizeid where pricing_ID = '$prid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_product.php<?php echo '?id='.$prid; ?>" enctype="multipart/form-data">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Product Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['product_name']); ?>" class="form-control" name="name">
                            <input type="text" style="width:400px; text-transform:capitalize;display: none; " value="<?php echo ucwords($b['productid']); ?>" class="form-control" name="pid">
                            <input type="text" style="width:400px; text-transform:capitalize;display: none;" value="<?php echo ucwords($b['pricing_ID']); ?>" class="form-control" name="prid">
                        </div>

						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Category:</span>
                                <select style="width:400px;" class="form-control" name="category">
                                    <?php
                                        $cat=mysqli_query($conn,"select * from category");
                                        while($catrow=mysqli_fetch_array($cat)){
                                            ?>
                                                <option value="<?php echo $catrow['categoryid']; ?>"><?php echo $catrow['category_name']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                        </div>
						
						
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Price:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['price'] ?>" class="form-control" name="price">
                        </div>
						<div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Size:</span>
                            <select style="width:400px;" class="form-control" name="size">
                                 <?php
                                        $cat=mysqli_query($conn,"select * from size");
                                        while($catrow=mysqli_fetch_array($cat)){
                                            ?>
                                                <option value="<?php echo $catrow['sizeid']; ?>"><?php echo $catrow['size']; ?></option>
                                            <?php
                                        }
                                    ?>
                            </select>
                        </div>
                        <div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
				</form>
                </div>
        </div>
    </div>
<!-- /.modal -->




