<?php include('server.php'); 

   if (empty($_SESSION['username'])){
	   header('location: login.php');
   }
   
  
?>  
<!DOCTYPE html>
<head>
	<title>Register</title>
</head>
<body>
<a href="home.php">Home</a>
        <nav class="col-sm-8 text-left"> 	 
			 <?php if (isset($_SESSION['success'])): ?>
				  
			 <?php endif ?>
			 
			 <?php if(isset($_SESSION["username"])): ?>
				 <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				  <p><a href="index.php?logout='1'">Logout</a></p>
			 <?php endif ?> 
		</nav>
		<center>
			<a href="home.php" class="btn">Home</a>
			<a href="add.php" class="btn">Flock Mangement</a>
			<a href="addsale.php" class="btn">Sales</a>
			<a href="additem.php" class="btn">Item</a>
			<a href="addfeeds.php" class="btn">Feeds</a>
			<a href="addcustomer.php" class="btn">Customer</a>
			<a href="addmedication.php" class="btn">Medication</a>
		</center>
</body>
</html>