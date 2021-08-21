<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<title>East West bank/Admin login</title>
<link rel='stylesheet' type='text/css' href='css/style.css'>
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
	<li class="active"><a href="http://localhost/new/admin/admin_login.php">Admin</a></li>
	<li ><a href="http://localhost/new/customerlogin/clogin.php">Customer Login</a></li>
	<li><a href="http://localhost/new/aboutus/us.php">About us</a></li>

	</ul>
	</nav>	

<div class="title">
	<br/><h1 align="center">East West Bank</h1><br/><br/>
	</div>

<div align ="center">
<img src="admin2.png"  width="180" height="150">

  <form action="admin_login.php" method="POST">
 <table style="width:50%" >
 <div class="button1">
	<a href="http://localhost/new/registration/register.php"class="btn1">Register</a>
	</div>
  <tr>
    <td><br/><h1 class="badge badge-danger" ">User Name :</h1></td>
    <td><input class="form-control" type="text" size="32" maxlength="32" name="name"placeholder="Enter your User_Name"required></td>
	</tr>
	 <tr>
	<td><br/><h1 class="badge badge-danger"">Password :</td>
    <td><input class="form-control" type="password" size="32" maxlength="32" name="password"placeholder="Enter your password"required></td>
	
 </tr>
  
</table>
  <tr>
	<td></br></br><input class="btn btn-danger" name="login" type="submit" value="  Log In  " ></td>
  </tr>
 </form>

   <?php
   if(isset($_POST['login'])){
	 $name = $_POST['name'];
	 $password = $_POST['password'];
	 $query= " select* from admin where name='$name' AND password = '$password' ";
	 $check= mysqli_query($con,$query);
	 if($check){
		 if(mysqli_num_rows($check)>0)
                {
			 echo                        
			 "<script>
			 alert('Welcome Administrator');
			 window.location.href='ahome.php';
			 </script>
			 ";
		 }

             else
                {
			  echo
                         "<script>
			 alert('your Email or password is not correct.');
			 window.location.href='http://localhost/new/adminlogin/admin_login.php';
			 </script>
			 ";
			 
		 }
	 }
             else
                 {
		 	  echo
                         "<script>
			 alert('database error');
			 window.location.href='admin_login.php';
			 </script>
			 ";
	          }
 }
	 
   
?>

            
			  
              
            
 </div>
</div>

</body>

</html>