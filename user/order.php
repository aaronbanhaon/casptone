<?php include('session.php'); ?>
<?php include('header.php'); ?>
<head>
</head>
<body style="background: #A8D1E7;">
<?php include('navbar.php'); ?>
<br>
<br>

<div class="col-lg-12">
    <center>
    <div  style="width: 30%; box-shadow: 0 0 20px 0 rgba(0,0,0,0.2), 0 0 5px 5px rgba(0,0,0,0.24); margin-top: 3%;">
        <div class="well" style="background: #24315E;color: black;" >
    <h1 style="color: #A8D1E7"> ORDER HERE</h1>

    <form method="POST" action="send_order.php" enctype="multipart/form-data" autocomplete="off">

        <div class="form-group input-group">
            <select class="form-control" name="categories" id="ocategories"  style="width: 400px; background: #24315E; border-color: #24315E; color: #A8D1E7; font-size: 17px;">
                <option value="" disabled selected>-Select Categories-</option>
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

            <select class="form-control" name="subcat" id="osubcat"style="width: 400px; background: #24315E; border-color: #24315E; color: #A8D1E7; font-size: 17px;">
                <option value="" disabled selected>-Select Product-</option>

            </select>
        </div>
        <div class="form-group input-group">

            <select class="form-control" name="size" id="osize"  style="width: 400px; background: #24315E; border-color: #24315E; color: #A8D1E7; font-size: 17px;">

                <option value="" disabled selected>-Select Size-</option>

            </select>
        </div>
        <div class="form-group input-group">

            <select class="form-control" name="paper" id="opaper"  style="width: 400px; background: #24315E; border-color: #24315E; color: #A8D1E7;font-size: 17px;">

                <option value="0" disabled selected>-Select Paper-</option>

            </select>
        </div>
        <div class="form-group input-group">

            <select class="form-control" name="lam" id="olam"  style="width: 400px; background: #24315E; border-color: #24315E; color: #A8D1E7;font-size: 17px;">

                <option value="0" disabled selected>-Select Lamination-</option>

            </select>
        </div>

        <div class="form-group input-group">

            <select class="form-control" name="work" id="owork"  style="width: 400px; background: #24315E; border-color: #24315E; color: #A8D1E7;font-size: 17px;">

                <option value="0" disabled selected>-Select Work-</option>
                <option value="3">Normal</option>
                <option value="5">Rush</option>
            </select>
        </div>
        <div class="form-group input-group">

            <input type="text" style="width:400px; text-transform:capitalize; background: #24315E; border-color: #24315E; color: #A8D1E7 ;font-size: 17px;" class="form-control" autocomplete="false" name="quantity" id="quantity"required placeholder="-Quantity-">
        </div>
        <div class="form-group input-group">
        <input type="file" name="image" style="background: #24315E; border-color: #24315E; color: #A8D1E7;font-size: 17px;">
        </div>

        <div>
            <input type="hidden" value="" name="est1" id="est1"/>
            <h1>Estimated Price:<span id="est" name="est"></span></h1>
        </div>
        
        <div class="modal-footer">

        <button type="submit" class="btn btn-primary bottom-right"  onclick="window.location.href='./index.php'"><span class="fa fa-send"> Submit Order</span></button>
        </div>
    </form>

    </div>
    </center>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<script>


</script>
</body>


</html>
