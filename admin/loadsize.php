<?php
include('session.php');

$pid = $_POST['pid'];

$result = mysqli_query($conn,"SELECT DISTINCT size.sizeid, size FROM `size` left join pricing on size.sizeid = pricing.sizeid except SELECT size.sizeid, size FROM `size` left join pricing on size.sizeid = pricing.sizeid where prodid = $pid");

echo "<option selected>Select size</option>";

// printing the list box select command
while($catinfo=mysqli_fetch_array($result)){//Array or records stored in $nt
    echo "<option value=\"".htmlspecialchars($catinfo['sizeid'])."\">".$catinfo['size']."</option>";

}
?>