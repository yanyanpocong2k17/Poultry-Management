<?php include('processcustomer.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>customer</title>
		<link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap-3.3.7/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link href="css/css/style.css" rel="stylesheet">
		<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
</head>
<body>
     <br>
    <nav class="navbar navbar-inverse col-sm-10 col-sm-offset-1">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			
            </button>
            <a class="navbar-brand" href="#">
			
                <span id="brand-title">ADD CUSTOMER</span>
				
             </a>
			 
        </div>
		<ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
		    </div>
			
</nav>	

	<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<div class="col-sm-offset-2">	
		<a href="addcustomer.php" class="next">&laquo; Back</a>
		</div>
		
		
	<div class="row">
	<form action="processcustomer.php" method="POST">
	<div style="text-align:center" class="col-sm-3 col-sm-offset-1">
			</div>
		<div class="col-sm-5">
			<input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
			<div class="form-group">
			<center><label>Last Name</center>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Enter the number of Breed" required>
			</div>
			<div class="form-group">
			<center><label>First Name</center>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Enter the number of rooster" required>
			</div>
			<div class="form-group">
			<center><label>Middle Name</center>
			<input type="text" name="middlename" class="form-control" value="<?php echo $middlename;?>"placeholder="Enter the number of Breed" required>
			</div>
			<div class="form-group">
			<center><label>Contact No.</center>
			<input type="number" name="contactno" class="form-control" value="<?php echo $contactno;?>"placeholder="Enter the number of rooster" required>
			</div>
			<div class="form-group">
			<center><label>Address</label></center>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Enter the number of rooster" required>
			</div>
		
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="addsale.php"class="btn">back</a>
		<?php else: ?>
		<div class="col-sm-offset-5">
			<button type="submit" class="btn" name="save"><span class="glyphicon glyphicon-save">save</button>
		</div>	
		<?php endif;?>
	</form>
	</div>
	<?php include('footer.php');?>
</body>
</html>