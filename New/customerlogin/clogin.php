<?php
session_start();
include 'config.php';
?>
<!doctype html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
	<title>East West bank/customer login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div>
	<header>
	<nav>
		<div class="logo">
<img src="e.png">
	</div>
	<ul>
	<li ><a href="http://localhost/new/Home.php">Home</a></li>
	<li><a href="http://localhost/new/admin/admin_login.php">Admin</a></li>
	<li class="active"><a href="http://localhost/new/customerlogin/clogin.php">Customer Login</a></li>
	<li><a href="http://localhost/new/aboutus/us.php">About us</a></li>	
	</ul>
	</nav>	
	<div class="title">
	</br><h1 align="center">East West Bank</h1><br/><br/>
	</div>
<div align ="center">
<img src="customerlogin.png" alt="picture of flower" width="180" hight="150">
  <form action="clogin.php" method="POST">
 <table style="width:50%" >
 <div class="button1">
	<a href="http://localhost/new/registration/register.php"class="btn1">Register</a>
	</div>
  <tr>
    <td><br/><h1 class="badge badge-danger" ">User Name :</h1></td>
    <td><input class="form-control" type="text" size="32" maxlength="32" name="username"placeholder="Enter your User Name"required></td>
	</tr>
	 <tr>
	<td><br/><h1 class="badge badge-danger"">password :</td>
    <td><input class="form-control" type="password" size="32" maxlength="32" name="pass"placeholder="Enter your password."required></td>
	
 </tr>
  
</table>
  <tr>
	<td></br></br><input class="btn btn-danger" name="login" type="submit" value="  Log In  " ></td>
  </tr>
 </form>
 <?php
 if(isset($_POST['login'])){

		 $name = $_POST['username'];
		 $pass = $_POST['pass'];
		 $query="select * from chome where Name='$name' AND password='$pass'"; 
		 $check = mysqli_query($con,$query);
		 if(mysqli_num_rows($check)>0){
		 $row=mysqli_fetch_array($check);
		 echo"<script>
		 alert('Welcome Sir/Mam')
		 window.location='chome.php'</script>";
		 $_SESSION['username']=$name;
		 $_SESSION['pass']=$pass;
		 }
		 else{
			 echo"
		    <script>
			 alert('your Email or password is not correct.');
			 window.location.href='http://localhost/new/customerlogin/clogin.php';
			 </script>";
			 	 
		 }
		 
		 
		 
	 }
 ?>
 </div>
</header>
</body>

</html>
