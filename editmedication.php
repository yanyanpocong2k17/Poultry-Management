<?php include('processmedication.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Medication</title>
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
	<center>
	
	</center>
	<form action="processmedication.php" method="POST">
		<center>	Id<br />
		
		<?php
		
			$sql = "SELECT * FROM `data`";
			$result = mysqli_query($mysqli, $sql);
			
		?>
		<select name="flocksid">
			<?php
				$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)) {
			?>
				
			<option value="<?php echo $row['flocksid'];?>"><?php echo $row['flocksid'];?></option>
				<?php
				}
				?>
		</select>
		</center>
			<center><input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			<label>Type of medication</label>
			<br><input type="text" name="type" class="form-control" value="<?php echo $type;?>"placeholder="Enter the number of Breed" required>
			<br><label>timestamp</label>
			<br><input type="date" name="timestamp" class="form-control" value="<?php echo $timestamp;?>"placeholder="Enter the number of rooster" required>
			<br><label>Amout</label>
			<br><input type="number" name="amout" class="form-control" value="<?php echo $amout;?>"placeholder="Enter the number of Breed" required>
			</center>
		<center>
		<br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="addmedication.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="addmedication.php"class="btn">back</a>
		<?php endif;?>
		</div>
		</center>
	</form>
</body>
</html>