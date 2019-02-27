<?php include('processcustomer.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>poonbook</title>
</head>
<body>
     <nav class="col-sm-8 text-right"> 	 
         
	     <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		      <p><a href="index.php?logout='1'">Logout</a></p>
		 <?php endif ?> 
		</nav>
	<form action="processcustomer.php" method="POST">
			<center><input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			<br><label>Last Name</label>
			<br><input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Enter the number of Breed" required>
			<br><label>First Name</label>
			<br><input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Enter the number of rooster" required>
			<br><label>Middle Name</label>
			<br><input type="text" name="middlename" class="form-control" value="<?php echo $middlename;?>"placeholder="Enter the number of Breed" required>
			<br><label>Contact No.</label>
			<br><input type="number" name="contactno" class="form-control" value="<?php echo $contactno;?>"placeholder="Enter the number of rooster" required>
			<br><label>Address</label>
			<br><input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Enter the number of rooster" required>
			</center>
		<center>
		<br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="addsale.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="addsale.php"class="btn">back</a>
		<?php endif;?>
		</div>
		</center>
	</form>
</body>
</html>