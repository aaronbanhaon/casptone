<?php
	include('session.php');


	$id =$_SESSION['id'];
    $title = $_POST ['title'];
    $name = $_POST ['name'];
    $quan = $_POST ['quan'];
    $sizeh = $_POST ['sizeh'];
    $sizew = $_POST ['sizew'];
    $paper = $_POST ['paper'];
    $page = $_POST ['page'];
    $desc = $_POST ['desc'];
    $lamination = $_POST ['lam'];

    $fileInfo = PATHINFO($_FILES["image"]["name"]);

    if (empty($_FILES["image"]["name"])){
        $location="";
    }
    else{
        if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png"  OR $fileInfo['extension'] == "psd"  OR $fileInfo['extension'] == "webp")  {
            $newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
            move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
            $location = "upload/" . $newFilename;
        }
        else{
            $location="";

            ?>
                <script>
                    window.alert('Photo not added. Please upload JPG or PNG photo only!');

                </script>
            <?php
        }
    }
    
    

    mysqli_query($conn,"insert into quote (user_id, qtitle, qname, qquantity, qheight, qwidth, qpaper, qslide,qlamination,qdesc) values  
    	                                        ('$id','$title','$name','$quan','$sizeh','$sizew','$paper','$page','$lamination','$desc')") or die('sad');


?>
<script>
    window.alert('Ordered quote Succesfully');
    window.history.back();


</script>