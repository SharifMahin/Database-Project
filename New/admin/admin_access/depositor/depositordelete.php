<?php
include 'config.php';

if(isset($_REQUEST['id'])){
	$d_id = $_REQUEST['id'];
	
	$query="delete from depositor where dep_id='$d_id'";
	mysqli_query($con,$query);
	echo"<script>window.location='depositor.php'</script>";
	
}




?>