<?php
include('session.php');

$lamCode = $_POST['lamCode'];

$result = mysqli_query($conn,"SELECT asid, service from additionalservice where categoryid = $lamCode");

echo "<option value= '0' selected>Select Lamination</option>";

// printing the list box select command
while($catinfo=mysqli_fetch_array($result)){//Array or records stored in $nt
    echo "<option value=\"".htmlspecialchars($catinfo['asid'])."\">".$catinfo['service']."</option>";

}
?>