<?php
include('session.php');

$regCode = $_POST['regCode'];

    $result = mysqli_query($conn,"SELECT productid,product_name FROM product where categoryid = $regCode ");
echo "<option selected>Select Product</option>";

// printing the list box select command
while($catinfo=mysqli_fetch_array($result)){//Array or records stored in $nt
    echo "<option value=\"".htmlspecialchars($catinfo['productid'])."\">".$catinfo['product_name']."</option>";

}

?>