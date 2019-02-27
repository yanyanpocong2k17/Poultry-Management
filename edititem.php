<?php include('processitem.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Item</title>
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
	<form action="processitem.php" method="POST">
			<center><input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			<br><label>Description</label>
			<br><input type="text" name="description" class="form-control" value="<?php echo $description;?>"placeholder="Enter the number of rooster" required>
			<br><label>Unit</label>
			<br><input type="number" name="unit" class="form-control" value="<?php echo $unit;?>"placeholder="Enter the number of rooster" required>
			<br><label>Quality</label>
			<br><input type="number" name="quality" class="form-control" value="<?php echo $quality;?>"placeholder="Enter the number of Breed" required>
			<br><label>Price</label>
			<br><input type="number" name="price" class="form-control" value="<?php echo $price;?>"placeholder="Enter the number of rooster" required>
			</center>
		<center>
		<br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="additem.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="additem.php"class="btn">back</a>
		<?php endif;?>
		</div>
		</center>
	</form>
</body>
</html>