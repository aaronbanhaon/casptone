<?php
include('session.php');

$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$email = $_POST['email'];
mysqli_query($conn,"insert into user (username, password, access) values ('$username', '$password', '2')");
$userid=mysqli_insert_id($conn);

mysqli_query($conn,"insert into customer (userid, customer_name, address, contact, email) values ('$userid', '$name', '$address', '$contact', '$email')");
?>
    <script>
        window.alert('Customer added successfully!');
        window.history.back();

    </script>
<?php
?>