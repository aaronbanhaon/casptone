<!-- Add Product -->
    <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addproduct.php" enctype="multipart/form-data">
						<div class="container-fluid">
    						<div style="height:15px;">
                                
                            </div>
    						<div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Name:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Duration:</span>
                                <input type="text" style="width:400px; text-transform:capitalize;" placeholder="Minutes"class="form-control" name="duration" required>
                            </div>
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
    						
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Price:</span>
                                <input type="text" style="width:400px;" class="form-control" name="price" required>
                            </div>
    						<div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Size:</span> 
                                <select style="width:400px;" class="form-control" name="size">
                                    <option value="<?php echo $b['size']?>"></option>
                                    <?php
                                        $c=mysqli_query($conn,"select * from size");
                                        while($crow=mysqli_fetch_array($c)){
                                            ?>
                                                <option value="<?php echo $crow['sizeid']; ?>"><?php echo $crow['size']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>   
                            </div>
    						
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->

<!-- Add Customer -->
    <div class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Customer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addcustomer.php" enctype="multipart/form-data">
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="name" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Address:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="address">
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contact Info:</span>
                            <input type="text" style="width:400px;" class="form-control" name="contact">
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Email:</span>
                            <input type="text" style="width:400px;" class="form-control" name="email" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Username:</span>
                            <input type="text" style="width:400px;" class="form-control" name="username" required>
                        </div>
                        
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Password:</span>
                            <input type="password" style="width:400px;" class="form-control" name="password" required>
                        </div>  						
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->



<div class="modal fade" id="addsizeonExisting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Size on Existing Product</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="addsizeonExisting.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div style="height:15px;">
                                
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Name:</span>
                                <select style="width:400px;" class="form-control" id="pid" name="pid">
                                    <option default selected>Select Product</option>
                                    <?php
                                        $cat=mysqli_query($conn,"select * from product");
                                        while($catrow=mysqli_fetch_array($cat)){
                                            ?>
                                                <option value="<?php echo $catrow['productid']; ?>"><?php echo $catrow['product_name']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Price:</span>
                                <input type="text" style="width:400px;" class="form-control" name="price" required>
                            </div>
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Size:</span> 
                                <select style="width:400px;" class="form-control" id="size" name="size">
                                    <option value="<?php echo $b['size']?>"></option>
                                    
                                </select>   
                            </div>
                                
                        </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="addsize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Size</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="addsize.php" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div style="height:15px;">
                                
                            </div>
                            
                            <div class="form-group input-group">
                                <span style="width:120px;" class="input-group-addon">Size: </span>
                                <input type="text" style="width:400px;" class="form-control" name="size" required>
                            </div>
                         
                        </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>