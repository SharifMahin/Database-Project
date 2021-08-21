<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<title>East West bank/ADD ACCOUNTS</title>
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
	
	<li ><a href="http://localhost/new/admin/ahome.php"">Admin</a></li>
	<li class="active"><a href="http://localhost/new/admin/admin_access/customer/customer.php">Customers</a></li>
	<li ><a href="http://localhost/new/admin/admin_access/borrower/borrower.php">Borrowers</a></li>
	<li><a href="http://localhost/new/admin/admin_access/loan/loan.php">Loans</a></li>
	<li><a href="http://localhost/new/admin/admin_access/depositor/depositor.php">Deposites</a></li>
	<li ><a href="http://localhost/new/admin/admin_access/account/account.php">Accounts</a></li>
	</ul>
	</nav>	

<div class="title">
	<h1 align="center"><label for="exampleInputEmail1">ADD CUSTOMER</label></h1><br/>
	</div>


  
  
</table>
  
 </form>

   <?php
   if(isset($_POST['login']))
{

    $id = $_POST['id'];
	$Name = $_POST['Name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$Date_of_Birth = $_POST['Date_of_Birth'];
	$Gender = $_POST['Gender'];
		 
		 $query="insert into register values('$id','$Name','$phone','$address','$email','$password','$Date_of_Birth','$Gender')"; 
		 if(mysqli_query($con,$query)){
	
		 echo"<p>New customer registered.</p>";
		 } 


}
?>
<form  action="" method = "POST" >

              <div class="form-group">
    <label  class="badge badge-danger">NID Number</label>
    <input align="center" class="form-control" type="text" placeholder="Enter NID number" name="id" required>
    
  </div>
  <div class="form-group">
    <label  class="badge badge-danger">User name</label>
    <input class="form-control" type="text" align='center' placeholder="Enter User name" name="Name" required><br>
  </div>
  
  <div class="form-group">
    <label  class="badge badge-danger">Phone no.</label>
    <input class="form-control" type="text" align='center' placeholder="Enter Phone no." name="phone" required><br>
  </div>
  
  <div class="form-group">
    <label  class="badge badge-danger">Address</label>
    <input class="form-control" type="text" align='center' placeholder="Enter Address" name="address" required><br>
  </div>
  
  <div class="form-group">
    <label  class="badge badge-danger">Email</label>
    <input class="form-control" type="text" align='center' placeholder="Enter Email" name="email" required><br>
  </div>
  
  <div class="form-group">
    <label  class="badge badge-danger">Password</label>
    <input class="form-control" type="password" align='center' placeholder="Enter Password" name="password" required><br>
  </div>
  
  <div class="form-group">
    <label  class="badge badge-danger">Date of Birth</label>
    <input class="form-control" type="date" align='center' placeholder="Enter Date of Birth" name="Date_of_Birth" required><br>
  </div>
  
  <div class="form-group">
    <label  class="badge badge-danger">Gender</label>
    <td>
    </br><input type="radio" name="Gender" value="male"checked> Male </br>
	<input type="radio" name="Gender" value="female"> Female </br>
	<input type="radio" name="Gender" value="other"> Other </br>
	</td>
  </div>
  
  <button type="login" class="btn btn-primary" name='login'>Submit</button>
            </form>


            
			  
              
            
 </div>
</div>

</body>

</html>