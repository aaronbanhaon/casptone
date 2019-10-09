
    <div class="modal fade" id="approve_<?php echo $cqrow['orderid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Approve?</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid" style="justify-content: left; padding-left: 120px;">
                    <?php
                    
                        $a=mysqli_query($conn,"select * from orders join customer on customer.userid = orders.customerid join product on product.productid = orders.prodid join size on size.sizeid = orders.sizeid where orderid = '".$cqrow['orderid']."'");
                        $b=mysqli_fetch_array($a);
                    ?>
                    <form role="form" method="POST" action="approvescript.php<?php echo '?id='.$cqrow['orderid']; ?>">
                    <br><br>
                    <h5><strong>NOTE: Approve only once you've verified payment</strong></h5><br><br>
                    
                    <input type="text" style="width:400px;display: none;" value="<?php echo $b['orderid'] ?>" class="form-control" name="orderid">
                </div>                 
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Approve</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->
    <div class="modal fade" id="view_<?php echo $cqrow['orderid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Proof Of Payment</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid" style="justify-content: left; padding-left: 150px;">
                    <?php
                    
                        $a=mysqli_query($conn,"select * from orders join customer on customer.userid = orders.customerid join product on product.productid = orders.prodid join size on size.sizeid = orders.sizeid where orderid = '".$cqrow['orderid']."'");
                        $b=mysqli_fetch_array($a);
                    ?>
                    Image placeholder
                    
                </div>                 
                </div>
                <div class="modal-footer">
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewq_<?php echo $cqrow['qid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Order Details</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid" style="justify-content: left; padding-left: 150px;">
                    <?php
                    
                        $a=mysqli_query($conn,"select * from quote where qid = '".$cqrow['qid']."'");
                        $b=mysqli_fetch_array($a);
                    ?>
                    <h5>Qoute Name: <strong><?php echo ucwords($b['qname']); ?></strong></h5>
                    <h5>Title: <strong><?php echo ucwords($b['qtitle']); ?></strong></h5>
                    <h5>Product: <strong><?php echo ucwords($b['qname']); ?></strong></h5>
                    <h5>Size: <strong><?php echo ucwords($b['qwidth'])."inches x ".ucwords($b['qheight'])."inches"; ?></strong></h5>
                    <h5>Quantity: <strong><?php echo ucwords($b['qquantity']); ?></strong></h5>
                    <h5>Paper Type: <strong><?php echo ucwords($b['qpaper']); ?></strong></h5>
                    <h5>Price: <strong><?php echo ucwords($b['qprice']); ?></strong></h5>
                    
                </div>                 
                </div>
                <div class="modal-footer">
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editq_<?php echo $cqrow['qid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Order Details</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid" style="justify-content: left; padding-left: 150px;">
                    <?php
                    
                        $a=mysqli_query($conn,"select * from quote where qid = '".$cqrow['qid']."'");
                        $b=mysqli_fetch_array($a);
                        $q_id = $cqrow['qid'];
                    ?>
                    <h5>Qoute Name: <strong><?php echo ucwords($b['qname']); ?></strong></h5>
                    <h5>Title: <strong><?php echo ucwords($b['qtitle']); ?></strong></h5>
                    <h5>Product: <strong><?php echo ucwords($b['qname']); ?></strong></h5>
                    <h5>Size: <strong><?php echo ucwords($b['qwidth'])."inches x ".ucwords($b['qheight'])."inches"; ?></strong></h5>
                    <h5>Quantity: <strong><?php echo ucwords($b['qquantity']); ?></strong></h5>
                    <h5>Paper Type: <strong><?php echo ucwords($b['qpaper']); ?></strong></h5>
                    <form role="form" method="POST" action="editq.php" enctype="multipart/form-data">
                    <div class="form-group input-group">
                        <span style="width:120px;" class="input-group-addon">Price:</span>
                        <input type="text" style="width:100%;" class="form-control" name="price" required>
                        <input type="text" style="width:100%;display: none" value='<?php echo $q_id ?>' class="form-control" name="qid" required>
                                
                    </div>
                    
                    <strong><br/></strong>
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
    <div class="modal fade" id="finish_<?php echo $cqrow['orderid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Are you sure?</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid" style="justify-content: center; padding-left: 180px;">
                    <?php
                    
                        $a=mysqli_query($conn,"select * from orders join customer on customer.userid = orders.customerid join product on product.productid = orders.prodid join size on size.sizeid = orders.sizeid where orderid = '".$cqrow['orderid']."'");
                        $b=mysqli_fetch_array($a);
                    ?>
                    <form role="form" method="POST" action="finishscript.php<?php echo '?id='.$cqrow['orderid']; ?>">
                    <br><br>
                    <h5><strong>NOTE: This order will be finished</strong></h5><br><br>
                    
                    <input type="text" style="width:400px;display: none;" value="<?php echo $b['orderid'] ?>" class="form-control" name="orderid">
                </div>                 
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Finish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>