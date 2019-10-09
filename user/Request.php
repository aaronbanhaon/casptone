<?php include('session.php'); ?>
<?php include('header.php'); ?>

<body style="background: #A8D1E7;">
<?php include('navbar.php'); ?>
<br>
<br>
<div class="col-lg-12">
    <center>
        <div style="width: 30%; margin-top: 3%; box-shadow: 0 0 20px 0 rgba(0,0,0,0.2), 0 0 5px 5px rgba(0,0,0,0.24); ">
            <div class="well" style="background: #24315E;">
                <h1 style="color: #A8D1E7"> Enter Quote</h1>
                <form method="POST" action="sendrequest.php" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group input-group">
                           <div class="row">
                               <div class="col-sm-3">
                                   <span style="color: white;">Product Type</span>
                               </div>
                               <div class="col-sm-4">
                                   <input type="radio" onclick="location.href='order2.php'"><a>Existing Product</a>
                               </div>
                               <div class="col-sm-4">
                                   <input type="radio" checked><a>Custom Product</a>
                               </div>
                        </div>
                    <div class="form-group input-group">
                        <p style="color:red;">*
                        <input type="text" style="width:400px; text-transform:capitalize; background: #24315E; border-color: #24315E; color: #A8D1E7; border-bottom-color: black; font-size: 17px;" class="form-control" autocomplete="false" name="title" required placeholder="Quote Title"></p>

                    </div>
                    <div class="form-group input-group">
                         <p style="color:red;">*
                        <input type="text" style="width:400px; text-transform:capitalize;  background: #24315E; border-color: #24315E; color: #A8D1E7; border-bottom-color: black; font-size: 17px;" class="form-control" autocomplete="false" name="name" required placeholder="Product Name"></p>
                    </div>
                    <div class="form-group input-group">
                         <p style="color:red;">*
                        <input type="text" style="width:400px; text-transform:capitalize;  background: #24315E; border-color: #24315E; color: #A8D1E7; border-bottom-color: black; font-size: 17px;" class="form-control" autocomplete="false" name="quan" required placeholder="Quantity"></p>
                    </div>
                    <div class="form-group input-group">
                         <p style="color:red; margin-left: 40px;" class="fa fa-arrow-up">*Inch
                        <input type="text" style="width:400px; text-transform:capitalize;  background: #24315E; border-color: #24315E; color: #A8D1E7; border-bottom-color: black; font-size: 17px;" class="form-control" autocomplete="false" name="sizeh" placeholder="height"></p>
                    </div>
                      <div class="form-group input-group">
                         <p style="color:red; margin-left: 40px;" class="fa fa-arrow-right">*Inch
                        <input type="text" style="width:400px; text-transform:capitalize;  background: #24315E; border-color: #24315E; color: #A8D1E7; border-bottom-color: black; font-size: 17px;" class="form-control" autocomplete="false" name="sizew" placeholder="width"></p>
                    </div>
                    <div class="form-group input-group">
                        <input type="text" style="width:400px; text-transform:capitalize;  background: #24315E; border-color: #24315E; color: #A8D1E7 ;border-bottom-color: black; font-size: 17px;" class="form-control" autocomplete="false" name="paper" placeholder="Paper/Stock"></p>
                    </div>
                    <div class="form-group input-group">
                        <input type="text" style="width:400px; text-transform:capitalize;  background: #24315E; border-color: #24315E; color: #A8D1E7 ;border-bottom-color: black; font-size: 17px;" class="form-control" autocomplete="false" name="page"  placeholder="Slide/Pages"></p>
                    </div>
                    <div class="form-group input-group">
                        <input type="text" style="width:400px; text-transform:capitalize;  background: #24315E; border-color: #24315E; color: #A8D1E7 ;border-bottom-color: black; font-size: 17px;" class="form-control" autocomplete="false" name="lam"  placeholder="Lamination"></p>
                    </div>
                    <div class="form-group input-group">
                        <input type="text" style="width:400px; text-transform:capitalize;  background: #24315E; border-color: #24315E; color: #A8D1E7; border-bottom-color: black; font-size: 17px; " class="form-control" autocomplete="false" name="desc" placeholder="Additional Data">
                    </div>
                    <div class="form-group input-group">
                  <input type="file" name="image" id="image" placeholder="Upload Artwork" style="background: #24315E; border-color: #24315E; color: #A8D1E7;">

                    </div>
                        <div class="form-group input-group">
                        <input type="checkbox" id="terms" onchange="sad()"><a href="../terms.php">term & condition</a></input>
                        </div>
                         <div style="display: none" id="active">
                         <button type="submit" class="btn btn-primary" ><span class="fa fa-send">Submit </span></button>"
                         </div>
                        <div>
                        <button type="submit" id="active2" class="btn btn-primary"><span class="fa fa-send">Submit </span></button>
                        </div>
                </form>

            </div>
    </center>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
</body>
<script language="JavaScript">
    function sad() {
        if (document.getElementById('terms').checked = true){
            document.getElementById("active").style= display = block;

            document.getElementById("active2").style=  display = none;
            }



        }
    }
</script>



</html>
