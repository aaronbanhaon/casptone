
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!-- SECTION -->
<div class="section main main-raised">

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->

            <?php
            include '../db.php';
            $product_id = $_GET['p'];
            if (isset($_SESSION['uid'])){
                $uid = $_SESSION['uid'];

            }
            else {$uid = 0;}

            $sql = " SELECT * FROM product join product_template on product.productid = product_template.product_id ";
            $sql = " SELECT * FROM product join product_template on product.productid = product_template.product_id  WHERE productid = $product_id";
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $off = 2;
                    echo '
									<br>
									<br>
                                    
                                <div class="col-md-1"></div>
                                <div class="col-md-5 col-md-push-0">
                                <div id="product-main-img">
                                    <div class="product-preview">
                                        <img src="../template_img/' . $row['template_image'] . '" alt="" >
                                    </div>
	
                                </div>
                            </div>
                                
                              

                                 
									';

                    ?>
                    <!-- FlexSlider -->

                    <?php
                    echo '
									
                                    
                                   
                    <div class="col-md-5">
                    ';


                    $sqlav = " SELECT avg(pr_rating) as 'avv', count(*) as 'tol' FROM product_review WHERE prod_id = $product_id
												";
                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    echo '
						<div class="product-details" style="margin-left: 150px; width: 100%;">
							<h2 class="product-name">' . $row['product_name'] . '</h2>
							<div class="add-to-cart">
								<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
								<button class="add-to-cart-btn" pid="' . $row['productid'] . '" > add to cart</button>
                                </div>

							</div>
						           </div>
					            </div>';


                }
            }
  ?>
        </div>
    </div>
</div>




