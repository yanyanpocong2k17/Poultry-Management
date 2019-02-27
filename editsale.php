<?php include('processsale.php');?>


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
	<form action="processsale.php" method="POST">
			<center><input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			<br><label>Timestamp</label>
			<br><input type="date" name="timestamp" class="form-control" value="<?php echo $timestamp;?>"placeholder="Enter the number of Breed" required>
			<br><label>Cust Id</label>
			<br><input type="number" name="cust_id" class="form-control" value="<?php echo $cust_id;?>"placeholder="Enter the number of rooster" required>
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