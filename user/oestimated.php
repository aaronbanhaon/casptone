<?php
include('session.php');
$lamtotal = 0;
$quan = $_POST['quan'];
$cat = $_POST['cat'];
$scat = $_POST['scat'];
$size = $_POST['size'];
$paper = $_POST['paper'];
$lam = $_POST['lam'];

$result = mysqli_query($conn,"SELECT *
FROM pricing  
where prodid =  $scat and sizeid= $size");



// printing the list box select command
while($catinfo=mysqli_fetch_array($result)){//Array or records stored in $nt
    $est = $catinfo['price'];

    if ($lam != 0)
    { 
        $lamtotal = $lam * $quan;
    }
    echo (($est * $quan)+ $lamtotal) ;

}
?>