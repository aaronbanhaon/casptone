
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
    });

    $('#pid').on('change',function(e){
        
        
     
        var pid = $(this).val();
        
        $.ajax({
            url:"loadsize.php",
            method:"POST",
            data:{pid:pid},
            success:function(data){
                $('#size').html(data);
            }
        });

    });

</script>