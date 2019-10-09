<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
     <?php $cq=mysqli_query($conn,"select orderid,statuscode,wtype, customer_name, product_name,datediff(now(),date_accepted) + priority as 'prio',priority, size, quantity, date_created from orders left join product on product.productid = orders.prodid left join size on size.sizeid = orders.sizeid left join papertype on papertype.typeid = orders.orderid left join customer on customer.userid = orders.customerid left join worktype on orders.priority = worktype.wtypeid where statuscode = 2 order by prio desc");
   $counthp=0;
    while($pqrow=mysqli_fetch_array($cq)){
        if($pqrow['prio']>=10){
            $counthp +=1;
        };
    };
    $cq1=mysqli_query($conn,"select orderid,statuscode,wtype, customer_name, product_name,datediff(now(),date_created) + priority as 'prio',priority, size, quantity, date_created from orders left join product on product.productid = orders.prodid left join size on size.sizeid = orders.sizeid left join papertype on papertype.typeid = orders.orderid left join customer on customer.userid = orders.customerid left join worktype on orders.priority = worktype.wtypeid where statuscode = 2 order by prio desc");
    $countord = mysqli_num_rows($cq1);
    $cq2=mysqli_query($conn,"select orderid,statuscode,customer_name, product_name,priority as type, size, quantity, date_created from orders left join product on product.productid = orders.prodid left join size on size.sizeid = orders.sizeid left join papertype on papertype.typeid = orders.orderid left join customer on customer.userid = orders.customerid where statuscode = 1 order by date_created,type desc");
    $countpend   = mysqli_num_rows($cq2);
    ?>


    <div style="width: 100%; height: 500px;">

                <div class="row">
                    <div class="col-lg-12" >
                        <h1 class="page-header">Dashboard
                           </h1>
                            <div class="row" >
                <div class="col-sm-4" style="background: lightblue;">
                    <h1>High Priority Orders</h1>
                    <br>
                    <strong style="font-size:100px"><?php echo $counthp ?></strong>
                    <br>
                </div>
                <div class="col-sm-4" style="background: yellow;">
                    <h1>Orders Pending</h1>
                    <br>
                    <strong style="font-size:100px"><?php echo $countpend ?></strong>
                    <br>

                </div>
                <div class="col-sm-4" style="background: lightgreen;">
                    <h1>Queued Orders</h1>
                    <br>
                    <strong style="font-size:100px"><?php echo $countord ?></strong>
                    <br>
                </div>
            </div>
            <div class="col-lg-12 bg-primary"> 
            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('script.php'); ?>
    <?php include('modal.php'); ?>
<script type="text/javascript">

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<script src="node_modules/chart.js/dist/Chart.js"></script>

</script>
</body>
</html>
