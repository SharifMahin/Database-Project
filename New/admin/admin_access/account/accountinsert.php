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
	<li ><a href="http://localhost/new/admin/admin_access/customer/customer.php">Customers</a></li>
	<li ><a href="http://localhost/new/admin/admin_access/borrower/borrower.php">Borrowers</a></li>
	<li><a href="http://localhost/new/admin/admin_access/loan/loan.php">Loans</a></li>
	<li><a href="http://localhost/new/admin/admin_access/depositor/depositor.php">Deposites</a></li>
	<li class="active"><a href="http://localhost/new/admin/admin_access/account/account.php"">Accounts</a></li>
	</ul>
	</nav>	

<div class="title">
	<h1 align="center"><label for="exampleInputEmail1">ADD ACCOUNTS</label></h1><br/>
	</div>


  
  
</table>
  
 </form>

   <?php
   if(isset($_POST['login']))
{

   $account_no = $_POST['account_no'];
		 $balance = $_POST['balance'];
		 
		 $query="insert into account values('$account_no','$balance')"; 
		 if(mysqli_query($con,$query)){
	
		 echo"<p>New record inserted.</p>";
		 } 


}
?>
<form  action="" method = "POST" >

              <div class="form-group">
    <label  class="badge badge-danger">Account number</label>
    <input align="center" class="form-control" type="text" placeholder="Enter account number" name="account_no" required>
    
  </div>
  <div class="form-group">
    <label  class="badge badge-danger">Balance</label>
    <input class="form-control" type="text" align='center' placeholder="Enter account balance" name="balance" required><br>
  </div>
  
  <button type="login" class="btn btn-primary" name='login'>Submit</button>
            </form>


            
			  
              
            
 </div>
</div>

</body>

</html>