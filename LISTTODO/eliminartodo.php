<?php 

$con = mysqli_connect("localhost","root","","coloresdb");


$eliminartodo = mysqli_query($con,"DELETE FROM tcolores");

header('location:index.php');
?>
