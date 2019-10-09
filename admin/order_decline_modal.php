<div class="modal fade" id="decline_<?php echo $cqrow['orderid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Decline Order</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from orders where customerid='".$cqrow['userid']."' and   orderid = '".$cqrow['orderid']."'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Order ID: <strong><?php echo ucwords($b['orderid']); ?></strong></center></h5>
					<form role="form" method="POST" action="deletecustomer.php<?php echo '?id='.$cqrow['orderid']; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Decline</button>
					</form>
                </div>
            </div>
        </div>
    </div>