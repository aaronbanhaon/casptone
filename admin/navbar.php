<!-- Navigation -->
<?php
$result=mysqli_query($conn,"select count(*) from orders where statuscode = 2");
$qctr=mysqli_fetch_row($result);
$result=mysqli_query($conn,"select count(*) from orders where statuscode = 1");
$pctr=mysqli_fetch_row($result);
$result=mysqli_query($conn,"SELECT count(*) FROM quote where q_status = 'Pending' ");
$quotpend=mysqli_fetch_row($result);
$result=mysqli_query($conn,"SELECT count(*) FROM quote where q_status = 'Reviewed' ");
$quoted=mysqli_fetch_row($result);
?>


        <nav class="navbar navbar-default navbar-fixed-top bg-primary" role="navigation" >
           
            <div class="navbar-header">
				<a class="navbar-brand" ><strong><?php echo $user; ?></strong></a>
            </div>
             <div class="navbar-default sidebar " role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="queue.php"><i class="fa fa-clone fa-fw"></i> Queue <span class="badge" style="background-color: #007bff"><?php echo $qctr[0]; ?></span></a>
                        </li>
                        
                            
                                <li>
                                    <a href="customer.php"> <i class="fa fa-credit-card"></i> Customer</a>
                                    
                                </li>
                                <li>
                                    <a href="product.php"> <i class="fa fa-product-hunt"></i> Products</a>
                                </li>
                                
                        
                         <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i> Orders<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="pendingorders.php"> <i class="fa fa-copy"></i> Pending Orders  <span class="badge" style="background-color: #007bff"><?php echo $pctr[0]; ?></span></a>
                                        </li>
                                        <li>
                                            <a href="cancelledorders.php"> <i class="fa fa-ban"></i> Cancelled Orders </a>
                                        </li>
                                        <li>
                                            <a href="orderHistory.php"> <i class="fa fa-file"></i> Orders History </a>
                                        </li>
                                    </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i> Quotations<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                            
                                    <li>
                                        <a href="quotations.php"> <i class="fa fa-file"></i> Quotations Pending <span class="badge" style="background-color: #007bff"><?php echo $quotpend[0]; ?></span></a>
                                    </li>
                                    <li>
                                        <a href="quoted.php"> <i class="fa fa-file"></i> Quotations Quoted <span class="badge" style="background-color: #007bff"><?php echo $quoted[0]; ?></span></a>
                                    </li>
                                    <li>
                                        <a href="quotationsdone.php"> <i class="fa fa-file"></i> Quotations History  </a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i> Reports<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                            
                                    <li>
                                        <a href="reports.php"> <i class="fa fa-file"></i> Sales Report </a>
                                    </li>
                                    <li>
                                        <a href="stats.php"> <i class="fa fa-file"></i> Statistics Report</a>
                                    </li>
                                </ul>
                        </li>
                        
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            

            
        </nav>
