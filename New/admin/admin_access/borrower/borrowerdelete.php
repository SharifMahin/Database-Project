<?php
include 'config.php';

if(isset($_REQUEST['id'])){
	$b_id = $_REQUEST['id'];
	
	$query="delete from borrower where borrower_id='$b_id'";
	mysqli_query($con,$query);
	echo"<script>window.location='borrower.php'</script>";
	
}

?>