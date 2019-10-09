<!DOCTYPE html>
<?php include('session.php'); ?>
<?php include('header.php'); ?>
<html>
<head>
    <title>Image Upload</title>
    <style type="text/css">
        #content{
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }
        form{
            width: 50%;
            margin: 20px auto;
        }
        form div{
            margin-top: 5px;
        }
        #img_div{
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }
        #img_div:after{
            content: "";
            display: block;
            clear: both;
        }
        img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
<br>
<br>
<div>
    <center>
        <div class="container" style="width: 40%;">
            <div class="well">
                <h1> Upload</h1>
                <div style="border:2px solid gray;">
                <span style="color: red;">Please upload jpg, jpeg, gif, png, eps, ai, pdf, zip, tar, rar,cdr,psd images only File should not be larger than 50MB in size and Images should be at least 300dpi.</span>
                </div>
            <div>
                <br>
                <div>
      <!-- php 
                    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?> -->
  
                    <form method="POST" action="upload_image.php" enctype="multipart/form-data">
                        <input type="hidden" name="size" value="1000000">
                        <div>
                            <input type="file" name="image">
                        </div>
                        <div>
      <textarea
              id="text"
              cols="40"
              rows="4"
              name="image_text"
              placeholder="Say something about this image..."></textarea>
                        </div>
                        <div>
                            <button type="submit" name="upload">POST</button>
                        </div>
                    </form>
</div>
    </center>
</div>
</div>

</body>

</html>
