<?php
include 'config.php';
?>
<!doctype html>
<head>
	<title>East West bank/customer login</title>
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
<li><a href="http://localhost/new/customerlogin/chome.php">Customer_home</a></li>
	<li ><a href="http://localhost/new/customerlogin/deposite.php">Deposit</a></li>
	<li ><a href="http://localhost/new/customerlogin/getloan.php">Get_loan</a></li>
	<li class="active " ><a href="http://localhost/new/customerlogin/payloan.php">pay_loan</a></li>
	
<li ><a href="http://localhost/new/customerlogin/send_money.php">Send_money</a></li>
	

	</ul>
	</nav>	
	<div class="title">
	<h1 align="center">East West Bank</h1><br/><br/>
	</div>
	 <div align="center">
<img src="customer.png"  alt="picture of flower" width="140" hight="140">
<form action="payloan.php" method="POST">	
</br>
</br></br></br>
<div align ="center">
  <tr>
    <td><br/><h1 style="color: #F706F0; font-size:18px;">Account No :</h1></td>
    <td><input type="text" size="32" maxlength="32" name="account_no"placeholder="Enter your Account No "required></td>
	</tr>
	<tr>
    <td><br/><h1 style="color: #F706F0; font-size:18px;">Loan_no :</h1></td>
    <td><input type="text" size="32" maxlength="32" name="loan_no"placeholder="Enter your loan NO "required></td>
	</tr>
	<tr>
    <td><br/><h1 style="color: #F706F0; font-size:18px;">Amount :</h1></td>
    <td><input type="text" size="32" maxlength="32" name="loan_amount"placeholder="Enter your loan Amount "required></td>
	</tr>

</table>
  <tr>
	<td></br></br><input name="submit" type="submit" value="  submit  " ></td>
  </tr>
 </form>
 <?php
   
   if(isset($_POST['submit'])){

		 $account_no= $_POST['account_no'];
		 $loan_no= $_POST['loan_no'];
		 $pay = $_POST['loan_amount'];
		 $query="update loan set loan_amount = loan_amount-'$pay' where  loan_no='$loan_no'";
         $query1="update borrower set loan_amount = loan_amount-'$pay' where  loan_no='$loan_no'";		 
		 $run = mysqli_query($con,$query);
		 $run1 = mysqli_query($con,$query1);
	 		   echo"
			 <script>
			 alert('Successfully Loan Paid.');
			 window.location.href='http://localhost/new/customerlogin/chome.php';
			 </script>
			 ";		 
		
	 }

?>
 </div>
</header>
</body>

</html>