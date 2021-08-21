<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
	<title>East West Bank/Customerlogin/Customerhome</title>
	<link rel="stylesheet" type="text/css" href="chomecss/chome.css">
	</head>
	<body>
	<div>
	<header>
	<nav>
		<div class="logo">
<img src="e.png">
	</div>
		<ul>
	<li class="active "><a href="http://localhost/new/customerlogin/chome.php">Customer_home</a></li>
	<li ><a href="http://localhost/new/customerlogin/deposite.php">Deposit money</a></li>
	<li ><a href="http://localhost/new/customerlogin/getloan.php">Get Loan</a></li>
	<li><a href="http://localhost/new/customerlogin/payloan.php">Pay Loan</a></li>
	<li><a href="http://localhost/new/customerlogin/send_money.php">Send Money</a></li>
	
	</ul>
	</nav>	
	
			<div class="title">
	<h1 align="center"><label for="exampleInputEmail1">Customer Index</label></h1><br/>
	</div>



<?php
 if(isset($_POST['logout'])){
			 echo"
			 <script>
			 alert('You have Succesfully Logged Out');
			 window.location.href='http://localhost/new/customerlogin/clogin.php';
			 </script>
			 ";
		 }
?>
<div class='right_content'>
<form action="chome.php" method='POST'>
</form>
<table class='table'>
<tr>
</br>
<ul class="list-group list-group-horizontal-lg">
  <th><li class="list-group-item list-group-item-danger">Account number</li></th>
   <th><li class="list-group-item list-group-item-danger">Name</li></th>
  <th><li class="list-group-item list-group-item-danger">Balance</li></th>
  <th><li class="list-group-item list-group-item-danger">NID</li></th>
    <th><li class="list-group-item list-group-item-danger">Loan_no</li></th>
	  <th><li class="list-group-item list-group-item-danger">Loan_amount</li></th>
  <th><li class="list-group-item list-group-item-danger">Email</li></th>
  <th><li class="list-group-item list-group-item-danger">Phone</li></th>
  <th><li class="list-group-item list-group-item-danger">Address</li></th>
</ul>
</tr>

<?php
      
	 $customer_name = $_SESSION['username'];
$pass=  $_SESSION['pass'];
$query="select * from chome where Name='$customer_name' and password='$pass'";
$check=mysqli_query($con,$query);
if(mysqli_num_rows($check)>0){
while($row=mysqli_fetch_array($check)){
  $_SESSION['id']=$row['id'];
			 
?>
<tr>
   <ul class="list-group list-group-horizontal-lg">
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['account_no'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['Name'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['balance'];?></li></th> 
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['id'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['loan_no'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['loan_amount'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['email'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['phone'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['address'];?></li></th>
</ul>
</tr>

<?php 
}
}
?>
</table>
</div>
<form action="chome.php" method='POST'>
<div align="center">
</br></br></br>
<input type="submit" class="btn btn-danger" align ='center' name='logout' value='Log Out'></input>
</div>
</form>
</div>
</header>
</body>
</html>





