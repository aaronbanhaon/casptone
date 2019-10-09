<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>


<div class="container">
	<?php include('cart_search_field.php'); ?>
	<div style="height: 50px;"></div>
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quote History</h1>
        </div>
    </div>
                <!-- /.row -->
				<div class="row">
                <div class="col-lg-12">
					<table width="100%" class="table table-striped table-bordered table-hover table-responsive table-condensed text-center " id="historyTable">
						<thead>
							<tr>
								<th class="hidden"></th>
								<th >Date Created</th>
								<th>Order ID</th>
								<th>Quote Title</th>
                                <th>Actions</th>
								
							</tr>
						</thead>
						<tbody >
							<?php
								$h=mysqli_query($conn,"select * from quote where user_id='".$_SESSION['id']."' ");
								while($hrow=mysqli_fetch_array($h)){
									?>
										<tr>
											<td class="hidden"></td>
											<td>
                                                <ul class="list-unstyled">
                                                    <li>hellow</li>
                                                    <li>hellow</li>
                                                    <li>hellow</li>

                                               <?php echo date("M d, Y - h:i A", strtotime($hrow['q_date_created']));?>
                                                <br><p>Order ID: <?php echo number_format($hrow['qid']); ?></p>

                                                </ul>
                                            </td>
											<td><?php echo number_format($hrow['qid']); ?></td>
                                            <td><?php echo $hrow['qtitle']; ?></td>

											<td>
                                                <a data-target="#detail<?php echo $hrow['qid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-fullscreen"></span>  View Full Details</a>
                                                <?php include ('modal_hist.php'); ?>
											</td>

										</tr>
									<?php
								}
							?>
						</tbody>
                    </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
	
	
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<script src="custom.js"></script>
<script>
$(document).ready(function(){
	
	$('#historyTable').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": true,
	"pageLength": 7
	});
});
</script>
</body>
</html>