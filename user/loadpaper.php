<?php
include('session.php');

$paperCode = $_POST['paperCode'];

$result = mysqli_query($conn,"SELECT categoryid,papername FROM papertype where categoryid = $paperCode ");
echo "<option value= '0' selected>Select Paper</option>";

// printing the list box select command
while($catinfo=mysqli_fetch_array($result)){//Array or records stored in $nt
    echo "<option value=\"".htmlspecialchars($catinfo['categoryid'])."\">".$catinfo['papername']."</option>";

}

?>