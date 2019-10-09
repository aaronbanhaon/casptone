<!-- History -->
    <div class="modal fade" id="detail<?php echo $hrow['qid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title" id="myModalLabel">Purchase Full Details</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$order=mysqli_query($conn,"select * from quote where qid='".$hrow['qid']."'");
					$srow=mysqli_fetch_array($order);
				?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="pull-right">Date Created: <?php echo date("F d, Y", strtotime($srow['q_date_created'])); ?></p>
						</div>
                        <div class="col-lg-12">
                            <p class="pull-right">Status: <?php
                                echo $srow['q_status'] ?> </p>
                        </div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<table width="100%" class="table table-striped table-bordered table-hover t1">
								<thead>
									<tr>
										<th>Product Name</th>
										<th>Size</th>
										<th>Quantity</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$total=0;
										$pd=mysqli_query($conn,"select * from quote WHERE qid='".$hrow['qid']."'");
										while($pdrow=mysqli_fetch_array($pd)){
											?>
											<tr class="t2 t3">
												<td><?php echo ucwords($pdrow['qname']); ?></td>
                                                <td><?php echo $pdrow['qwidth']." Inch x ".$pdrow['qheight']." Inch" ?></td>
												<td><?php echo $pdrow['qquantity']; ?></td>
                                                <td><?php echo $pdrow['q_status']; ?></td>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Upload Payment</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div>
        </div>
    </div>