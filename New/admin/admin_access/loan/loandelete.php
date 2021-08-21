<?php
include 'config.php';

if(isset($_REQUEST['id'])){
	$l_no = $_REQUEST['id'];
	
	$query="delete from loan where loan_no='$l_no'";
	mysqli_query($con,$query);
	echo"<script>window.location='loan.php'</script>";
	
}




?>