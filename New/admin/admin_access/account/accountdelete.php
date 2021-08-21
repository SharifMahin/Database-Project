<?php
include 'config.php';

if(isset($_REQUEST['id'])){
	$accnt_no = $_REQUEST['id'];
	
	$query="delete from account where account_no='$accnt_no'";
	mysqli_query($con,$query);
	echo"<script>window.location='account.php'</script>";
	
}




?>