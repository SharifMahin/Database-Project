<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<title>East West bank/Borrowers</title>
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
	<li class="active"><a href="http://localhost/new/admin/admin_access/borrower/borrower.php">Borrowers</a></li>
	<li><a href="http://localhost/new/admin/admin_access/loan/loan.php">Loans</a></li>
	<li><a href="http://localhost/new/admin/admin_access/depositor/depositor.php">Deposites</a></li>
	<li ><a href="http://localhost/new/admin/admin_access/account/account.php">Accounts</a></li>
	</ul>
	</nav>	

<div class="title">
	<h1 align="center"><label for="exampleInputEmail1">BORROWER INDEX</label></h1><br/>
	</div>


  
  
</table>
  
 </form>

<?php
   if(isset($_POST['login']))
{

   echo"<script>window.location='borrowerinsert.php'</script>";
}
?>

<div class='right_content'>

<form action="" method='POST'>
<input type="submit" class="btn btn-danger" align ='center' name='login' value='ADD BORROWERS'></input>
</form>

<table class='table'>
<tr>
<ul class="list-group list-group-horizontal-lg">
  <th><li class="list-group-item list-group-item-danger">Borrower ID</li></th>
  <th><li class="list-group-item list-group-item-danger">NID</li></th>
  <th><li class="list-group-item list-group-item-danger">Name</li></th>
  <th><li class="list-group-item list-group-item-danger">Loan no.</li></th>
  <th><li class="list-group-item list-group-item-danger">Loan amount</li></th>
  <th><li class="list-group-item list-group-item-danger">Deletion</li></th>
</ul>
</tr>

<?php 
$query="select * from borrower";
$check=mysqli_query($con,$query);
if(mysqli_num_rows($check)>0){
while($row=mysqli_fetch_array($check)){
?>

<tr>
   <ul class="list-group list-group-horizontal-lg">
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['borrower_id'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['id'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['Name'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['loan_no'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><?php echo $row['loan_amount'];?></li></th>
  <th><li class="list-group-item list-group-item-danger"><a href="borrowerdelete.php?id=<?php echo $row['borrower_id']; ?>">Delete</a></li></th>
</ul>
</tr>

<?php 
}
}
?>
</table>
</div>


			  
              
            
 </div>
</div>

</body>

</html>