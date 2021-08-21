<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
	<title>East West Bank/Admin home</title>
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
	
	<li class="active"><a href="http://localhost/new/admin/ahome.php"">Admin</a></li>
	<li ><a href="http://localhost/new/admin/admin_access/customer/customer.php">Customers</a></li>
	<li ><a href="http://localhost/new/admin/admin_access/borrower/borrower.php">Borrowers</a></li>
	<li><a href="http://localhost/new/admin/admin_access/loan/loan.php">Loans</a></li>
		<li><a href="http://localhost/new/admin/admin_access/depositor/depositor.php">Deposites</a></li>
		<li><a href="http://localhost/new/admin/admin_access/account/account.php"">Accounts</a></li>
	
	</ul>
	</nav>	
	<div class="title">
	</br><h1 align="center">Welcome Administrator</h1><br/><br/>
	</div>
 

 <div align="center">
<img src="admin2.png"   width="140" height="140">
<form action="ahome.php" method="POST">	
</br>
</br></br></br>

<div >
<button type="submit"name="logout" class="btn btn-danger">Log Out</button>
</div>
</form>
<?php
 if(isset($_POST['logout'])){
			 echo"
			 <script>
			 alert('Logged Out');
			 window.location.href='http://localhost/New/admin/admin_login.php';
			 </script>
			 ";
		 }
?>
</div>
</header>
</body>
</html>





