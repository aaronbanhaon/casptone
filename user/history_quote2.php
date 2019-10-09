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
            <?php
            $h=mysqli_query($conn,"select * from quote where user_id='".$_SESSION['id']."' ");
            while ($hrow=mysqli_fetch_array($h)){
            ?>
                   <div class="card-header d-md-flex justify-content-between py-2 px-2 px-md-3 " >
                       <div class="float-left mb-2 mb-sm-0"   style="background-color: #336B87;">

                       <h4>
                           <strong>Quote # <?php echo  $hrow['qid']; ?></strong>
                           <span><?php echo  $hrow['q_status']; ?></span>
                           <small style="color: white;">Date: <?php echo  $hrow['q_date_created']; ?></small><br>
                           <small style="color: white;">Title: <?php echo  $hrow['qtitle']; ?></small>
                       </h4>
                       </div>
                   </div>
                    <div>
                        <table class="table table-responsive-sm mb-0" style="background-color: #90AFC5; margin-top: -10px;">
                            <thead">
                            <tr style="color: white;">
                                <th class="border-0 text-nowrap">Product Details</th>
                                <th class="border-0 text-nowrap" >Additional Information</th>
                                <th class="border-0 text-nowrap">Artwork</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td class="text-left">
                                <ul class="list-unstyled">
                                    <li>Product Title: <?php echo  $hrow['qname']; ?></li>
                                    <li>Quantity: <?php echo  $hrow['qquantity']; ?></li>
                                    <li>Price: <?php echo  $hrow['qname']; ?> </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-unstyled">
                                    <ul class="list-unstyled">
                                        <li>Product Title: <?php echo  $hrow['qname']; ?></li>
                                        <li>Quantity: <?php echo  $hrow['qquantity']; ?></li>
                                        <li>Price: <?php echo  $hrow['qname']; ?> </li>
                                    </ul>
                                </ul>
                            </td>
                            <td>
                                <img src="../img/" style="width: 60px; height: 60px;">
                            </td>

                            </tbody>

                        </table>

                    </div>
                 <?php  } ?>


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