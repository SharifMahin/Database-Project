<?php
$host_name = 'localhost';
$username = 'root';
$password = '';
$dbname='test';
$con = mysqli_connect($host_name,$username,$password)  or die ('database not found !');
mysqli_select_db($con,$dbname);

?>