<?php include('process.php');?>


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
	<form action="process.php" method="POST">
			<center><input type="hidden" name="flocksid" value="<?php echo $flocksid; ?>"><br>
			<br><label>Breed</label>
			<br><input type="text" name="breed" class="form-control" value="<?php echo $breed;?>"placeholder="Enter the number of Breed" required>
			<br><label>Rooster</label>
			<br><input type="number" name="rooster" class="form-control" value="<?php echo $rooster;?>"placeholder="Enter the number of rooster" required>
			<br><label>Hen</label>
			<br><input type="number" name="hen" class="form-control" value="<?php echo $hen;?>"placeholder="Enter the number of hen" required>
			</center>
		<center>
		<br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="add.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="add.php"class="btn">back</a>
		<?php endif;?>
		</div>
		</center>
	</form>
</body>
</html>