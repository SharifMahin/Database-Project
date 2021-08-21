<?php
include 'config.php';

if(isset($_REQUEST['id'])){
	$customer = $_REQUEST['id'];
	
	$query="delete from register where id='$customer'";
	mysqli_query($con,$query);
	echo"<script>window.location='customer.php'</script>";
	
}




?>