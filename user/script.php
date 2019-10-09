
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../dist/js/sb-admin-2.js"></script>
<script src="../vendor/metisMenu/metisMenu.min.js"></script>
<script src="../vendor/jquery-editable-select-master/dist/jquery-editable-select.min.js"></script>
<script type="text/javascript" src="../vendor/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
<script src="../vendor/moment-develop/min/moment.min.js"></script>
<script src="../vendor/moment-develop/min/locales.min.js"></script>

<script src="../vendor/moment-develop/min/moment-with-locales.min.js"></script>

<script type="text/javascript" src="../vendor/bootstrap/js/transition.js"></script>
<script type="text/javascript" src="../vendor/bootstrap/js/collapse.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<script>

    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
        cat();
        cathome();
        brand();
        product();

        producthome();


        //cat() is a funtion fetching category record from database whenever page is load
        function cat(){
            $.ajax({
                url	:	"action.php",
                method:	"POST",
                data	:	{category:1},
                success	:	function(data){
                    $("#get_category").html(data);

                }
            })
        }
        function cathome(){
            $.ajax({
                url	:	"homeaction.php",
                method:	"POST",
                data	:	{categoryhome:1},
                success	:	function(data){
                    $("#get_category_home").html(data);

                }
            })
        }
        //brand() is a funtion fetching brand record from database whenever page is load
        function brand(){
            $.ajax({
                url	:	"action.php",
                method:	"POST",
                data	:	{brand:1},
                success	:	function(data){
                    $("#get_brand").html(data);
                }
            })
        }
        //product() is a funtion fetching product record from database whenever page is load
        function product(){
            $.ajax({
                url	:	"action.php",
                method:	"POST",
                data	:	{getProduct:1},
                success	:	function(data){
                    $("#get_product").html(data);
                }
            })
        }
    });

    $('#ocategories').on('change',function(e){
        e.preventDefault();
        $("#osize").empty();
        $("#opaper").empty();
     
        var regCode = $(this).val();
        $.ajax({
            url:"loadsub.php",
            method:"POST",
            data:{regCode:regCode},
            success:function(data){
                $('#osubcat').html(data);
            }
        });

    });


    $('#osubcat').on('change',function(e){
        e.preventDefault();
        $("#opaper").empty();

        var provCode = $(this).val();
        $.ajax({
            url:"loadsize.php",
            method:"POST",
            data:{provCode:provCode},
            success:function(data){
                $('#osize').html(data);
            }
        });

    });

    $('#osize').on('change',function(e){
        e.preventDefault();
        $("#opaper").empty();

        var paperCode = $(this).val();
        $.ajax({
            url:"loadpaper.php",
            method:"POST",
            data:{paperCode:paperCode},
            success:function(data){
                $('#opaper').html(data);
            }
        });

    });

    $('#ocategories').on('change',function(e){
        e.preventDefault();

        var lamCode = $(this).val();
        $.ajax({
            url:"loadlam.php",
            method:"POST",
            data:{lamCode:lamCode},
            success:function(data){
                $('#olam').html(data);
            }
        });

    });




    $('#categories').on('change',function(e){
        e.preventDefault();

        $("#opaper").empty();
        $("#size").empty();
    
        var regCode = $(this).val();
        $.ajax({
            url:"loadsub.php",
            method:"POST",
            data:{regCode:regCode},
            success:function(data){
                $('#subcat').html(data);
            }
        });

    });


    $('#subcat').on('change',function(e){
        e.preventDefault();
        $("#paper").empty();
        $("#lam").empty();
        var provCode = $(this).val();
        $.ajax({
            url:"loadsize.php",
            method:"POST",
            data:{provCode:provCode},
            success:function(data){
                $('#size').html(data);
            }
        });

    });

    $('#size').on('change',function(e){
        e.preventDefault();
       $("#paper").empty();
       $("#lam").empty();
        var provCode = $(this).val();
        $.ajax({
            url:"loadpaper.php",
            method:"POST",
            data:{provCode:provCode},
            success:function(data){
                $('#paper').html(data);
            }
        });

    });

    $('#categories').on('change',function(e){
        e.preventDefault();
       $("#lam").empty();
        var lamCode = $(this).val();
        $.ajax({
            url:"loadlam.php",
            method:"POST",
            data:{lamCode:lamCode},
            success:function(data){
                $('#lam').html(data);
            }
        });
    
    });
// changing value estemated 
    
    $('#quantity').on('change',function(e){
        e.preventDefault();
        var quan = $(this).val();
        var cat = $('#ocategories').val();
        var scat = $('#osubcat').val();
        var size = $('#o').val();
        var paper = $('#opaper').val();
        var lam = $('#olam').val();

        $.ajax({
            url:"oestimated.php",
            method:"POST",
            data:{quan:quan,cat:cat,scat:scat,size:size,paper:paper,lam:lam},
            success:function(data){
                $('#est').html(data);
                $('#est1').val(data);
            }
        });

    });


</script>