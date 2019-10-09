<?php
include('session.php');

$provCode = $_POST['provCode'];

$result = mysqli_query($conn,"SELECT size.sizeid,size.size FROM size join pricing on size.sizeid = pricing.sizeid join product on pricing.prodid = product.productid where productid =  $provCode");

echo "<option selected>Select size</option>";

// printing the list box select command
while($catinfo=mysqli_fetch_array($result)){//Array or records stored in $nt
    echo "<option value=\"".htmlspecialchars($catinfo['sizeid'])."\">".$catinfo['size']."</option>";

}
?>