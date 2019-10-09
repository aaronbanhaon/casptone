<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body style="background: #A8D1E7;">
<?php include('navbar.php'); ?>
<div class="container">
    <?php include('cart_search_field.php'); ?>
    <div style="height: 50px;"></div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Purchase History</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-bordered table-hover table-responsive table-condensed text-center " id="historyTable">
                <thead>
                <tr>
                    <th class="hidden"></th>
                    <th>Date Created</th>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $h=mysqli_query($conn,"select * from orders JOIN status on status.statuscode = orders.statuscode where customerid='".$_SESSION['id']."' ");
                while($hrow=mysqli_fetch_array($h)){
                    ?>
                    <tr>

                        <td class="hidden"></td>
                        <td><?php echo date("M d, Y - h:i A", strtotime($hrow['date_created']));?></td>
                        <td><?php echo number_format($hrow['orderid']); ?></td>
                        <td><?php echo $hrow['statusdesc']; ?></td>
                        <td>
                            <a href="#detail<?php echo $hrow['orderid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-fullscreen"></span> View Full Details</a>
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