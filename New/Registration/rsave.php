<?php
$host_name = 'localhost';
$username = 'root';
$password = '';
$dbname='test';

$con = mysqli_connect($host_name,$username,$password)  or die ('database not found !');
mysqli_select_db($con,$dbname);

	$id = $_POST['id'];
	$Name = $_POST['Name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$Date_of_Birth = $_POST['Date_of_Birth'];
	$Gender = $_POST['Gender'];
	
	$sql = "INSERT INTO register (id,Name,phone,address,email,password,Date_of_Birth,Gender)
  values ('$id','$Name','$phone','$address','$email','$password','$Date_of_Birth','$Gender')";
    $run = mysqli_query($con,$sql);
				 if($run)
				{
					 echo "you have been successfully registered";
				}
				else{
					
					echo"connection failed";
			
					}
				 
?>