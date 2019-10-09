<?php
session_start();
include "../db.php";
if(isset($_POST["category"])){
    $category_query = "SELECT * FROM category";

    $run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
    echo "
      <div class='aside'>
							<h3 class='aside-title'>Categories</h3>
							<div class='btn-group-vertical'>
	";
    if(mysqli_num_rows($run_query) > 0){
        $i=1;
        while($row = mysqli_fetch_array($run_query)){

            $cid = $row["category_id"];
            $cat_name = $row["category_name"];
            $sql = "SELECT COUNT(*) AS count_items FROM product WHERE categoryid=$i";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($query);
            $count=$row["count_items"];
            $i++;


            echo "
					
                    <div type='button' class='btn navbar-btn category' cid='$cid'>
									
									<a href='#'>
										<span  ></span>
										$cat_name
										<small class='qty'>($count)</small>
									</a>
								</div>
                    
			";

        }


        echo "</div>";
    }
}
    if(isset($_POST["getProduct"])){
    $limit = 12;
    if(isset($_POST["setPage"])){
        $pageno = $_POST["pageNumber"];
        $start = ($pageno * $limit) - $limit;
    }else{
        $start = 0;
    }

    $product_query = "SELECT * FROM product join product_template on product.productid = product_template.product_id " ;
    $run_query = mysqli_query($con,$product_query);
    if(mysqli_num_rows($run_query) > 0){
        while($row = mysqli_fetch_array($run_query)){
            $pro_id    = $row['productid'];
            $pro_cat   = $row['categoryid'];
            $pro_title = $row['product_name'];
            $pro_image = $row['template_image'];

            $off=2;



            echo "
				
                        
                        <div class='col-md-4 col-xs-6' >
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='../template_img/$pro_image' style='max-height: 170px; alt=''>";

            echo "
									

									</div></a>
									<div class='product-body'>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										
									</div>
									
								</div>
							</div>
                        
			";
        }
    }
}
if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
    if(isset($_POST["get_seleted_Category"])){
        $id = $_POST["category_id"];
        $sql = "SELECT * FROM product,category WHERE categoryid = '$id' AND categoryid=category_id";


    }else if(isset($_POST["selectBrand"])){
        $id = $_POST["brand_id"];
        $sql = "SELECT * FROM product,category WHERE product_brand = '$id' AND product_cat=cat_id";
    }else if(isset($_POST["search"])){

        $searchtext = $_POST["keyword"];





        $sql = "SELECT * FROM product p left join category c 
					on p.categoryid = c.category_id WHERE product_name '%$searchtext%'";


    }
    $run_query = mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_query)){
        $pro_id    = $row['productid'];
        $pro_cat   = $row['categoryid'];
        $pro_title = $row['product_name'];
        $pro_image = $row['template_image'];

        echo "
				
                        
                        <div class='col-md-4 col-xs-6' >
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='../template_img/$pro_image' style='max-height: 170px; alt=''>";

        echo "
									

									</div></a>
									<div class='product-body'>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										
									</div>
									
								</div>
							</div>
                        
			";

    }
}





















    ?>