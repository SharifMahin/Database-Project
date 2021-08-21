<?php

?>
<!doctype html>
<html>
<head>
	<title>East West bank/register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<header>
	<nav>
		<div class="logo">
<img src="e.png">
	</div>
	<ul>
	<li ><a href="http://localhost/new/Home.php">Home</a></li>
	<li><a href="http://localhost/new/admin/admin_login.php">Admin</a></li>
	<li><a href="http://localhost/new/customerlogin/clogin.php">Customer Login</a></li>
	<li><a href="http://localhost/new/aboutus/us.php">About us</a></li>

	</ul>
	</nav>	
	<div class="title">
	<h1 align="center">East West Bank</h1><br/>
	</div>
<div align ="center">
<h1 style="color: #07DE11; font-size:26px;">Submit your information</h1>
<br/>
<img src="user.png" alt="picture of flower" width="140" hight="140">
  <form action="rsave.php" method="POST">
 <table style="width:50%" >
 <div class="button1">
	<a href="http://localhost/new/registration/register.php"class="btn1">Register</a>
	</div>
  <tr>
    <td><br/><b>NID Number :</td>
    <td><input type="text" size="32" maxlength="32" name="id"placeholder="Enter your nid Number"required></td>
	</tr>
	 <tr>
	<td><br/><b>User Name :</td>
    <td><input type="text" size="32" maxlength="32" name="Name"placeholder="Enter your Name"required></td>
 </tr>
 <tr>
 <td><br/><b>Phone no. :</td>
    <td><input type="text" size="32" maxlength="32" name="phone"placeholder="Enter your phone no"></td>
	</tr>
 	 <tr>
	 	 <tr>
	<td><br/><b>Address :</td>
    <td><input type="text" size="32" maxlength="32" name="address"placeholder="Enter your address"></td>
 </tr>
   <tr>
	<td><br/><b>Email :</td>
    <td><input type="text" size="32" maxlength="32" name="email"placeholder="Enter your email"></td>
 </tr>
 	 <tr>
	<td><br/><b>password :</td>
    <td><input type="password" size="32" maxlength="32" name="password"placeholder="Enter your password"required></td>
 </tr>
  <tr>
	<td><br/><b> Date of Birth :</td>
    <td><input type="date" size="32" maxlength="32" name="Date_of_Birth"placeholder="Enter your Date of Birth"></td>
 </tr>
  <tr>
	<td><br/><b> Gender :</td>
	<td>
    <input type="radio" name="Gender" value="male"checked> Male
	<input type="radio" name="Gender" value="female"> Female
	<input type="radio" name="Gender" value="other"> Other
	</td>
   </tr>
   <tr>
    <td><br/><input type="submit" value="Submit" ></td>
  </tr>
  
</table>

 </form>
 </div>
</header>
</body>

</html>
